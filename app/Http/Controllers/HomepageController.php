<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
//get and show 
public function index(){

    
    return view('homepage.index');

}
public function dashboard(){

    
    return view('homepage.dashboard');

}
}
