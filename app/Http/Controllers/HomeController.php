<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function home(){

      $usertype=Auth::user()->users;
        if($users=='admin')
        {
         return view('admin');
        
      }
        else
        {
           return view('dashboard');
        }



    }
}
