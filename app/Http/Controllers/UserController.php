<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\User;

class UserController extends Controller
{
    
    public function perfil(){
        
        echo auth()->id();
        
    }
    
}
