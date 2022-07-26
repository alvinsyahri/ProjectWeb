<?php

namespace App\Models;


class Post
{
    static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Alvin Syahri",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quos delectus, ducimus id nam dolorum debitis minima facere porro, commodi laborum pariatur cumque maxime dignissimos sint! Provident fugiat excepturi obcaecati!"
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "ZAcky Shifa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quos delectus, ducimus id nam dolorum debitis minima facere porro, commodi laborum pariatur cumque maxime dignissimos sint! Provident fugiat excepturi obcaecati!, Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quos delectus, ducimus id nam dolorum debitis minima facere porro, commodi laborum pariatur cumque maxime dignissimos sint! Provident fugiat excepturi obcaecati!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
