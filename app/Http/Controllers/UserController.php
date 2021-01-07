<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController{

    public function index()
    {
        $list = [
            ["id"=> "1", "name"=> "Pedro", "surname"=> "Junior", "age"=> "22"],
            ["id"=> "2", "name"=> "Mariana", "surname"=> "Campi", "age"=> "19"],
            ["id"=> "3", "name"=> "Carla", "surname"=> "salvador", "age"=> "25"],
            ["id"=> "4", "name"=> "Lucia", "surname"=> "Castro", "age"=> "27"],
            ["id"=> "5", "name"=> "Maria", "surname"=> "Silva", "age"=> "21"],
            ["id"=> "6", "name"=> "Marcela", "surname"=> "Pereira", "age"=> "24"]
        ];
    
        return response()->json($list, 200);
    }







}
