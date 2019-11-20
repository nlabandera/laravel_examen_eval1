<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    function newShop(Request $request){
    	$request->validate([
    		'name'=>'required | min:2 | max: 20',
    		'description'=>'required | max: 255',
    		'password'=>'required | min:4 | max: 20',
    		'email'=>'required',
    		'likes'=>'required'
    	]);
    	return view ('muestratienda', ['name'=>request('name'), 'description'=>request('description'),'password'=>request('password'),'email'=>request('email'),'likes'=>request('likes'),]);
    }
    
}
