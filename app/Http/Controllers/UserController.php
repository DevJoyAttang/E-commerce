<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UserController extends Controller
{   
    protected $variable;

    public function  __construct(User $user){
        $this->variable = $user;
    
    }

    
    public function registerview(){
        $anything =$this->variable->all();
        
        return view('registeredusers',['users'=>$anything]);
    }




    public function viewAdminDasboard(){
        return view('adminDashboard');
    }
   

  




}
