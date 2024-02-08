<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\controllers\productController;
use App\Models\Product;



class AuthController extends Controller
{
    public function register(){
        return view('register');

    }


    public function registration (Request $request){
      //dd($request);
        $request->password =bcrypt($request->password);

        $registerDetails = [
           'name' => $request->name,
           'email' => $request->email,
           'role' => $request->role,
           'password' =>$request->password,
           'passwordConfirmation' =>$request->passwordConfirmation,
        ];
        $user =new User; 
        $user->create($registerDetails);

        return redirect()->route('dashboard');

        
    }

    
    public function login(){
      return view('login');
    }

    public function loginUser(Request $request){
      $request->validate([
        'email'=>'required',
        'password'=>'required',
      ]);
      
      $credentials =[
        "email" => $request->email,
        "password" => $request->password,
      ];
      
      if(User::where('email', $request->email)->first() !== null){
        // dd($credentials);
        
        $user = User::where('email', $request->email)->first();

        $role= $user->role;
        if($role =='admin'){
          return redirect()-> route('admin.dashboard');

        }
      
        return view ('dashboard',["user" => User::where('email',$request->email)->first()]);
      
      }

      return redirect()->route('login')->withErrors("login credentials are invalid");
    

    }
   
    
 

    public function logout(){
      Auth::logout();
      return redirect()->route("login");
    }

    public function dashboard(){
      return view('dashboard');
      //$products = new Product;
        //$products->all();
        //return view ('dashboard',['products' =>$products->all()]);
    
      
      
    }
    public function userRegister(){
      return view ('userReg');
    }

}