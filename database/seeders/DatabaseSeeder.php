<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // User::create([
        //     'name' => 'Widy Nugraha',
        //     'email' => '203040059@mail.unpas.ac.id',
        //     'password' => bcrypt('203040059')
        // ]);

        // User::create([
        //     'name' => 'Hinata Shoyo',
        //     'email' => '203040999@mail.unpas.ac.id',
        //     'password' => bcrypt('203040999')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, ratione voluptas.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis laborum vero doloremque, qui dolorum quisquam sed doloribus error placeat minus omnis voluptatum eos ab perferendis facilis modi tenetur unde repudiandae magni beatae necessitatibus sequi quos hic accusamus? Distinctio, id amet earum tempore possimus voluptates hic magnam aspernatur saepe ducimus magni reprehenderit non inventore officiis voluptatem cupiditate consequuntur, delectus accusamus aliquam labore, minima tenetur! A, consequuntur? Tenetur perferendis dolorum laborum! Et sint facilis quas est pariatur, asperiores ut tempora vel obcaecati, repellendus mollitia, necessitatibus fugiat iste? Nobis, quo sint aliquam ipsum, velit quaerat iusto obcaecati voluptatibus impedit modi porro corporis error repellat neque. Dolor magnam quos ad quas praesentium, consequuntur minus nulla laborum possimus dicta quam similique assumenda dolorem, dignissimos ullam pariatur perferendis illum quidem sunt unde maiores officiis? Similique nobis, architecto possimus deserunt aliquam iure. Eos distinctio incidunt, quidem consequatur dignissimos nihil voluptatem dicta pariatur laboriosam sint minima ratione nostrum!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, ratione voluptas.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis laborum vero doloremque, qui dolorum quisquam sed doloribus error placeat minus omnis voluptatum eos ab perferendis facilis modi tenetur unde repudiandae magni beatae necessitatibus sequi quos hic accusamus? Distinctio, id amet earum tempore possimus voluptates hic magnam aspernatur saepe ducimus magni reprehenderit non inventore officiis voluptatem cupiditate consequuntur, delectus accusamus aliquam labore, minima tenetur! A, consequuntur? Tenetur perferendis dolorum laborum! Et sint facilis quas est pariatur, asperiores ut tempora vel obcaecati, repellendus mollitia, necessitatibus fugiat iste? Nobis, quo sint aliquam ipsum, velit quaerat iusto obcaecati voluptatibus impedit modi porro corporis error repellat neque. Dolor magnam quos ad quas praesentium, consequuntur minus nulla laborum possimus dicta quam similique assumenda dolorem, dignissimos ullam pariatur perferendis illum quidem sunt unde maiores officiis? Similique nobis, architecto possimus deserunt aliquam iure. Eos distinctio incidunt, quidem consequatur dignissimos nihil voluptatem dicta pariatur laboriosam sint minima ratione nostrum!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, ratione voluptas.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis laborum vero doloremque, qui dolorum quisquam sed doloribus error placeat minus omnis voluptatum eos ab perferendis facilis modi tenetur unde repudiandae magni beatae necessitatibus sequi quos hic accusamus? Distinctio, id amet earum tempore possimus voluptates hic magnam aspernatur saepe ducimus magni reprehenderit non inventore officiis voluptatem cupiditate consequuntur, delectus accusamus aliquam labore, minima tenetur! A, consequuntur? Tenetur perferendis dolorum laborum! Et sint facilis quas est pariatur, asperiores ut tempora vel obcaecati, repellendus mollitia, necessitatibus fugiat iste? Nobis, quo sint aliquam ipsum, velit quaerat iusto obcaecati voluptatibus impedit modi porro corporis error repellat neque. Dolor magnam quos ad quas praesentium, consequuntur minus nulla laborum possimus dicta quam similique assumenda dolorem, dignissimos ullam pariatur perferendis illum quidem sunt unde maiores officiis? Similique nobis, architecto possimus deserunt aliquam iure. Eos distinctio incidunt, quidem consequatur dignissimos nihil voluptatem dicta pariatur laboriosam sint minima ratione nostrum!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, ratione voluptas.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis laborum vero doloremque, qui dolorum quisquam sed doloribus error placeat minus omnis voluptatum eos ab perferendis facilis modi tenetur unde repudiandae magni beatae necessitatibus sequi quos hic accusamus? Distinctio, id amet earum tempore possimus voluptates hic magnam aspernatur saepe ducimus magni reprehenderit non inventore officiis voluptatem cupiditate consequuntur, delectus accusamus aliquam labore, minima tenetur! A, consequuntur? Tenetur perferendis dolorum laborum! Et sint facilis quas est pariatur, asperiores ut tempora vel obcaecati, repellendus mollitia, necessitatibus fugiat iste? Nobis, quo sint aliquam ipsum, velit quaerat iusto obcaecati voluptatibus impedit modi porro corporis error repellat neque. Dolor magnam quos ad quas praesentium, consequuntur minus nulla laborum possimus dicta quam similique assumenda dolorem, dignissimos ullam pariatur perferendis illum quidem sunt unde maiores officiis? Similique nobis, architecto possimus deserunt aliquam iure. Eos distinctio incidunt, quidem consequatur dignissimos nihil voluptatem dicta pariatur laboriosam sint minima ratione nostrum!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
