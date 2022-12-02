<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class HomeController extends Controller
{
    //
    public function dashboard(){
        return view('dashboard');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function add(){
        return view('add');
    }
    public function view(){
        return view('view', ['CustomerList'=>Customer::all()]);
    }
}
