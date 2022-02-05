<?php

namespace App\Models;



class Post
{
    static $blog_post = [
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

    public static function all()
    {
        return collect(self::$blog_post);
    }


    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
