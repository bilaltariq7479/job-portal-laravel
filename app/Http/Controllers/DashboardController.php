<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
        return view('dashboard');
    }
    function verify(){
        return view('user.verify');
    }
}
