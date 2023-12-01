<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class homecontroller extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype == 0){
                return view('main-website.index');
            }
            elseif(Auth::user()->usertype == 1){
                return view('admin.dashboard');
            }
        }
    }
}
