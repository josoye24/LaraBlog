<?php

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



Route::get("/", "PostController@index")->name("home");
Route::get("posts/create", "PostController@create");
Route::post("posts/create", "PostController@store");
Route::get("/posts/{post}", "PostController@show");
Route::post("/posts/{post}/comments", "CommentsController@store");
Route::get("/posts/tags/{tag}", "TagsController@index");



Route::get("/register", "RegistrationController@create");
Route::post("/register", "RegistrationController@store");

Route::get("/login", "SessionsController@create")->name("login");
Route::post("/login", "SessionsController@store");

Route::get("/logout", "SessionsController@destroy");



/*
GET /posts
GET /posts/create

POST /posts

GET /posts{id}

GET /posts/{id}/edit

PATCH /posts/{id}

DELETE /post/{id}
*/