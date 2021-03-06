<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Software;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $InitialState = [
            'users' => User::all(),
            'productCount'=> $this->getTotalProducts(),
            'mostRatedProduct'=> $this->getMostRatedProduct(),
            'totalDownloads' => $this->getTotalDownloads(),
        ];

        return view('admin')->with($InitialState);
    }

    public function getTotalProducts(){
       return count(Software::all());
    } 

    public function getMostRatedProduct(){
        return Software::orderBy('stars','desc')->first();
    }
    public function getTotalDownloads(){
        return "97753";
    }
}
