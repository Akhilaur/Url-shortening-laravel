<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Validation\Rule;

class UserController extends Controller

{   public function logout(){
    auth()->logout();
    return redirect('/');

}
    public function login(Request $request){
        $incomingFields = $request->validate([
            'loginemail'=>'required',
            'loginpassword'=>'required'
        ]);
        if (auth()->attempt(['email'=>$incomingFields['loginemail'],'password'=>$incomingFields['loginpassword']])){

            $request->session()->regenerate();
            return redirect('/home');
        }
        return redirect('/login');
    }
    public function register(Request $request){
        $incomingFields = $request->validate([
            'name'=> 'required',
            'email'=>'required',
            'password'=> 'required'
        ]);
        $incomingFields['password']=$incomingFields['password'];
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/login');
        
    }

}

