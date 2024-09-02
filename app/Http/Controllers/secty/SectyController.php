<?php

namespace App\Http\Controllers\secty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectyController extends Controller
{
   /**
    * Index
    */
    public function index(){
        return view('secty.index');
    }
}
