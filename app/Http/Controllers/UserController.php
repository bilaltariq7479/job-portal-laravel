<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    function createSeeker(){
        return view('user.seeker-register');
    }
    function storeSeeker(){
        request()->validate([
            'name'=>['required','string','max:255'],
            'email'=>['required','string','email','unique:users'],
            'password'=>['required']
        ]);
        User::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'password'=>bcrypt(request('password')),
            'user_type'=>'seeker',
            'user_trial'=>now()->addWeek(),
        ]);
        return redirect()->route('login')->with('successMessage','created');
    }
    function login(){
        return view('user.login');
    }
    function createEmployer(){
        return view('user.employerRegister');
    }
    function storeEmployer(){
        request()->validate([
            'name'=>['required','string','max:255'],
            'email'=>['required','string','email','unique:users'],
            'password'=>['required']
        ]);
        User::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'password'=>bcrypt(request('password')),
            'user_type'=>'employer'
        ]);
        return redirect()->route('login')->with('successMessage','created');
    }
    function postlogin(Request $request){
        $cre=$request->only('email','password');
        if(Auth::attempt($cre)){
            return redirect()->intended('dashboard');
        }
        return "<script> alert('Wrong Email or Password') </script>";
    }
    function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
}
