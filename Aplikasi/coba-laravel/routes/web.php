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
        "title" =>"Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ferdi Yonatan Natu",
        "email" => "193040151@mail.unpas.ac.id",
        "image" => "index.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ferdi Yonatan Natu",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore porro accusamus, nam aperiam dolorem consequuntur illo! Earum quas magni modi tempora officiis itaque tenetur atque at! Eligendi vel temporibus ea impedit perspiciatis in libero nobis voluptates, laborum expedita natus voluptatibus dolore provident distinctio perferendis, consequuntur fuga earum delectus hic sed? Explicabo minus saepe corrupti rem fugit tempore molestiae, quod quia assumenda ipsa suscipit vitae consequuntur iusto tenetur debitis, voluptas illo commodi laborum eaque! Quae et eligendi dolore nemo, quam rerum?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-podt-kedua",
            "author" => "Fikendra Nadeak",
            "body" => "orem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et tempora, quaerat sequi animi harum asperiores, iusto omnis cumque quia maxime corporis dolor eius necessitatibus, dolorem minima repellat. Consectetur, eligendi esse officia voluptas explicabo cum, dolor nisi deserunt dolores neque voluptatum! Aliquid cum dolor impedit, esse saepe voluptatum qui aliquam fugiat soluta natus quam quis molestias temporibus et sint facilis aspernatur a sed asperiores sapiente? Laboriosam delectus, minima tempora, quod possimus velit optio unde quibusdam reprehenderit porro expedita cumque animi! Laborum delectus nesciunt amet veniam, fugiat ipsa, tenetur non quas laboriosam, vitae laudantium dignissimos neque ipsam perspiciatis quaerat quo praesentium."
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman singel post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ferdi Yonatan Natu",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore porro accusamus, nam aperiam dolorem consequuntur illo! Earum quas magni modi tempora officiis itaque tenetur atque at! Eligendi vel temporibus ea impedit perspiciatis in libero nobis voluptates, laborum expedita natus voluptatibus dolore provident distinctio perferendis, consequuntur fuga earum delectus hic sed? Explicabo minus saepe corrupti rem fugit tempore molestiae, quod quia assumenda ipsa suscipit vitae consequuntur iusto tenetur debitis, voluptas illo commodi laborum eaque! Quae et eligendi dolore nemo, quam rerum?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-podt-kedua",
            "author" => "Fikendra Nadeak",
            "body" => "orem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et tempora, quaerat sequi animi harum asperiores, iusto omnis cumque quia maxime corporis dolor eius necessitatibus, dolorem minima repellat. Consectetur, eligendi esse officia voluptas explicabo cum, dolor nisi deserunt dolores neque voluptatum! Aliquid cum dolor impedit, esse saepe voluptatum qui aliquam fugiat soluta natus quam quis molestias temporibus et sint facilis aspernatur a sed asperiores sapiente? Laboriosam delectus, minima tempora, quod possimus velit optio unde quibusdam reprehenderit porro expedita cumque animi! Laborum delectus nesciunt amet veniam, fugiat ipsa, tenetur non quas laboriosam, vitae laudantium dignissimos neque ipsam perspiciatis quaerat quo praesentium."
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
