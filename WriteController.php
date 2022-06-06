<?php

namespace App\Http\Controllers;

use App\Http\Requests\writeRequest;
use Illuminate\Http\Request;

class WriteController extends Controller{
    //
    public function index(){
        return view("Write");
    }

    public function post(writeRequest $request){
        $result = [];
        $result["text"] = $request->input("mess");
        
        //csrf トークンを破棄
        $request -> session() -> regenerateToken();

        return view('kadai05_2',compact('image'));
    }

}
