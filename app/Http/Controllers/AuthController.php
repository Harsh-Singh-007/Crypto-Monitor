<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{
    public function getRegister(){
        return view('auth.register');
    }


    public function check_email_unique(Request $request){
    	$user=User::where('email',$request->email)->first();
    	if($user){
    		echo 'false';
    	}else{
    		echo 'true';
    	}
    }
    public function postRegister(Request $request){

       
        $request->validate([
        'first_name'=>'required|min:2|max:100',
        'last_name'=>'required|min:2|max:100',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:5|max:10',
        'confirm_password'=>'required|same:password',
        
        ],[
           'first_name.required'=>'First name is required',
           'last_name.required'=>'Last name is required',
        ]);

           $user=User::create([
               'first_name'=>$request->first_name,
               'last_name'=>$request->last_name,
               'email'=>$request->email,
               'password'=>bcrypt($request->password),
               
           ]);

         return redirect()->route('getLogin')->with('success','Registration successfull');

   }

   public function getLogin(){
    return view('auth.login');
}

public function postLogin(Request $request){

    $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:6|max:100',
        
    ]);



        $user=User::where('email',$request->email)->first();

        if(!$user){
            return redirect()->back()->with('error','Email is not registered');
        }else{

                if(!$user->is_active){
                    return redirect()->back()->with('error','User is not active. Contact admin');
                }else{

                    $remember_me=($request->remember_me)?true:false;
                    if(auth()->attempt($request->only('email','password'),$remember_me)){
                       return redirect()->route('home')->with('success','Login successfull');
                    }else{
                        return redirect()->back()->with('error','Invalid credentials');
                    }

                }

            

        }
      
    


}
}
