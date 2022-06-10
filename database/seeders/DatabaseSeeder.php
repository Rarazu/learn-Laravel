<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Rara Zahra Urava',
        //     'username' => 'zahraurava',
        //     'email' => 'rara@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Jasmine Aqilah R.',
        //     'username' => 'jasmineeer',
        //     'email' => 'jasmine@gmail.com',
        //     'password' => bcrypt('23456')
        // ]);

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);
        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design'
        // ]);
        // Category::create([
        //     'name' => 'Daily',
        //     'slug' => 'daily'
        // ]);

        // Post::factory(5)->create();

        Post::create([
            'title' => 'Judul Pertama',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nemo exercitationem ea rem ducimus optio amet eos minus,',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nemo exercitationem ea rem ducimus optio amet eos minus, quis iusto nisi accusamus consequatur. Debitis, rerum ratione pariatur est asperiores libero quidem quisquam dolorum harum itaque voluptatem. Quod iusto harum repudiandae natus saepe.</p><p> Vitae accusantium obcaecati enim nulla at ipsam pariatur repellendus assumenda natus quos. Tempore labore, reprehenderit voluptates consectetur perspiciatis, fugiat laborum adipisci molestias hic mollitia nihil nostrum suscipit est quas consequuntur voluptate fugit! Commodi architecto, consectetur maxime voluptates repellendus facere incidunt, harum sit praesentium veritatis quod nam. Praesentium ut officiis illum et quisquam. Sunt nihil totam molestias porro pariatur eos voluptatum quo doloremque, harum tempora quas nobis illo, provident iusto quisquam voluptatem fugit ullam natus ab alias. Sit, odio nihil iure animi distinctio omnis, vel quae saepe veniam velit quibusdam nobis, rem id laborum!</p>'
        ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nemo exercitationem ea rem ducimus optio amet eos minus,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nemo exercitationem ea rem ducimus optio amet eos minus, quis iusto nisi accusamus consequatur. Debitis, rerum ratione pariatur est asperiores libero quidem quisquam dolorum harum itaque voluptatem. Quod iusto harum repudiandae natus saepe.</p><p> Vitae accusantium obcaecati enim nulla at ipsam pariatur repellendus assumenda natus quos. Tempore labore, reprehenderit voluptates consectetur perspiciatis, fugiat laborum adipisci molestias hic mollitia nihil nostrum suscipit est quas consequuntur voluptate fugit! Commodi architecto, consectetur maxime voluptates repellendus facere incidunt, harum sit praesentium veritatis quod nam. Praesentium ut officiis illum et quisquam. Sunt nihil totam molestias porro pariatur eos voluptatum quo doloremque, harum tempora quas nobis illo, provident iusto quisquam voluptatem fugit ullam natus ab alias. Sit, odio nihil iure animi distinctio omnis, vel quae saepe veniam velit quibusdam nobis, rem id laborum!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke tiga',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nemo exercitationem ea rem ducimus optio amet eos minus,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nemo exercitationem ea rem ducimus optio amet eos minus, quis iusto nisi accusamus consequatur. Debitis, rerum ratione pariatur est asperiores libero quidem quisquam dolorum harum itaque voluptatem. Quod iusto harum repudiandae natus saepe.</p><p> Vitae accusantium obcaecati enim nulla at ipsam pariatur repellendus assumenda natus quos. Tempore labore, reprehenderit voluptates consectetur perspiciatis, fugiat laborum adipisci molestias hic mollitia nihil nostrum suscipit est quas consequuntur voluptate fugit! Commodi architecto, consectetur maxime voluptates repellendus facere incidunt, harum sit praesentium veritatis quod nam. Praesentium ut officiis illum et quisquam. Sunt nihil totam molestias porro pariatur eos voluptatum quo doloremque, harum tempora quas nobis illo, provident iusto quisquam voluptatem fugit ullam natus ab alias. Sit, odio nihil iure animi distinctio omnis, vel quae saepe veniam velit quibusdam nobis, rem id laborum!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nemo exercitationem ea rem ducimus optio amet eos minus,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nemo exercitationem ea rem ducimus optio amet eos minus, quis iusto nisi accusamus consequatur. Debitis, rerum ratione pariatur est asperiores libero quidem quisquam dolorum harum itaque voluptatem. Quod iusto harum repudiandae natus saepe.</p><p> Vitae accusantium obcaecati enim nulla at ipsam pariatur repellendus assumenda natus quos. Tempore labore, reprehenderit voluptates consectetur perspiciatis, fugiat laborum adipisci molestias hic mollitia nihil nostrum suscipit est quas consequuntur voluptate fugit! Commodi architecto, consectetur maxime voluptates repellendus facere incidunt, harum sit praesentium veritatis quod nam. Praesentium ut officiis illum et quisquam. Sunt nihil totam molestias porro pariatur eos voluptatum quo doloremque, harum tempora quas nobis illo, provident iusto quisquam voluptatem fugit ullam natus ab alias. Sit, odio nihil iure animi distinctio omnis, vel quae saepe veniam velit quibusdam nobis, rem id laborum!</p>'
        // ]);
    }
}
