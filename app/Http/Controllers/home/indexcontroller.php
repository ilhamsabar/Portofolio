<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class indexcontroller extends Controller
{
    public function index(){
        return View('home.index');
    }

    public function admin(){

        $dta = DB::connection('mysql2')->select('select * from users');
        dd($dta);
        return View('admin.dashboard');
    }
}
