<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Software;

class SoftwareController extends Controller
{
    public function star(Request $request){
      Software::findOrFail($request->software_id)->increment('stars');
      return redirect()->route('product', ['id'=> $request->software_id]);
    }
}
