<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\exboardRequest;

class exboardController extends Controller
{
    public function index(){
        return view('exboard');
    }
    public function post(){

    }
}
