<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extraculiculer;

class ExtraculiculerController extends Controller
{
    //
    public static function index(){
        return view('extraculiculer', [
            "title" => "extraculiculer",
            "extra" => Extraculiculer::all()
        ]);
    }
}
