<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeLogController extends Controller
{
    //
    public function index(){
        return view('homelog',[
            'title' => 'Home'
        ]);
    }
}
