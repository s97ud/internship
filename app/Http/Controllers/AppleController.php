<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apple;

class AppleController extends Controller
{
    public function first_view()
    {
    	return view('file1');
    }
    public function insert_apple_details(Request $request){
    	Apple::create([
    		'color'=> $request['color'],
    		'apple_id'=>$request['apple_id'],
    		'shape'=>$request['shape'],
    		'size'=>$request['size']]);
    	return view('file1');

    }
}
