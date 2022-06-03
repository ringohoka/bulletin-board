<?php

namespace App\Http\Controllers;

use App\Http\Requests\writeRequest;
use Illuminate\Http\Request;

class WriteController extends Controller
{
    //
    public function index(){
        return view("Write", );
    }

    public function post(writeRequest $writeRequest){
            
    }
}
