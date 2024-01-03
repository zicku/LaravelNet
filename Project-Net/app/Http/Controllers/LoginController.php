<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function index(){
        return view ('auth.login');
    }

    public function login_proses(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $data =[
            'name' => $request-> name,
            'password'=> $request-> password
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('index');
        } else {
            return redirect()->route('login')->with('failed','you input wrong email or password');
            
        }
        
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success','you succesfull logout');
    }

    public function register(){
        return view ('auth.register');
    }

    public function register_proses(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required|min:8',
            'email' => 'required|email|unique:users,email',
        ]);
    
        $data['name'] = $request->name;
        $data['password'] = Hash::make($request->password);
        $data['email'] = $request->email;
    
        $user = User::create($data);
    
        $login = [
            'name' => $request->name,
            'password' => $request->password,
        ];
    
        if (Auth::attempt($login)) {
            return redirect()->route('login');
        }
 
    }
}
