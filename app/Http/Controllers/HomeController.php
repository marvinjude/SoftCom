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

    public function softwares(){
        $softwares = Software::all();
        return view('softwares', [
            'softwares'=> $softwares,
        ]);
    }

    public function software($id){
        $software = Software::findOrfail($id);
        $comments = $software->getComments();
        $data = [
            "software"=> $software,
            "comments" =>$comments
        ];
      
         return view('software')->with($data);
    }
}
