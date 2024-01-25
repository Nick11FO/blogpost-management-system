<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Nicholas Frederick',
        //     'email' => 'nicholas.oongwidjaja@binus.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Gerald Sutarso',
        //     'email' => 'gerald.sutarso@binus.ac.id',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Excerpt Pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea vero dolor esse delectus repellat placeat doloremque unde aliquid ipsum temporibus error dolores, eligendi necessitatibus accusamus eveniet eaque rem ex nam expedita eos voluptates corrupti ipsam ad dignissimos! Quis commodi asperiores voluptatibus repudiandae facere.</p><p>Officia vero quaerat aut libero provident reiciendis vel ex amet est, nam magni dolorem, atque repellendus laborum suscipit, ullam laboriosam soluta sunt expedita? Veritatis quas perferendis eius dolorum, aut alias ipsum vel odit!</p><p>Error et ad dolor sint minima delectus quae totam, maiores saepe rerum. Ipsa explicabo quo labore voluptatem! Quis dolor qui reprehenderit, ipsum ab nostrum exercitationem voluptatem architecto repudiandae provident officiis numquam atque laboriosam deserunt et eius molestias ea fugit eligendi sequi magni! Dignissimos non magni aspernatur nam vero fuga optio atque facilis accusantium explicabo error minus magnam eaque consequuntur soluta architecto, corporis sint in. Vero eum quo necessitatibus, voluptatum ab nihil doloribus obcaecati praesentium.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Excerpt Kedua',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea vero dolor esse delectus repellat placeat doloremque unde aliquid ipsum temporibus error dolores, eligendi necessitatibus accusamus eveniet eaque rem ex nam expedita eos voluptates corrupti ipsam ad dignissimos! Quis commodi asperiores voluptatibus repudiandae facere.</p><p>Officia vero quaerat aut libero provident reiciendis vel ex amet est, nam magni dolorem, atque repellendus laborum suscipit, ullam laboriosam soluta sunt expedita? Veritatis quas perferendis eius dolorum, aut alias ipsum vel odit!</p><p>Error et ad dolor sint minima delectus quae totam, maiores saepe rerum. Ipsa explicabo quo labore voluptatem! Quis dolor qui reprehenderit, ipsum ab nostrum exercitationem voluptatem architecto repudiandae provident officiis numquam atque laboriosam deserunt et eius molestias ea fugit eligendi sequi magni! Dignissimos non magni aspernatur nam vero fuga optio atque facilis accusantium explicabo error minus magnam eaque consequuntur soluta architecto, corporis sint in. Vero eum quo necessitatibus, voluptatum ab nihil doloribus obcaecati praesentium.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Excerpt Ketiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea vero dolor esse delectus repellat placeat doloremque unde aliquid ipsum temporibus error dolores, eligendi necessitatibus accusamus eveniet eaque rem ex nam expedita eos voluptates corrupti ipsam ad dignissimos! Quis commodi asperiores voluptatibus repudiandae facere.</p><p>Officia vero quaerat aut libero provident reiciendis vel ex amet est, nam magni dolorem, atque repellendus laborum suscipit, ullam laboriosam soluta sunt expedita? Veritatis quas perferendis eius dolorum, aut alias ipsum vel odit!</p><p>Error et ad dolor sint minima delectus quae totam, maiores saepe rerum. Ipsa explicabo quo labore voluptatem! Quis dolor qui reprehenderit, ipsum ab nostrum exercitationem voluptatem architecto repudiandae provident officiis numquam atque laboriosam deserunt et eius molestias ea fugit eligendi sequi magni! Dignissimos non magni aspernatur nam vero fuga optio atque facilis accusantium explicabo error minus magnam eaque consequuntur soluta architecto, corporis sint in. Vero eum quo necessitatibus, voluptatum ab nihil doloribus obcaecati praesentium.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Excerpt Keempat',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea vero dolor esse delectus repellat placeat doloremque unde aliquid ipsum temporibus error dolores, eligendi necessitatibus accusamus eveniet eaque rem ex nam expedita eos voluptates corrupti ipsam ad dignissimos! Quis commodi asperiores voluptatibus repudiandae facere.</p><p>Officia vero quaerat aut libero provident reiciendis vel ex amet est, nam magni dolorem, atque repellendus laborum suscipit, ullam laboriosam soluta sunt expedita? Veritatis quas perferendis eius dolorum, aut alias ipsum vel odit!</p><p>Error et ad dolor sint minima delectus quae totam, maiores saepe rerum. Ipsa explicabo quo labore voluptatem! Quis dolor qui reprehenderit, ipsum ab nostrum exercitationem voluptatem architecto repudiandae provident officiis numquam atque laboriosam deserunt et eius molestias ea fugit eligendi sequi magni! Dignissimos non magni aspernatur nam vero fuga optio atque facilis accusantium explicabo error minus magnam eaque consequuntur soluta architecto, corporis sint in. Vero eum quo necessitatibus, voluptatum ab nihil doloribus obcaecati praesentium.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
