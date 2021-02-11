<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 100; $i++){
            $post = new Post();
            $post->title  = "Post title $i";
            $post->content  = "Post content $i";
            $post->save();
        }
    }
}
