<?php

namespace Database\Seeders;

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
        

        User::create([
            'name' => 'Dzulfi',
            'username' => 'dzulfi',
            'email' => 'dzulfiekapratama26@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Murayama',
        //     'email' => 'murayama@gmail.com',
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
        
    //    Post::create([
    //         'title' => 'Judul Pertama',
    //         'slug' => 'judul-pertama',
    //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ut esse aut excepturi porro sequi, odio quisquam dolorum dignissimos? Quis voluptas iure placeat aliquam',
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ut esse aut excepturi porro sequi, odio quisquam dolorum dignissimos? Quis voluptas iure placeat aliquam minima nesciunt ea esse sed cupiditate, ex perspiciatis illo, consequuntur ducimus quas! Veniam repellendus dolor animi aliquid! Quo fugit accusantium provident ducimus distinctio. Eligendi nisi quidem necessitatibus sunt quas expedita et quaerat alias ut exercitationem voluptatum architecto, aspernatur inventore, aperiam consequuntur perspiciatis non cum ipsum enim nam voluptatem commodi quia provident dolores! Molestiae praesentium alias blanditiis laboriosam nisi odio error itaque, nulla consectetur vel deleniti repudiandae quod dolore neque dignissimos consequatur unde aperiam explicabo labore cumque!',
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);

    //    Post::create([
    //         'title' => 'Judul Ke Dua',
    //         'slug' => 'judul-ke-dua',
    //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ut esse aut excepturi porro sequi, odio quisquam dolorum dignissimos? Quis voluptas iure placeat aliquam',
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ut esse aut excepturi porro sequi, odio quisquam dolorum dignissimos? Quis voluptas iure placeat aliquam minima nesciunt ea esse sed cupiditate, ex perspiciatis illo, consequuntur ducimus quas! Veniam repellendus dolor animi aliquid! Quo fugit accusantium provident ducimus distinctio. Eligendi nisi quidem necessitatibus sunt quas expedita et quaerat alias ut exercitationem voluptatum architecto, aspernatur inventore, aperiam consequuntur perspiciatis non cum ipsum enim nam voluptatem commodi quia provident dolores! Molestiae praesentium alias blanditiis laboriosam nisi odio error itaque, nulla consectetur vel deleniti repudiandae quod dolore neque dignissimos consequatur unde aperiam explicabo labore cumque!',
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);

    //    Post::create([
    //         'title' => 'Judul Ke Tiga',
    //         'slug' => 'judul-ke-tiga',
    //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ut esse aut excepturi porro sequi, odio quisquam dolorum dignissimos? Quis voluptas iure placeat aliquam',
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ut esse aut excepturi porro sequi, odio quisquam dolorum dignissimos? Quis voluptas iure placeat aliquam minima nesciunt ea esse sed cupiditate, ex perspiciatis illo, consequuntur ducimus quas! Veniam repellendus dolor animi aliquid! Quo fugit accusantium provident ducimus distinctio. Eligendi nisi quidem necessitatibus sunt quas expedita et quaerat alias ut exercitationem voluptatum architecto, aspernatur inventore, aperiam consequuntur perspiciatis non cum ipsum enim nam voluptatem commodi quia provident dolores! Molestiae praesentium alias blanditiis laboriosam nisi odio error itaque, nulla consectetur vel deleniti repudiandae quod dolore neque dignissimos consequatur unde aperiam explicabo labore cumque!',
    //         'category_id' => 2,
    //         'user_id' => 1
    //     ]);

    //    Post::create([
    //         'title' => 'Judul Ke Empat',
    //         'slug' => 'judul-ke-empat',
    //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ut esse aut excepturi porro sequi, odio quisquam dolorum dignissimos? Quis voluptas iure placeat aliquam',
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ut esse aut excepturi porro sequi, odio quisquam dolorum dignissimos? Quis voluptas iure placeat aliquam minima nesciunt ea esse sed cupiditate, ex perspiciatis illo, consequuntur ducimus quas! Veniam repellendus dolor animi aliquid! Quo fugit accusantium provident ducimus distinctio. Eligendi nisi quidem necessitatibus sunt quas expedita et quaerat alias ut exercitationem voluptatum architecto, aspernatur inventore, aperiam consequuntur perspiciatis non cum ipsum enim nam voluptatem commodi quia provident dolores! Molestiae praesentium alias blanditiis laboriosam nisi odio error itaque, nulla consectetur vel deleniti repudiandae quod dolore neque dignissimos consequatur unde aperiam explicabo labore cumque!',
    //         'category_id' => 2,
    //         'user_id' => 2
    //     ]);
    }
}