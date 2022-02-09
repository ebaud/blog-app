<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();

        Article::create(['title' => 'Premier article', 'content' => 'Voici un article sur ...']);
        Article::create(['title' => 'Deuxième article', 'content' => 'Voici un article sur ...']);
    }
}
