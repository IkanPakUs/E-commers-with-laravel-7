<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{   
    //for fillable column cart
    protected $fillable = ['iduser','user','idstock','name','price','value'];
    
    //default parameter column
    protected $attributes = [
        'iduser' => '',
        'user' => '',
        'idstock' => '',
        'name' => '',
        'price' => '',
        'status' => '0',
        'value' => '1'
    ];
    
}
