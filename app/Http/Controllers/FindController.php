<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use App\Cart;
use App\User;

class FindController extends Controller
{
    public function stock(Request $request)
    {
        $stocks = $request->find;

        $stocks = Stock::where('name','LIKE',"%".$stocks."%")
                       ->orWhere('categoryName','LIKE',"%".$stocks."%")
                       ->get();
        
        return view('admin.stock',['stocks' => $stocks]);

    }

    public function user(Request $request)
    {
        $users = $request->find;

        $users = User::where('name','LIKE',"%".$users."%")
                     ->orWhere('email','LIKE',"%".$users."%")
                     ->get();
        
        return view('admin.user',['users' => $users]);
    
    }

    public function order(Request $request)
    {
        $orders = $request->find;


        $orders = Cart::where('name','LIKE',"%".$orders."%")
                       ->orWhere('user','LIKE',"%".$orders."%")
                       ->get();
    
        return view('admin.order',['orders'=>$orders]);
    
    }
}
