<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Database\Factories\ImageFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Storage::deleteDirectory('public/posts');
        Storage::makeDirectory('public/posts');


       /* Category::factory(5)->create();
        Tag::factory(10)->create();*/
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            PostSeeder::class,

        ]);



    }
}
