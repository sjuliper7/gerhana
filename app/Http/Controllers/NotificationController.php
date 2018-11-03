<?php

namespace App\Http\Controllers;
use App\Notification;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = Notification::orderby('id', 'desc')->get();

        return view('adminlte::notifications.index', compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('adminlte::notifications.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notification = new Notification();
        $notification->content = $request['content'];
        $notification->id_user = $request['customer-select'];

        $notification->save();


        //Display success Rejected Request
        return redirect()->route('notifications.index')
            ->with('flash_message', 'Notifications,
             '. $notification->content.' created');
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
        $notification = Notifications::findOrFail($id);
        return view ('adminlte::notifications.edit', compact('notification'));
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
        $notification = Notification::findOrFail($id);
        $notification->content = $request['content'];

        $notification->save();

        return redirect()->route('notifications.index',
            $notification->id)->with('flash_message',
            'Status, '. $notification->content.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->delete();

        return redirect()->route('notifications.index')
            ->with('flash_message',
                'Notification Product successfully deleted');
    }
}
