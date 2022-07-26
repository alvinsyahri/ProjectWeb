<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

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
        //     'name' => 'Alvin Syahri',
        //     'email' => 'alvinsyahri@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Zacky Shifa',
        //     'email' => 'zackyshifa@gmail.com',
        //     'password' => bcrypt('12345')
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
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut repellat quod modi exercitationem? Mollitia, velit. Temporibus dicta provident rem, sequi voluptatibus facilis vel saepe laudantium quae, maiores ducimus veritatis autem.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p>,<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut repellat quod modi exercitationem? Mollitia, velit. Temporibus dicta provident rem, sequi voluptatibus facilis vel saepe laudantium quae, maiores ducimus veritatis autem.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p>,<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut repellat quod modi exercitationem? Mollitia, velit. Temporibus dicta provident rem, sequi voluptatibus facilis vel saepe laudantium quae, maiores ducimus veritatis autem.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p>,<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut repellat quod modi exercitationem? Mollitia, velit. Temporibus dicta provident rem, sequi voluptatibus facilis vel saepe laudantium quae, maiores ducimus veritatis autem.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p>,<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ut porro suscipit, saepe dicta tempore tenetur eius sunt delectus quaerat nemo cumque beatae soluta magni doloremque provident consequatur quisquam expedita.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
