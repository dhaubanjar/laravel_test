<?php

use App\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks=0"); //yo haleyna vaney seed garda error aucha.
        Post::truncate();
//        Category::truncate();
//        $this->call(CategorySeeder::class);
        $this->call(PostSeeder::class);
//        $this->call(TagSeeder::class);

        DB::statement("SET foreign_key_checks=1");
    }
}
