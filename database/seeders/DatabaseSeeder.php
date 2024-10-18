<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    //   User::create([
    //         'name' => 'Rafael Pandu Sumanti',
    //         'username' => 'rafaelpandusumanti',
    //         'email' => 'nadhirarafanighifari@example.com',
    //         'email_verified_at' => now(),
    //         'password' => Hash::make('rafael110108'),
    //         'remember_token' => Str::random(10),
    //     ]);

        // $categories = fake()->sentence(rand(1, 10), false);

        // Category::create([
        //     'name' => $categories,
        //     'slug' => Str::slug($categories)
        // ]);

        // $title = fake()->title();

        // Post::create([
        //     'slug' => Str::slug($title),
        //     'title' => $title,
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'body' => fake()->text()
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);

        Post::factory(100)->recycle([
            Category::all(),
            User::all(),
        ])->create();
    }
}
