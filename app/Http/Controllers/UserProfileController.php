<?php

namespace App\Http\Controllers;

use App\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = DB::table('user_profiles')->get();
        $user = Auth::user();
        return view('adminlte::user-profile.index', compact('profiles'));

//        $profile = Profile::orderby('id', 'desc')->get();
//        return view('adminlte::products.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = Auth::user();
        return view('adminlte::user-profile.create',compact('userProfiles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userProfile= new UserProfile();
        $userProfile->profile_image=$request['profile_image'];
//        $request->file('image')->move('images/',$fileName);l''

        $userProfile->full_name = $request['full_name'];
        $userProfile->date_of_birth= $request['date_of_birth'];
        $userProfile->address = $request['address'];
        $userProfile->id_user = Auth::user()->id;
        $userProfile->save();

        return redirect()->route('user-profile.create')
            ->with('flash_message', 'User Profile,
             '. $userProfile->name.' created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $userProfiles= UserProfile::where($id)==Auth::User->get();
//        return view("adminlte::user-profiles.index",compact('userProfiles'));
//
//        $requestStore = RequestStore::findOrFail($id);
//        return view("adminlte::store-requests.show",compact('requestStore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        return view ('adminlte::profile.edit', compact('profile'));

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
        $profile = Profile::findOrFail($id);
        $profile->name = $request['name'];
        $profile->price = $request['price'];
        $profile->stock = $request['stock'];
        $profile->description = $request['description'];

        $file       = $request->file('image_profile');
        $fileName   = $file->getClientOriginalName();
        if($fileName != $profile->image){
            $request->file('image')->move('images/',$fileName);
            $profile->profile_image = $fileName;
        }

        $profile->save();

        return redirect()->route('profile.index',
            $profile->id)->with('flash_message',
            'Article, '. $profile->name.' updated');
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
