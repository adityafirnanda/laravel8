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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Aditya Firnanda",
        "email" => "firnandaaditya2236@gmail.com",
        "image" => "eren.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sopo Jarwo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos consequuntur, nobis ex, impedit quia maxime voluptatibus esse fugiat sapiente in, nam omnis saepe corporis. Praesentium, sapiente esse harum minus eum, quod officiis officia non dolorem debitis hic laudantium delectus et ratione ducimus consectetur adipisci earum. Illo corporis ipsa, doloremque voluptates recusandae, vel odit, magnam nostrum atque minus et ipsum ullam fugiat eaque laboriosam eum eligendi ratione iusto. Ipsam minus sequi animi hic, quia nesciunt, voluptatibus nihil, tempore a eligendi incidunt."
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Denis Kntl",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium iusto atque ipsam ut, quis necessitatibus consectetur pariatur sed est, harum excepturi suscipit modi odio quo in architecto ducimus vero. Similique quam et eum laborum, aspernatur nobis nihil cupiditate nam ea sed ad officia perferendis assumenda eligendi fugiat vitae! Quibusdam unde nobis numquam autem nisi magnam, soluta corporis culpa ex debitis, voluptates aperiam odit quia. Unde nihil veniam repudiandae omnis iste perspiciatis officia at cum ullam, explicabo, qui soluta nam? Amet quas nulla adipisci itaque sapiente atque totam illo nihil at, neque dicta dignissimos porro optio praesentium consectetur. Corrupti, velit? At."
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// Halaman Single Post
Route::get('posts/{slug}', function ($slug) {
    return view('post');
});
