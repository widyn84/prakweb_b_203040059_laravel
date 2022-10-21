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
    return view ('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "name" => "Widy Nugraha",
        "email" => "203040059@mail.unpas.ac.id",
        "image" => "img/profile.jpg"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Widy Nugraha",
            "body" =>   "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas nesciunt dolorem illo aspernatur dolore molestiae, omnis amet molestias suscipit nam consequuntur neque inventore corporis porro? Saepe nulla placeat quos delectus incidunt minus enim quibusdam labore, modi eius consectetur debitis, illum numquam nihil beatae dolore ratione distinctio totam nisi laborum sit dolor, nesciunt perspiciatis excepturi! Esse ut magnam ea ad deserunt sunt excepturi cum est. Quas optio inventore numquam soluta rerum magnam fugiat tempore quaerat repellat at hic, ut rem ipsa?"
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sawamura",
            "body" =>   "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aliquid pariatur qui obcaecati. Quos quibusdam ipsa ex repellat labore, temporibus nulla explicabo aliquam dolores expedita dolor praesentium tenetur. Id perferendis repellendus dolor quod ratione, natus voluptatum provident aliquam laudantium in quos voluptatem alias quae laboriosam molestiae harum deleniti sed non! Debitis reiciendis fugiat dolor reprehenderit natus illum hic vitae repellendus deleniti! Distinctio officiis eveniet commodi ducimus dicta fugiat voluptates adipisci ullam deleniti aperiam temporibus blanditiis, voluptas aliquid pariatur doloribus accusantium cum, et nisi doloremque odit necessitatibus facilis perspiciatis neque odio. Dolores, eveniet ex aspernatur magnam iste et fugiat. Ea, saepe?"
        ],
    ];
    return view ('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//Halaman single route
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Widy Nugraha",
            "body" =>   "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas nesciunt dolorem illo aspernatur dolore molestiae, omnis amet molestias suscipit nam consequuntur neque inventore corporis porro? Saepe nulla placeat quos delectus incidunt minus enim quibusdam labore, modi eius consectetur debitis, illum numquam nihil beatae dolore ratione distinctio totam nisi laborum sit dolor, nesciunt perspiciatis excepturi! Esse ut magnam ea ad deserunt sunt excepturi cum est. Quas optio inventore numquam soluta rerum magnam fugiat tempore quaerat repellat at hic, ut rem ipsa?"
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sawamura",
            "body" =>   "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aliquid pariatur qui obcaecati. Quos quibusdam ipsa ex repellat labore, temporibus nulla explicabo aliquam dolores expedita dolor praesentium tenetur. Id perferendis repellendus dolor quod ratione, natus voluptatum provident aliquam laudantium in quos voluptatem alias quae laboriosam molestiae harum deleniti sed non! Debitis reiciendis fugiat dolor reprehenderit natus illum hic vitae repellendus deleniti! Distinctio officiis eveniet commodi ducimus dicta fugiat voluptates adipisci ullam deleniti aperiam temporibus blanditiis, voluptas aliquid pariatur doloribus accusantium cum, et nisi doloremque odit necessitatibus facilis perspiciatis neque odio. Dolores, eveniet ex aspernatur magnam iste et fugiat. Ea, saepe?"
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