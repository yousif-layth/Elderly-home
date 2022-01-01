<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
//    public function __construct()
//    {
//        $this->middleware('auth');
////        $this->middleware(['role:adminstator']);
//    }
//    public function dashboard(){
//        return view('admin.dashboard');
//    }
    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('h');
    }
}
