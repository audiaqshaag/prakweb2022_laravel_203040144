<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

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
        //     'name' => 'Audi Aqsha A G',
        //     'email' => 'audiaqsha578@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Erdi Fajar F',
        //     'email' => 'erdifajarf@gmail.com',
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
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut excepturi unde laborum suscipit natus impedit,...',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sint laborum,  ab corporis consequatur mollitia a? Iste nesciunt molestiae ut sed aperiam tempore ipsum praesentium iure,</p><p>  eligendi numquam ipsam accusantium veniam dignissimos deleniti est!  Blanditiissint repellat ad aut, eligendi quasi! Praesentium ipsa quo voluptates commodi saepe, perferendis, quos doloremque in deleniti iste ducimus vitae facilis labore voluptatum explicabo aliquid tenetur perspiciatis beatae ex quia officia soluta atque! Provident corrupti porro nobis nulla, quam hic autem,</p><p> aut ex eaque eius omnis ratione optio quo! Eos autem, explicabo quaerat impedit aliquid ea optio facilis dolor libero sint animi maiores ducimus  accusantium maxime rerum delectus totam enim minus omnis dignissimos? Corrupti  ad fuga velit in! Tempora enim harum sunt eveniet corporis deleniti  nesciuntdignissimos commodi nobis dolores eaque labore eum quia dolorum autem,  numquamasperiores suscipit magni esse! Facilis ut hic eveniet illo venia ducimusconsequatur deserunt, ad quod tempora. Inventore, possimus.</p>', 'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut excepturi unde laborum suscipit natus impedit,...',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sint laborum,  ab corporis consequatur mollitia a? Iste nesciunt molestiae ut sed aperiam tempore ipsum praesentium iure,</p><p>  eligendi numquam ipsam accusantium veniam dignissimos deleniti est!  Blanditiissint repellat ad aut, eligendi quasi! Praesentium ipsa quo voluptates commodi saepe, perferendis, quos doloremque in deleniti iste ducimus vitae facilis labore voluptatum explicabo aliquid tenetur perspiciatis beatae ex quia officia soluta atque! Provident corrupti porro nobis nulla, quam hic autem,</p><p> aut ex eaque eius omnis ratione optio quo! Eos autem, explicabo quaerat impedit aliquid ea optio facilis dolor libero sint animi maiores ducimus  accusantium maxime rerum delectus totam enim minus omnis dignissimos? Corrupti  ad fuga velit in! Tempora enim harum sunt eveniet corporis deleniti  nesciuntdignissimos commodi nobis dolores eaque labore eum quia dolorum autem,  numquamasperiores suscipit magni esse! Facilis ut hic eveniet illo venia ducimusconsequatur deserunt, ad quod tempora. Inventore, possimus.</p>', 'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut excepturi unde laborum suscipit natus impedit,...',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sint laborum,  ab corporis consequatur mollitia a? Iste nesciunt molestiae ut sed aperiam tempore ipsum praesentium iure,</p><p>  eligendi numquam ipsam accusantium veniam dignissimos deleniti est!  Blanditiissint repellat ad aut, eligendi quasi! Praesentium ipsa quo voluptates commodi saepe, perferendis, quos doloremque in deleniti iste ducimus vitae facilis labore voluptatum explicabo aliquid tenetur perspiciatis beatae ex quia officia soluta atque! Provident corrupti porro nobis nulla, quam hic autem,</p><p> aut ex eaque eius omnis ratione optio quo! Eos autem, explicabo quaerat impedit aliquid ea optio facilis dolor libero sint animi maiores ducimus  accusantium maxime rerum delectus totam enim minus omnis dignissimos? Corrupti  ad fuga velit in! Tempora enim harum sunt eveniet corporis deleniti  nesciuntdignissimos commodi nobis dolores eaque labore eum quia dolorum autem,  numquamasperiores suscipit magni esse! Facilis ut hic eveniet illo venia ducimusconsequatur deserunt, ad quod tempora. Inventore, possimus.</p>',
        //     'category_id'=>2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut excepturi unde laborum suscipit natus impedit,...',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sint laborum,  ab corporis consequatur mollitia a? Iste nesciunt molestiae ut sed aperiam tempore ipsum praesentium iure,</p><p>  eligendi numquam ipsam accusantium veniam dignissimos deleniti est!  Blanditiissint repellat ad aut, eligendi quasi! Praesentium ipsa quo voluptates commodi saepe, perferendis, quos doloremque in deleniti iste ducimus vitae facilis labore voluptatum explicabo aliquid tenetur perspiciatis beatae ex quia officia soluta atque! Provident corrupti porro nobis nulla, quam hic autem,</p><p> aut ex eaque eius omnis ratione optio quo! Eos autem, explicabo quaerat impedit aliquid ea optio facilis dolor libero sint animi maiores ducimus  accusantium maxime rerum delectus totam enim minus omnis dignissimos? Corrupti  ad fuga velit in! Tempora enim harum sunt eveniet corporis deleniti  nesciuntdignissimos commodi nobis dolores eaque labore eum quia dolorum autem,  numquamasperiores suscipit magni esse! Facilis ut hic eveniet illo venia ducimusconsequatur deserunt, ad quod tempora. Inventore, possimus.</p>',
        //     'category_id'=>2,
        //     'user_id' => 1
        // ]);
    }
}
