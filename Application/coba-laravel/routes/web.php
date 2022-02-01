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
    return view('home', ["title" => "Home"]);
});


Route::get('/home', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Audi Aqsha",
        "email" => "audiaqsha578@gmail.com",
        "image" => "foto.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Audi Aqsha",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae sapiente animi quaerat perferendis iste ratione. Consequuntur inventore architecto, nam sequi quasi eius quos fugiat, pariatur, quod nesciunt neque minima totam! Pariatur aspernatur enim beatae odio quidem provident voluptatum dolor fuga cum, accusamus quis ut porro quibusdam nesciunt autem voluptatibus laudantium? Iure rerum magni excepturi tempora illum quibusdam vero, natus sapiente inventore labore amet esse doloribus ab nobis cumque animi quo illo fugit corporis debitis quam neque praesentium! Iste, quae aliquid?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Erdi Fajar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint fugit eius pariatur ducimus odio, officia ullam est error reprehenderit excepturi! Maxime aperiam aut, eveniet, quo facilis est non quaerat et optio ipsam perspiciatis asperiores itaque maiores officia dicta obcaecati autem. Magnam modi dolore reiciendis commodi, asperiores rem cumque mollitia iusto ea consequatur sunt laudantium reprehenderit, eveniet quam obcaecati eos error ipsum sint possimus odit est, labore quos consectetur cupiditate! Natus odit veniam atque error reiciendis ullam ea explicabo ipsam vitae animi autem rem, doloremque delectus expedita maxime mollitia voluptas hic accusantium facilis obcaecati accusamus itaque nulla. Voluptatem eaque totam accusantium?"
        ]
    ];

    return view('blog', [
        "title" => "Post",
        "posts" => $blog_post
    ]);
});

//halaman single post

Route::get('post/{slug}', function ($slug) {
    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Audi Aqsha",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae sapiente animi quaerat perferendis iste ratione. Consequuntur inventore architecto, nam sequi quasi eius quos fugiat, pariatur, quod nesciunt neque minima totam! Pariatur aspernatur enim beatae odio quidem provident voluptatum dolor fuga cum, accusamus quis ut porro quibusdam nesciunt autem voluptatibus laudantium? Iure rerum magni excepturi tempora illum quibusdam vero, natus sapiente inventore labore amet esse doloribus ab nobis cumque animi quo illo fugit corporis debitis quam neque praesentium! Iste, quae aliquid?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Erdi Fajar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint fugit eius pariatur ducimus odio, officia ullam est error reprehenderit excepturi! Maxime aperiam aut, eveniet, quo facilis est non quaerat et optio ipsam perspiciatis asperiores itaque maiores officia dicta obcaecati autem. Magnam modi dolore reiciendis commodi, asperiores rem cumque mollitia iusto ea consequatur sunt laudantium reprehenderit, eveniet quam obcaecati eos error ipsum sint possimus odit est, labore quos consectetur cupiditate! Natus odit veniam atque error reiciendis ullam ea explicabo ipsam vitae animi autem rem, doloremque delectus expedita maxime mollitia voluptas hic accusantium facilis obcaecati accusamus itaque nulla. Voluptatem eaque totam accusantium?"
        ]
    ];


    foreach($blog_post as $post){
        if($post["slug"]===$slug){
            $new_post = $post;
        }
    }
    
    return view('post', ["title" => "Single Post","post"=>$new_post]);
});
