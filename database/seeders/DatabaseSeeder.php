<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
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
        //     'name' => 'Irsyad Al Fahriza',
        //     'email' => 'irsyad@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);
        // User::create([
        //     'name' => 'Safira Rizky',
        //     'email' => 'safira@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, vitae. Minima error quasi maiores laudantium itaque ab, quibusdam doloremque nobis fugiat distinctio aspernatur nam dolorem,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad illum quidem voluptatum sapiente, necessitatibus ea provident quasi hic excepturi, minus voluptatibus ullam quisquam consequuntur non velit id veritatis laborum praesentium. Commodi voluptate ad quam voluptatem. Eos laboriosam saepe animi repudiandae vero consequuntur vel, nam ab, repellat harum magni ea beatae quidem obcaecati exercitationem soluta minima voluptates porro hic aspernatur totam adipisci repellendus accusamus. Consequuntur alias provident ab veniam cupiditate vitae quia velit voluptas quo dolor asperiores, hic aliquam! Provident voluptate similique eos suscipit obcaecati consequuntur est, veniam consectetur. 

        //     Eos esse fugit perferendis quos consequatur natus, quod adipisci et ipsa animi quam unde cum molestias officiis est alias itaque tempore sunt? Soluta et, sed iste repellendus explicabo exercitationem, odit ipsam dignissimos sint aut veritatis non quibusdam corporis. Cum cupiditate alias officia dolores? Harum ullam natus dicta rerum repudiandae autem doloribus deleniti ipsum, dolorem aperiam nobis totam dignissimos alias distinctio impedit veniam neque, esse error magni accusantium! Possimus doloribus facere earum repellat magnam, odit numquam laborum dolorem veniam nemo ut placeat veritatis eaque maxime quasi esse temporibus accusamus atque? Quia optio facilis quae a blanditiis asperiores accusantium esse praesentium suscipit earum. Atque molestias assumenda nemo error est sequi laudantium quam vitae voluptatibus!',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, vitae. Minima error quasi maiores laudantium itaque ab, quibusdam doloremque nobis fugiat distinctio aspernatur nam dolorem,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad illum quidem voluptatum sapiente, necessitatibus ea provident quasi hic excepturi, minus voluptatibus ullam quisquam consequuntur non velit id veritatis laborum praesentium. Commodi voluptate ad quam voluptatem. Eos laboriosam saepe animi repudiandae vero consequuntur vel, nam ab, repellat harum magni ea beatae quidem obcaecati exercitationem soluta minima voluptates porro hic aspernatur totam adipisci repellendus accusamus. Consequuntur alias provident ab veniam cupiditate vitae quia velit voluptas quo dolor asperiores, hic aliquam! Provident voluptate similique eos suscipit obcaecati consequuntur est, veniam consectetur. 

        //     Eos esse fugit perferendis quos consequatur natus, quod adipisci et ipsa animi quam unde cum molestias officiis est alias itaque tempore sunt? Soluta et, sed iste repellendus explicabo exercitationem, odit ipsam dignissimos sint aut veritatis non quibusdam corporis. Cum cupiditate alias officia dolores? Harum ullam natus dicta rerum repudiandae autem doloribus deleniti ipsum, dolorem aperiam nobis totam dignissimos alias distinctio impedit veniam neque, esse error magni accusantium! Possimus doloribus facere earum repellat magnam, odit numquam laborum dolorem veniam nemo ut placeat veritatis eaque maxime quasi esse temporibus accusamus atque? Quia optio facilis quae a blanditiis asperiores accusantium esse praesentium suscipit earum. Atque molestias assumenda nemo error est sequi laudantium quam vitae voluptatibus!',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, vitae. Minima error quasi maiores laudantium itaque ab, quibusdam doloremque nobis fugiat distinctio aspernatur nam dolorem,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad illum quidem voluptatum sapiente, necessitatibus ea provident quasi hic excepturi, minus voluptatibus ullam quisquam consequuntur non velit id veritatis laborum praesentium. Commodi voluptate ad quam voluptatem. Eos laboriosam saepe animi repudiandae vero consequuntur vel, nam ab, repellat harum magni ea beatae quidem obcaecati exercitationem soluta minima voluptates porro hic aspernatur totam adipisci repellendus accusamus. Consequuntur alias provident ab veniam cupiditate vitae quia velit voluptas quo dolor asperiores, hic aliquam! Provident voluptate similique eos suscipit obcaecati consequuntur est, veniam consectetur. 

        //     Eos esse fugit perferendis quos consequatur natus, quod adipisci et ipsa animi quam unde cum molestias officiis est alias itaque tempore sunt? Soluta et, sed iste repellendus explicabo exercitationem, odit ipsam dignissimos sint aut veritatis non quibusdam corporis. Cum cupiditate alias officia dolores? Harum ullam natus dicta rerum repudiandae autem doloribus deleniti ipsum, dolorem aperiam nobis totam dignissimos alias distinctio impedit veniam neque, esse error magni accusantium! Possimus doloribus facere earum repellat magnam, odit numquam laborum dolorem veniam nemo ut placeat veritatis eaque maxime quasi esse temporibus accusamus atque? Quia optio facilis quae a blanditiis asperiores accusantium esse praesentium suscipit earum. Atque molestias assumenda nemo error est sequi laudantium quam vitae voluptatibus!',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, vitae. Minima error quasi maiores laudantium itaque ab, quibusdam doloremque nobis fugiat distinctio aspernatur nam dolorem,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad illum quidem voluptatum sapiente, necessitatibus ea provident quasi hic excepturi, minus voluptatibus ullam quisquam consequuntur non velit id veritatis laborum praesentium. Commodi voluptate ad quam voluptatem. Eos laboriosam saepe animi repudiandae vero consequuntur vel, nam ab, repellat harum magni ea beatae quidem obcaecati exercitationem soluta minima voluptates porro hic aspernatur totam adipisci repellendus accusamus. Consequuntur alias provident ab veniam cupiditate vitae quia velit voluptas quo dolor asperiores, hic aliquam! Provident voluptate similique eos suscipit obcaecati consequuntur est, veniam consectetur. 

        //     Eos esse fugit perferendis quos consequatur natus, quod adipisci et ipsa animi quam unde cum molestias officiis est alias itaque tempore sunt? Soluta et, sed iste repellendus explicabo exercitationem, odit ipsam dignissimos sint aut veritatis non quibusdam corporis. Cum cupiditate alias officia dolores? Harum ullam natus dicta rerum repudiandae autem doloribus deleniti ipsum, dolorem aperiam nobis totam dignissimos alias distinctio impedit veniam neque, esse error magni accusantium! Possimus doloribus facere earum repellat magnam, odit numquam laborum dolorem veniam nemo ut placeat veritatis eaque maxime quasi esse temporibus accusamus atque? Quia optio facilis quae a blanditiis asperiores accusantium esse praesentium suscipit earum. Atque molestias assumenda nemo error est sequi laudantium quam vitae voluptatibus!',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
