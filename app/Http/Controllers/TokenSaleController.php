<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokenSaleController extends Controller
{
    public function index(){
        return view('token-sale');
    }
    public function detail(){
        return view('token-sale-detail');
    }
    public function manager(){
        return view('manager');
    }
}
