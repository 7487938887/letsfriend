<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use App\Models\TagPost;
use Illuminate\Database\Seeder;

class TagPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate array for random tags for the post
        foreach (Post::all() as $post) {
            // Tags quantity for the post will be random from 1 to 10
            $tagsQuantity = rand(1, 10);
            foreach (Tag::all()->random($tagsQuantity) as $tag) {
                TagPost::create([
                    'post_id' => $post->id,
                    'tag_id' => $tag->id
                ]);
            }
        }
    }
}
