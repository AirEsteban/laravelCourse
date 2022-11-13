<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(){
        return view("welcome");
    }

    function list(){
        $posts = array(
            array("id" => 1, "name" => "PHP"),
            array("id" => 2, "name" => "C#"),
            array("id" => 3, "name" => "JAVA"),
            array("id" => 4, "name" => "JavaScript")
        );
    
        return view('list', ["posts" => $posts]);
    }

    function post($id){
        $posts = array();
        $posts[] = array("id" => 1, "name" => "PHP", "description" => "Best Language.");
        $posts[] = array("id" => 2, "name" => "C#", "description" => "Nice Language");
        $posts[] = array("id" => 3, "name" => "JAVA", "description" => "Nice but verbose Language");
        $posts[] = array("id" => 4, "name" => "JavaScript", "description" => "Wonderful");
    
        $filteredPost = null;
    
        foreach($posts as $post){
            if($post["id"] == $id){
                $filteredPost = $post;
            }
        }
    
        return view("detail", ["post" => $filteredPost]);
    }
}
