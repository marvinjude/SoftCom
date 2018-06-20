<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Form;

class UploadController extends Controller
{
   public function index(Request $request){
    // dd($request->input('name'));

       return view('upload');
   }
}
