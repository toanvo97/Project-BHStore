<?php

namespace App\Http\Controllers;

use App\Models\bh_users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index (){
        return view('admin.page.login');
    }

    public function login(Request $request){
        $query=bh_users::select()->get();
        // foreach($query as $item){
        //     if($request->email==$item->email && $request->pass==$item->password){
        //         return redirect()->route('admin');
        //     }else{
        //         return view('admin.page.login');
        //     }
        // }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->pass,'idAuth'=>1],$remember=true)){
            // dd(Auth::user());
            return redirect()->route('admin');
        }else{
            session()->flash('notice','Bạn không có quyền đăng nhập!!!');
            return view('admin.page.login');
        }
    }

    public function logout(){
        Auth::logout();
        return view('admin.page.login');
    }
}
