<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Form;

use Illuminate\Support\Facades\DB;

use App\SoftwareCategory;

class UploadController extends Controller
{
   public function index(Request $request){
       
        $categories = SoftwareCategory::select('id', 'name')->get();
  
       return view('upload')->with('categories', $categories);
   }
}
