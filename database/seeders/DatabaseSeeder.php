<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhikagalih@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        // User::create([
        //     'name' => 'Doddy Ferdiansyah',
        //     'email' => 'doddyferdiansyah@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        User::factory(3)->create();

        Category::create([
            "name" => "Web Programming",
            "slug" => "weg-programming",
        ]);

        Category::create([
            "name" => "Personal",
            "slug" => "personal",
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     "title" => "Judul Pertama",
        //     "slug" => "judul-pertama",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas maxime, qui, veniam corrupti quis ducimus ut, debitis quibusdam dolorum harum sunt labore iure natus iusto repudiandae alias soluta? Rem, vel.",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas maxime, qui, veniam corrupti quis ducimus ut, debitis quibusdam dolorum harum sunt labore iure natus iusto repudiandae alias soluta? Rem, vel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas maxime, qui, veniam corrupti quis ducimus ut, debitis quibusdam dolorum harum sunt labore iure natus iusto repudiandae alias soluta? Rem, vel.",
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     "title" => "Judul ke dua",
        //     "slug" => "judul-ke-dua",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas maxime, qui, veniam corrupti quis ducimus ut, debitis quibusdam dolorum harum sunt labore iure natus iusto repudiandae alias soluta? Rem, vel.",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas maxime, qui, veniam corrupti quis ducimus ut, debitis quibusdam dolorum harum sunt labore iure natus iusto repudiandae alias soluta? Rem, vel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas maxime, qui, veniam corrupti quis ducimus ut, debitis quibusdam dolorum harum sunt labore iure natus iusto repudiandae alias soluta? Rem, vel.",
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     "title" => "Judul ke tiga",
        //     "slug" => "judul-ke-tiga",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas maxime, qui, veniam corrupti quis ducimus ut, debitis quibusdam dolorum harum sunt labore iure natus iusto repudiandae alias soluta? Rem, vel.",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas maxime, qui, veniam corrupti quis ducimus ut, debitis quibusdam dolorum harum sunt labore iure natus iusto repudiandae alias soluta? Rem, vel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas maxime, qui, veniam corrupti quis ducimus ut, debitis quibusdam dolorum harum sunt labore iure natus iusto repudiandae alias soluta? Rem, vel.",
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     "title" => "Judul ke empat",
        //     "slug" => "judul-ke-empat",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas maxime, qui, veniam corrupti quis ducimus ut, debitis quibusdam dolorum harum sunt labore iure natus iusto repudiandae alias soluta? Rem, vel.",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas maxime, qui, veniam corrupti quis ducimus ut, debitis quibusdam dolorum harum sunt labore iure natus iusto repudiandae alias soluta? Rem, vel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas maxime, qui, veniam corrupti quis ducimus ut, debitis quibusdam dolorum harum sunt labore iure natus iusto repudiandae alias soluta? Rem, vel.",
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
