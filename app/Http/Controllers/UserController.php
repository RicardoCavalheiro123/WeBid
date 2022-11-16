<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Auction;

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
        $user = User::find($id);
        return view('pages.profile',['user' => $user]);
    }

    public function myAuctions($id){
        $user = User::find($id);
        $auctions = $user->auctions;
        $myauctions = Auction::selectRaw('*')->where('isover','=','False')->where('idowner','=',$id)->get();


        return view('pages.userAuctions',['user' => $user, 'auctions' => $myauctions]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function balance($id)
    {
        $user = User::find($id);
        return view('pages.balance',['user' => $user]);
    }

    /**
     * Add deposit to user balance
     *
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function deposit(Request $request)
    {
        $user = User::find($request->id);
        $user->balance = $user->balance + $request->deposit;
        $user->save();
        return redirect()->route('profile', ['id' => $user->id]);
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
