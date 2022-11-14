<?php

namespace App\Http\Controllers;
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


// Moving the flow to controllers and not via this file
// Creating a group to manage all the requests that belongs to Page Controller

Route::controller(PageController::class)->group(function () {
    Route::get('/', "home")->name("home");
    Route::get('/list', "list")->name("list");
    Route::get('/post/{post}', "post")->name("post");
});