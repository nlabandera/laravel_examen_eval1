<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
   	function index(){

   		$products=Product::all();
   		
   		return view('productos.index',['products'=>'$products']);
   	}
}
