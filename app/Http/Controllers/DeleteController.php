<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cart;
use App\Stock;



class DeleteController extends Controller
{
    public function cartDelete(Cart $cart)
    {   
        //find the stock cart selected
        $Dcart = Cart::find($cart->id);

        //delete the cart stock
        $Dcart->delete();
        
        return redirect('/cart');
    }

    public function cancelOrder(cart $cart)
    {   
        //find the stock cart selected
        $Dcart = Cart::find($id);

        //delete the cart stock
        $Dcart->delete();

        return redirect('admin/order');
    }

    public function deleteUser(user $user)
    {
        //find the user selected
        $Duser = User::find($user->id);

        //delete user
        $Duser->delete();
        
        return redirect('/admin/user')->with('status','Data user succesfully deleted');
    }

    public function deleteStock(Stock $stock)
    {
        //find the stock selected
        $Dstock = Stock::find($stock->id);
        $idstock = $stock->id;

        $Dcart = Cart::firstWhere('idstock',$idstock);

        if ($Dcart) {
            //delete the cart stock
            $Dcart->delete();
        }


        //delete stock
        $Dstock->delete();

        
        return redirect('/admin/stock');
    }
}
