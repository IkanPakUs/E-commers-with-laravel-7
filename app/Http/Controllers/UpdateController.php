<?php

namespace App\Http\Controllers;

use App\Stock;
use App\Cart;
use App\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function updateRole(Request $request, $id)
    {
        $admin = 1;
        $member = 2;
        $user = User::where('id', $id)
                    ->first();
        $name = $user->name;

        if($user->role_id == 1){

            User::where('id', $id)
                ->update(['role_id' => $member
                    ]);

            $status = 'member';

        }elseif($user->role_id == 2){

            User::where('id', $id)
                ->update(['role_id' => $admin
                    ]);

            $status = 'admin';

        }

        return redirect('admin/user')->with('status',"$name be $status");
    }

    public function updateStock(Request $request, Stock $stock)
    {
        $available = 1;
        $sold = 0;
        $id = $stock->id;

        $stock = Stock::where('id', $id)
                    ->first();

        if ($stock->status == 1){

            Stock::where('id', $id)
                ->update(['status' => $sold
                    ]);

            $status = 'Sold';

        }elseif($stock->status == 0){

            Stock::where('id', $id)
                ->update(['status' => $available
                    ]);

            $status = 'Available';

        }

            return redirect('admin/stock')->with('status',"Barang $status now");
    }
}
