<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Comment;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use const http\Client\Curl\AUTH_ANY;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $setting = Setting::first();
        return view('home.user.index',[
            'setting' => $setting,

            ]);
    }

    public function appointments()
    {
        $setting = Setting::first();
        $data = Appointment::where('user_id','=',Auth::id())->get();
        return view('home.user.appointments',[
            'data' => $data,
            'setting' => $setting,
        ]);
    }

    public function appointmentcancel($id)
    {
        //
        $data= Appointment::find($id);
        $data->delete();
        return redirect(route('userpanel.appointments'));
    }


    public function reviews()
    {
        $setting = Setting::first();
        $comments = Comment::where('user_id','=',Auth::id())->get();
        return view('home.user.comments',[
            'comments' => $comments,
            'setting' => $setting,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function reviewdestroy(Category $category,$id)
    {
        //
        $data= Comment::find($id);
        $data->delete();
        return redirect(route('userpanel.reviews'));
    }
}
