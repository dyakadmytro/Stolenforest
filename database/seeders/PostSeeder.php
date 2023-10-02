<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Post;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory(5)->has(Tag::factory(3))->for(Project::factory(), 'postable')->create();
        Post::factory(2)->for(Article::factory(), 'postable')->create();
    }
}
