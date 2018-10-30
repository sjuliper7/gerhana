<?php

namespace App\Http\Controllers;

use App\StatusStore;
use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{

    public function __construct() {
        $this->middleware(['auth', 'isCustomer']);//isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    public function myStore(){

        if(Auth::user()->store == null){
            return view('store.request-store');
        }else{
            if(Auth::user()->store->status->name === "PANDING"){
                return view('store.panding');
            }else{
                return view('store.my-store');
            }

        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $status = StatusStore::where('name','PANDING')->firstOrFail();

        //instance object for StatusStore
        $store = new Store();
        $store->store_name         = $request['store-name'];
        $store->store_owner        = $request['store-owner'];
        $store->store_email        = $request['store-email'];
        $store->store_phone        = $request['store-phone'];
        $store->store_address      = $request['store-address'];
        $store->store_ktp          = $request['store-ktp'];
        $store->store_npwp         = $request['store-npwp'];
        $store->store_account_bank = $request['store-account-number'];
        $store->store_account_type = $request['type-bank'];
        $store->id_status          = $status->id;
        $store->id_user            = Auth::user()->id;

        $ktpFile    = $request->file('ktp-image');
        $ktpFileName   = $ktpFile->getClientOriginalName();
        $request->file('ktp-image')->move('images/',$ktpFileName);

        $npwpFile    = $request->file('npwp-image');
        $npwpFileName   = $npwpFile->getClientOriginalName();
        $request->file('npwp-image')->move('images/',$npwpFileName);

        $accountFile    = $request->file('account-image');
        $accountFileName   = $accountFile->getClientOriginalName();
        $request->file('account-image')->move('images/',$accountFileName);

        $store->store_ktp_image             = $ktpFileName;
        $store->store_npwp_image            = $npwpFileName;
        $store->store_account_bank_image    = $accountFileName;

        $store->save();

        return redirect('my-store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
