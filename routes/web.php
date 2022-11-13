<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
    Gets a list of available posts.
*/
// Home view
Route::get('/', function () {
    return view("welcome");
})->name("home");

// List view
Route::get('/list', function () {
    $posts = array(
        array("id" => 1, "name" => "PHP"),
        array("id" => 2, "name" => "C#"),
        array("id" => 3, "name" => "JAVA"),
        array("id" => 4, "name" => "JavaScript")
    );

    return view('list', ["posts" => $posts]);
})->name("list");


/*
    Get a post by id.
*/
Route::get('/post/{id}', function ($id) {
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
})->name("post");