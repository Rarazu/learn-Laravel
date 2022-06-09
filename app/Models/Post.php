<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    // use HasFactory;
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Rarazu",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Itaque suscipit quibusdam fuga earum iste sapiente consequatur corrupti aliquid libero, 
            nobis repellat, doloribus aliquam est ipsa adipisci veritatis nisi. Quasi aut necessitatibus
            iste incidunt exercitationem accusantium ea. Quidem, hic. Blanditiis, pariatur vel nihil rerum 
            laborum corporis quas placeat minus distinctio voluptas at libero quae necessitatibus quasi tenetur doloremque unde
            explicabo quam odio porro expedita nemo ut. Alias iure, quam, 
            voluptatibus quis cum dicta possimus, porro repellat molestiae ratione fuga nobis adipisci?"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Jasmine",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Itaque suscipit quibusdam fuga earum iste sapiente consequatur corrupti aliquid libero, nobis repellat, doloribus aliquam est ipsa adipisci veritatis nisi. Quasi aut necessitatibus
            iste incidunt exercitationem accusantium ea. Quidem, hic. Blanditiis, pariatur vel nihil rerum 
            laborum corporis quas placeat minus distinctio voluptas at libero quae necessitatibus quasi tenetur doloremque unde
            explicabo quam odio porro expedita nemo ut. Alias iure, quam, 
            voluptatibus quis cum dicta possimus, porro repellat molestiae ratione fuga nobis adipisci?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ipsum maiores quas vitae quod rerum debitis recusandae esse exercitationem cupiditate?"
        ]
    
    ];

    public static function all() {
        return collect(self::$blog_posts); // karena proprti static
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        // return $post;
        return $posts->firstWhere('slug', $slug);
    }
}
