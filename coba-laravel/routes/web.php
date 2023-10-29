<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
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
        "name" => "Syifa Rizki Mutia",
        "email" => "syifa@gmail.com",
        "image" => "profile.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Syifa Rizki Mutia",
            "body" => " Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis quas voluptatem, quidem culpa, 
             laborum amet illo non, tempora optio cum repellendus vitae. Doloribus incidunt asperiores cumque, eius vitae, 
             odit assumenda beatae blanditiis exercitationem dolor eum est iste praesentium cupiditate nobis veniam ea error 
             illum similique qui corporis nostrum, fugit atque magni! Nihil libero quae quam dicta illo corrupti doloribus placeat
             et rem. Accusantium odit recusandae provident minus numquam expedita, libero dolores alias. Fugit, cumque.
             Mollitia possimus at quia? Ducimus, consequatur."
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Shaly Rahma Mutia",
            "body" => " Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat id fuga commodi dicta facilis, assumenda ullam
             quidem laudantium blanditiis molestiae, expedita ducimus tenetur dolores quasi ut, iste sed corrupti quia consectetur sunt.
             Ex rem architecto doloremque mollitia ad repellat tempore repudiandae tenetur aliquid, cupiditate, sint voluptatibus? Incidunt,
             accusamus dignissimos atque, error adipisci voluptatum exercitationem laborum rerum assumenda eius vero officiis earum corrupti 
             eligendi vitae consequatur rem quod cupiditate minima quaerat ea eveniet suscipit itaque beatae. Dolorem laudantium dolorum optio 
             magni recusandae tempora minima esse maxime voluptatibus iure commodi quas necessitatibus vel magnam cumque in doloribus incidunt id, 
             culpa atque ut!."
        ],
    
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
     ]);
});

// Halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Syifa Rizki Mutia",
            "body" => " Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis quas voluptatem, quidem culpa, 
             laborum amet illo non, tempora optio cum repellendus vitae. Doloribus incidunt asperiores cumque, eius vitae, 
             odit assumenda beatae blanditiis exercitationem dolor eum est iste praesentium cupiditate nobis veniam ea error 
             illum similique qui corporis nostrum, fugit atque magni! Nihil libero quae quam dicta illo corrupti doloribus placeat
             et rem. Accusantium odit recusandae provident minus numquam expedita, libero dolores alias. Fugit, cumque.
             Mollitia possimus at quia? Ducimus, consequatur."
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Shaly Rahma Mutia",
            "body" => " Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat id fuga commodi dicta facilis, assumenda ullam
             quidem laudantium blanditiis molestiae, expedita ducimus tenetur dolores quasi ut, iste sed corrupti quia consectetur sunt.
             Ex rem architecto doloremque mollitia ad repellat tempore repudiandae tenetur aliquid, cupiditate, sint voluptatibus? Incidunt,
             accusamus dignissimos atque, error adipisci voluptatum exercitationem laborum rerum assumenda eius vero officiis earum corrupti 
             eligendi vitae consequatur rem quod cupiditate minima quaerat ea eveniet suscipit itaque beatae. Dolorem laudantium dolorum optio 
             magni recusandae tempora minima esse maxime voluptatibus iure commodi quas necessitatibus vel magnam cumque in doloribus incidunt id, 
             culpa atque ut!."
        ],
    
    ];

    $new_post = [];

    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }


    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});