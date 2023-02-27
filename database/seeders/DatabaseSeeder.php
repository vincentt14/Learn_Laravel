<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
        //     'name' => 'Vincent',
        //     'email' => 'vincent@gmail.com',
        //     'password' => bcrypt('vincent123')
        // ]);

        // User::create([
        //     'name' => 'Doddy',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('dodidoditot')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     "title" => 'Judul Pertama',
        //     "slug" => 'judul-pertama',
        //     "excerp" => 'nasi padang',
        //     'body' => 'nasi padang enak sekale',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     "title" => 'Type Script',
        //     "slug" => 'type-script',
        //     "excerp" => 'TS VS JS',
        //     'body' => '<p>TS VS JS</p><p>Hayoo menang siapa hayuuk</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     "title" => 'Babi Panggang',
        //     "slug" => 'babi-panggang',
        //     "excerp" => 'Babi panggang atau goreng lebi enak',
        //     'body' => '<p>babi panggang atau goreng lebi enak</p><p>Hayoo menang siapa hayuuk</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
