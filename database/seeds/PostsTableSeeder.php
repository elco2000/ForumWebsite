<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Post::class, 5)->create()->each(function($post) {
            $post->reactions()->saveMany(factory(\App\Reaction::class, rand(0, 10))->create(['post_id' => $post->id]));
        });
    }
}
