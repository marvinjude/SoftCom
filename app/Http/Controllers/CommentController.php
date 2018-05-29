<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

class CommentController extends Controller
{
    protected function create(Request $request){
       Comment::create($request->all());
       return redirect()->back();
    }
}
