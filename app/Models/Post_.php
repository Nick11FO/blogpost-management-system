<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Gerald Santoso",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, ut similique. Excepturi voluptatibus fugit est laboriosam sunt nostrum ut reprehenderit tenetur modi distinctio, esse repellendus incidunt, suscipit necessitatibus dicta perferendis? Maiores eius ipsam quidem numquam. Minima laboriosam magni molestiae vero, ad aliquam eveniet ipsa a eius consequatur consequuntur minus reiciendis incidunt reprehenderit animi architecto explicabo corrupti recusandae delectus dolorem laborum illo. Eaque repellat ratione qui alias aperiam, ullam architecto temporibus sint accusantium veniam ipsam in rerum odio unde eos ipsum, aliquid deserunt ipsa quod! Autem ratione quos, eius, soluta architecto cumque ex ad aut, consequuntur excepturi nisi. Recusandae, magnam maiores!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "James Prakoso",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat maxime qui a, dignissimos voluptatum magnam ipsum! Adipisci eaque nulla veritatis ex deleniti ipsum, magnam minus quos tenetur, consequatur quisquam rem minima asperiores praesentium commodi distinctio repudiandae debitis. Exercitationem dolor quae doloremque iure dicta, fugit nobis ipsam repellendus quod quaerat, earum assumenda, possimus modi autem. Veritatis iusto dolores saepe impedit obcaecati corporis possimus aliquam explicabo eius, voluptate, officia architecto magnam cum aspernatur at numquam maxime, quos quo excepturi sit aut. Harum cumque assumenda molestiae pariatur facere nostrum, mollitia repudiandae dolorum culpa non nemo ducimus impedit. Quidem pariatur error id nihil quis quae voluptas illum eum. Minima aliquam obcaecati commodi veniam asperiores reiciendis tempora iste ratione fuga quaerat accusamus, quia perferendis? Quidem eos, molestiae dolore eius consequatur vel nemo modi deleniti recusandae, veritatis, sunt non expedita excepturi. Consequatur explicabo recusandae id quasi neque at ratione repellat quos ipsum. Rem nihil consequatur incidunt!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function show($slug)
    {
        $posts = static::all();
        return $posts -> firstWhere('slug', $slug);
    }

}
