<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
        "title" => "Judul Tulisan Pertama",
        "slug" => "judul-tulisan-pertama",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae omnis eius possimus, rerum assumenda recusandae nostrum quibusdam ipsa nam a cupiditate magnam fugit, perferendis atque doloribus deserunt, quisquam quaerat quia?"
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae omnis eius possimus, rerum assumenda recusandae nostrum quibusdam ipsa nam a cupiditate magnam fugit, perferendis atque doloribus deserunt, quisquam quaerat quia?"
            ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
       $posts = static::all();
        return $posts ->firstWhere('slug', $slug);
    }
}
