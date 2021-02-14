<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Stock;
use App\Cart;

class AdminController extends Controller
{
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
    public function show(user $user)
    {
        $users = User::all();
        return view('admin.user',compact('users'));
    }

    public function view()
    {
        return view('stock.store');
    }

    public function stocks()
    {   
        //get all stock from stocks table
        $stocks = Stock::all();
        //returning view and data stock
        return view('admin.stock',compact('stocks'));
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
    

    public function orders(user $user)
    {   
        $orders = Cart::all();
        return view('.admin.order',['orders'=>$orders]);
    }

}
