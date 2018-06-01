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
    protected function validator(array $data){
            return Validator::make($data, [
            'topic' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'comment' => 'required|string',
        ]);
    }

}

