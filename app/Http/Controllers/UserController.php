<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware(['role:director']);
    }
//    public function dashboard(){
//        return view('user.dashboard');
//    }
public function show()
{
  return view('welcome');
}
}
