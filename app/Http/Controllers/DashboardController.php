<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard')->with($this->dashboardData());
    }

    public function dashboardData(){
        return[
            "productsCount"=> $this->productsCount(),
            "overallRating" => $this->overallRating(),
            "totalDownloads"=> $this->totalDownloads(),
            "allSoftware" =>  $this->allSoftware(),
        ];
    }

    public function productsCount(){
         return Auth::user()->software()->count();
    }

    public function overallRating(){
        // to be implemented
    }
    public function totalDownloads(){
       // to be implemented
    }

    public function allSoftware(){
        return Auth::user()->software();
    }
}
