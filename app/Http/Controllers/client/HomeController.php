<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('client.index');
    }

    public function detail($id){
        return view('client.page.product_detail');
    }
}
