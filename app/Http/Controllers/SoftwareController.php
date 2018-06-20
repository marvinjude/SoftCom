<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Software;

use Auth;

class SoftwareController extends Controller
{
    public function star(Request $request){
      Software::findOrFail($request->software_id)->increment('stars');
      return redirect()->route('product', ['id'=> $request->software_id]);
    }

    public function store(Request $request){ 
        $software = new Software();
        $software->name = $request->input('name');
        $software->description = $request->input('description');
        $software->author_id = Auth::user()->id;
        $software->category_id = $request->input('category');
        $software->download_link = $request->input('image');
        $software->price = $request->input('price');
        $software->save();

        return redirect()->back()->with('message', "Successfully Created");
    }


}
