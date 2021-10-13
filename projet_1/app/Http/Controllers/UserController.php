<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function first(){
        $name = "Hamid";
        $prenom = "Sougouma Ali";
        return view('first',compact('name', 'prenom'));
    }
}
