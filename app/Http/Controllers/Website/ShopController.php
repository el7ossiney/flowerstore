<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        return view('web.shop.index');
    }
    public function show(string $slug){

    }

    
}
