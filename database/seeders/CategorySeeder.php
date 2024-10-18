<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Dev',
            'slug' => 'web-dev'
        ]);

        Category::create([
            'name' => 'Data Analysis',
            'slug' => 'data-analysis'
        ]);

        Category::create([
            'name' => 'Software Engineer',
            'slug' => 'software-engineer'
        ]);

        Category::create([
            'name' => 'Hardware Developer',
            'slug' => 'hardware-developer'
        ]);

        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux'
        ]);
    }
}
