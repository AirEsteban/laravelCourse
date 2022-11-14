<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(){
        return view("welcome");
    }

    function list(){
        $posts = Post::latest()->paginate(15);
        return view('list', ["posts" => $posts]);
    }

    function post(Post $post){
        return view("detail", ["post" => $post]);
    }
}
