<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SoftwareCategory;

use App\Software;

use Carbon\Carbon;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = SoftwareCategory::all();
        return view('index', ['categories'=> $categories]);
    }

    public function softwares(Request $request){
      $searchTerm = $request->input('term');
      $category = $request->input('category');
      
      if($searchTerm){
          $softwares = $this->search($searchTerm);
           return view('softwares', ['softwares'=> $softwares, 'term' => $searchTerm]);
      }
          
      if($category){
         $softwares = $this->fetchByCategory($category);
           return view('softwares', ['softwares'=> $softwares]);
      }

      return view('softwares', ['softwares'=> Software::all()]);
    }

    public function software($id){
        $software = Software::findOrfail($id);
        $comments = $software->comments();
        $data = [
            "software"=> $software,
            "comments" =>$comments
        ];
      
         return view('software')->with($data);
    }

public function fetchByCategory($category){
    return
       Software::with('category')->get()
         ->filter(function($value, $software) use ($category){
                return $value->category->name == $category;
        });
}

public function search($term){
    return 
      Software::where('name', $term)
           ->orWhere('name', 'like', '%' .$term . '%')->get();
  } 

public function downloaded(){
    return view('downloaded');
}

} 