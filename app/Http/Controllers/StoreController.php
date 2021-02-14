<?php
namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Cart;
use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class StoreController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addCart(Stock $stock)
    {

        $iduser = Auth::user()->id;
        $user = Auth::user()->name;
        $idstock = $stock->id;
        $namestock = $stock->name;

        $pricestock = $stock->price;

            //get the cart user for check the value
            $Astock = Cart::where('idstock',$idstock)
                          ->where('iduser',$iduser)  
                          ->first();
                        
            if($Astock) {
            //calculate the value and price              
            $value = $Astock->value;
            $value += 1;

            $price = $Astock->price;
            $price = $price * $value;

            //update the value for cart table
            Cart::where('iduser', $iduser)
                ->where('idstock', $idstock)
                ->where('value',$Astock->value)
                ->update(['value' => $value,
                          'price' => $price
                        ]);

            return redirect('catalog')->with('status','Stock successfuly added');

            }else{

                //create the cart in cart table
                Cart::create([
                    'iduser' => $iduser,
                    'user' => $user,
                    'idstock' => $idstock,
                    'name' => $namestock,
                    'price' => $pricestock,
                ]);

            return redirect('catalog')->with('status','Stock successfuly added');

            }
    }

    public function addStock(Request $request)
    {
        
        $stock = new Stock;
        
        $stock->name = $request->name;
        $stock->price = $request->price;
        $stock->description = $request->description;
        
        
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $stock->image  = $name;
        $file->move('assets/img',$name);

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'categoryName' => 'required',
        ]);

        $stock->categoryName = $request->categoryName;

        $stock->save();
        return redirect('admin/stock');
        
    }

}
