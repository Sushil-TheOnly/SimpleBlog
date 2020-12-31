<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\Profile;
use App\Models\Post;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image = new Image();
        $image->storage_path = "public/images/stock_image.jpg";
        $image->imageable_id = 1;
        $image->imageable_type = "App\Models\Post";
        $image->save();

        // create and save a new image for every profile in database
        Profile::all()->each(function($profile) {
            $image = new Image();
            $image->storage_path = "public/images/stock_image.jpg";
            $image->imageable_id = 1;
            $image->imageable_type = "App\Models\Post";
            $image->save();
            $profile->image()->save($image);
        });

         // create and save a new image for every post in database
        Post::all()->each(function($post) {
            $image = new Image();
            $image->storage_path = "public/images/stock_image.jpg";
            $image->imageable_id = 1;
            $image->imageable_type = "App\Models\Post";
            $image->save();
            $post->image()->save($image);
        });

    }
}
