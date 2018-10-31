<?php

namespace App\Http\Controllers;

use App\RequestStore;
use App\StatusStore;
use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = StatusStore::where('name','PENDING')->firstOrFail();
        $stores = RequestStore::where('id_status',$status->id )->orderby('id', 'desc')->get();
        return view('adminlte::store-requests.index',compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('store.request-store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status = StatusStore::where('name','PENDING')->firstOrFail();

        //instance object for StatusStore
        $requestStore = new RequestStore();
        $requestStore->store_name         = $request['store-name'];
        $requestStore->store_owner        = $request['store-owner'];
        $requestStore->store_email        = $request['store-email'];
        $requestStore->store_phone        = $request['store-phone'];
        $requestStore->store_address      = $request['store-address'];
        $requestStore->store_ktp          = $request['store-ktp'];
        $requestStore->store_npwp         = $request['store-npwp'];
        $requestStore->store_account_bank = $request['store-account-number'];
        $requestStore->store_account_type = $request['type-bank'];
        $requestStore->id_status          = $status->id;
        $requestStore->id_user            = Auth::user()->id;

        $ktpFile    = $request->file('ktp-image');
        $ktpFileName   = $ktpFile->getClientOriginalName();
        $request->file('ktp-image')->move('images/',$ktpFileName);

        $npwpFile    = $request->file('npwp-image');
        $npwpFileName   = $npwpFile->getClientOriginalName();
        $request->file('npwp-image')->move('images/',$npwpFileName);

        $accountFile    = $request->file('account-image');
        $accountFileName   = $accountFile->getClientOriginalName();
        $request->file('account-image')->move('images/',$accountFileName);

        $requestStore->store_ktp_image             = $ktpFileName;
        $requestStore->store_npwp_image            = $npwpFileName;
        $requestStore->store_account_bank_image    = $accountFileName;
        $requestStore->comment                     = "-";

        $requestStore->save();

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
        $requestStore = RequestStore::findOrFail($id);
        return view("adminlte::store-requests.show",compact('requestStore'));
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
        $status = StatusStore::where('name','ACCEPTED')->firstOrFail();
        $requestStore = RequestStore::findOrFail($id);
        $requestStore->id_status = $status->id;

        //create instance for store
        $store = new Store();
        //attributes


        $store->save();
        $requestStore->save();
        dd($status->id);
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
