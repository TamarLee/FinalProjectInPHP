<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;

class PriceController extends Controller
{
    public function showPrice(){
    	$price = Price::all();
    	return view('price', [
    		'price'=>$price
    	]);
    }
}
