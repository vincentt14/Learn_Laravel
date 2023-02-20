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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Vincent",
        "email" => "vincent@gmail.com",
        "image" => "dicoding.png"
    ]);
});

Route::get('/blog', function () {
    $blog_post = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Rucci",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam maxime assumenda eaque beatae quae illum voluptates sapiente corrupti, non dolores qui a commodi blanditiis quidem corporis similique repellendus, in aspernatur? Cumque doloremque voluptatum placeat quod illo, aperiam dolorem cum at magnam odit aut consectetur vel nemo saepe quaerat nisi suscipit inventore harum similique, molestias unde maxime sed odio? Tenetur voluptate eos accusamus! Quam quae a accusantium similique, esse ipsam unde enim maxime vel fuga iure cupiditate eligendi pariatur distinctio saepe!"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Audric",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, tenetur eveniet! Fuga porro ea laboriosam enim nihil nisi molestias adipisci, suscipit culpa veniam incidunt odio est tempore dignissimos exercitationem accusamus possimus provident similique fugiat natus nobis hic! Vel obcaecati, expedita ratione ex nobis nemo dicta voluptas, quas sequi dolorum ad sed blanditiis laborum quidem at error odit maiores excepturi, suscipit quia incidunt adipisci ab? Incidunt animi numquam ab eius qui tempora totam ut porro quia pariatur facilis veniam laborum blanditiis vitae nostrum placeat, sint dignissimos reiciendis itaque dolores, dolorem, quas voluptatum! Odio, numquam suscipit? Ad incidunt quam deserunt sit quia."
        ],
    ];

    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_post
    ]);
});

// Halaman single post
Route::get('post/{slug}', function( $slug ){
    $blog_post = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Rucci",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam maxime assumenda eaque beatae quae illum voluptates sapiente corrupti, non dolores qui a commodi blanditiis quidem corporis similique repellendus, in aspernatur? Cumque doloremque voluptatum placeat quod illo, aperiam dolorem cum at magnam odit aut consectetur vel nemo saepe quaerat nisi suscipit inventore harum similique, molestias unde maxime sed odio? Tenetur voluptate eos accusamus! Quam quae a accusantium similique, esse ipsam unde enim maxime vel fuga iure cupiditate eligendi pariatur distinctio saepe!"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Audric",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, tenetur eveniet! Fuga porro ea laboriosam enim nihil nisi molestias adipisci, suscipit culpa veniam incidunt odio est tempore dignissimos exercitationem accusamus possimus provident similique fugiat natus nobis hic! Vel obcaecati, expedita ratione ex nobis nemo dicta voluptas, quas sequi dolorum ad sed blanditiis laborum quidem at error odit maiores excepturi, suscipit quia incidunt adipisci ab? Incidunt animi numquam ab eius qui tempora totam ut porro quia pariatur facilis veniam laborum blanditiis vitae nostrum placeat, sint dignissimos reiciendis itaque dolores, dolorem, quas voluptatum! Odio, numquam suscipit? Ad incidunt quam deserunt sit quia."
        ],
    ];

    $newPost = [];
    foreach($blog_post as $post){
        if($post["slug"] == $slug){
            $newPost = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $newPost
    ]);
});