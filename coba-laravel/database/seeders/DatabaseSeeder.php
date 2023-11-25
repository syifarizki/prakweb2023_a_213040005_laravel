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
     */
    public function run(): void
    {
       

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Syifa Rizki Mutia',
            'username' => 'Syifarizki',
            'email' => 'syifa@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Shaly Rahma Mutia',
        //     'email' => 'shaly@gmail.com',
        //     'password' => bcrypt('12345')
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
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, itaque repellat quisquam fuga commodi neque rerum sit pariatur quod',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, itaque repellat quisquam fuga commodi neque rerum sit pariatur quod, obcaecati inventore unde nesciunt maiores molestiae temporibus labore odit repellendus voluptatum? Voluptas culpa eum modi atque nostrum sed dignissimos maiores aut dolorem, ea sequi eaque aspernatur at labore excepturi eius iusto numquam delectus debitis ratione odio quam ex asperiores ut? Explicabo earum dolore repudiandae recusandae praesentium dolor, expedita sunt ut voluptatum, error fugiat eveniet veritatis nisi porro quaerat nesciunt ab aliquam veniam aliquid? Ratione unde dolorum porro eligendi expedita dicta perspiciatis voluptas necessitatibus consequuntur itaque! Sapiente explicabo corporis eius cum iure?',
        //     'category_id' => 1,
        //     'user_id' =>1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, itaque repellat quisquam fuga commodi neque rerum sit pariatur quod',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, itaque repellat quisquam fuga commodi neque rerum sit pariatur quod, obcaecati inventore unde nesciunt maiores molestiae temporibus labore odit repellendus voluptatum? Voluptas culpa eum modi atque nostrum sed dignissimos maiores aut dolorem, ea sequi eaque aspernatur at labore excepturi eius iusto numquam delectus debitis ratione odio quam ex asperiores ut? Explicabo earum dolore repudiandae recusandae praesentium dolor, expedita sunt ut voluptatum, error fugiat eveniet veritatis nisi porro quaerat nesciunt ab aliquam veniam aliquid? Ratione unde dolorum porro eligendi expedita dicta perspiciatis voluptas necessitatibus consequuntur itaque! Sapiente explicabo corporis eius cum iure?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, itaque repellat quisquam fuga commodi neque rerum sit pariatur quod',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, itaque repellat quisquam fuga commodi neque rerum sit pariatur quod, obcaecati inventore unde nesciunt maiores molestiae temporibus labore odit repellendus voluptatum? Voluptas culpa eum modi atque nostrum sed dignissimos maiores aut dolorem, ea sequi eaque aspernatur at labore excepturi eius iusto numquam delectus debitis ratione odio quam ex asperiores ut? Explicabo earum dolore repudiandae recusandae praesentium dolor, expedita sunt ut voluptatum, error fugiat eveniet veritatis nisi porro quaerat nesciunt ab aliquam veniam aliquid? Ratione unde dolorum porro eligendi expedita dicta perspiciatis voluptas necessitatibus consequuntur itaque! Sapiente explicabo corporis eius cum iure?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, itaque repellat quisquam fuga commodi neque rerum sit pariatur quod',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, itaque repellat quisquam fuga commodi neque rerum sit pariatur quod, obcaecati inventore unde nesciunt maiores molestiae temporibus labore odit repellendus voluptatum? Voluptas culpa eum modi atque nostrum sed dignissimos maiores aut dolorem, ea sequi eaque aspernatur at labore excepturi eius iusto numquam delectus debitis ratione odio quam ex asperiores ut? Explicabo earum dolore repudiandae recusandae praesentium dolor, expedita sunt ut voluptatum, error fugiat eveniet veritatis nisi porro quaerat nesciunt ab aliquam veniam aliquid? Ratione unde dolorum porro eligendi expedita dicta perspiciatis voluptas necessitatibus consequuntur itaque! Sapiente explicabo corporis eius cum iure?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
