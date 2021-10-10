<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view ('Posts', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    public function show($slug){
        return view ('Post', [
            "title" => "Single post",
            "post" => Post::find($slug)
        ]);
    }
}
