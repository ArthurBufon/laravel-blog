<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolar sit amet',
            'body' => '<p>Lorem ipsum dolor sit amet. Non debitis rerum sed omnis repudiandae non officia velit id incidunt voluptas. Sit exercitationem dicta cum molestiae iusto in veniam tenetur aut tempore harum qui reprehenderit tempora aut dignissimos cumque sed nesciunt quibusdam!</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolar sit amet',
            'body' => '<p>Lorem ipsum dolor sit amet. Non debitis rerum sed omnis repudiandae non officia velit id incidunt voluptas. Sit exercitationem dicta cum molestiae iusto in veniam tenetur aut tempore harum qui reprehenderit tempora aut dignissimos cumque sed nesciunt quibusdam!</p>'
        ]);

    }
}
