<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipeUser;

class TipeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipeUsers = TipeUser::orderby('id', 'desc')->get();

        return view('adminlte::tipe-users.index', compact('tipeUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('adminlte::tipe-users.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipeUser = new TipeUser();
        $tipeUser->name = $request['name'];

        $tipeUser->save();

        return redirect()->route('tipe-users.index')
            ->with('flash_message', 'Tipe User,
             '. $tipeUser->name.' created');
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
        $tipeUser = TipeUser::findOrFail($id);
        return view ('adminlte::tipe-users.edit', compact('tipeUser'));
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
        $tipeUser = TipeUser::findOrFail($id);
        $tipeUser->name = $request['name'];

        $tipeUser->save();

        return redirect()->route('tipe-users.index',
            $tipeUser->id)->with('flash_message',
            'Status, '. $tipeUser->name.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipeUser = TipeUser::findOrFail($id);
        $tipeUser ->delete();

        return redirect()->route('tipe-users.index')
                ->with('flash-message',
                    'TipeUser successfully deleted');

    }

}
