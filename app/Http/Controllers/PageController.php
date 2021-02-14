<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pageController extends Controller
{
    public function home() {
        
        return view('index');
    
    }

    public function about(){

        return view('about');

    }

    public function dashboard()
    {
        return view('admin.index');
    }
}
