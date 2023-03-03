<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Collection;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        // $user = User::factory()->create();

    //    $personal = Category::create([
    //         'name' => 'Personal',
    //         'slug' => 'personal',
    //     ]);
    //   $family = Category::create([
    //         'name' => 'Family',
    //         'slug' => 'family',
    //     ]);
    //    $work =  Category::create([
    //         'name' => 'Work',
    //         'slug' => 'work',
    //     ]);

    //     Post::create([
    //         'user_id' => $user->id,
    //         'category_id' => $family->id,
    //         'title' => 'My Family Post',
    //         'slug' => 'my-family-post',
    //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
    //         'body' => '<p>Lorem ipsum dolor sit amet consect Lorem ipsum dolor sit amet consectetur adipisicing elit</p>'
    //     ]);
    //     Post::create([
    //         'user_id' => $user->id,
    //         'category_id' => $work->id,
    //         'title' => 'My Work Post',
    //         'slug' => 'my-work-post',
    //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
    //         'body' => '<p>Lorem ipsum dolor sit amet consect Lorem ipsum dolor sit amet consectetur adipisicing elit<p>'
    //     ]);

    // }

    }
}
