<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController{

    public function index()
    {
        return view('welcome');
    }



    public function login()
    {
        return view('login');
    }



    public function register()
    {
        return view('register');
    }



    public function home()
    {
        return view('home');
    }





}
