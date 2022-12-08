<?php

namespace App\Models;

class post
{
    private static $blog_posts = [
        [
                "title" => "Judul Posts Pertama",
                "slug" => "Judul-Posts-Pertama",
                "author" => "Dzulfi",
                "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque ipsam dolorem dolor possimus dignissimos nihil deleniti modi deserunt sequi a soluta sunt adipisci omnis, optio, eveniet rerum. Soluta, quas atque? Soluta reprehenderit dolores adipisci rem nulla corrupti commodi laborum est provident! Quisquam dolore consectetur sapiente quibusdam adipisci rem enim, repellendus nisi reprehenderit possimus atque nemo, aliquid recusandae soluta minus! Magni cum adipisci, minima tempore asperiores, veritatis ut repudiandae id aspernatur, nisi consequatur aut nostrum accusamus odio! Nulla, aut ipsa. Omnis?"
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "Judul-Posts-Kedua",
            "author" => "Murayama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus omnis quod eos aperiam voluptatibus recusandae, doloremque accusantium asperiores minus amet soluta at possimus qui itaque adipisci repellat autem ut ea iusto fugiat illo et quibusdam explicabo sed! Alias debitis accusamus quos ab quidem vitae? Vitae, eaque aperiam repellendus ipsa eius, perspiciatis eveniet vero exercitationem nobis, nesciunt ducimus quidem expedita obcaecati? Accusantium, reprehenderit error facere ipsa explicabo odio suscipit eius sapiente. Voluptas ipsa tempora tenetur, obcaecati sequi provident magni ea ratione blanditiis laudantium placeat dolores omnis voluptatem possimus non neque commodi cum. Dolor eveniet facere obcaecati ab! Laboriosam, unde. Quidem, libero."
        ],
];

    public static function all() 
    {
    return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();   

        return $posts->firstWhere('slug', $slug);
    }
}