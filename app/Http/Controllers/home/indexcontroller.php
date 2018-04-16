<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexcontroller extends Controller
{
    public function index(){
        return View('home.index');
    }
}
