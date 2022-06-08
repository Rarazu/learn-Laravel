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
        "title" => "About"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts',
    [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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

        $new_post = [];
        foreach ($blog_posts as $post) {
            if ($post["slug"] === $slug) {
                $new_post = $post;
            }
        }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

