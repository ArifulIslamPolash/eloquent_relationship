<?php

use Illuminate\Support\Facades\Route;
use App\Models\Phone;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {

    $phone = User::find(3);
    $phone = User::find(3)->phone;
    // return $phone;

    $user = Phone::find(2);
    $user = Phone::find(2)->user;
    // return $user;

    $users = User::all();
    // return $users;
    $phones = Phone::all();
    // return $phones;

    $comments = Post::find(3)->comment;
    return $comments;
    // dd($comments);
    // $posts = Post::all();
    // return $posts;

    // return view('welcome', compact('phones'));
});
Route::get('/relation', function () {


    $comments = Post::find(3)->comment;
    // return $comments;

    $posts = Comment::find(3);
    $posts = Comment::find(3)->post;
    // return $posts;


    $posts=Post::all();
    // return $posts;
    $comments=Comment::all();
    // return $comments;

    $posts=Post::with('Comment')->get();
    // return $posts;

    // dd($posts);
    // return $posts;

    return view('commentpost', compact('comments'));
});
Route::get('/manytomany', function () {

    $posts=Post::with('categories')->get();
    // $posts=Post::all();
    // return $posts;

    $categories=Category::with('posts')->get();
    // $categories=Category::all();
    // return $categories;


    return view('manytomany',compact('posts'));
});
