<?php

namespace App\Models;


class Post {
   private static $blog_posts = [
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
     ]
    ];

    public static function all() {

        return collect(self::$blog_posts);
    }

    public static function find($slug) {

        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}
