<?php

use App\Post;
use Illuminate\Database\Seeder;



class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create();
        for($i=0;$i<=20;$i++){
        $name=$faker->name;
        $post=new Post();
        $post->name=$name;
        $post->title=$name;
        $post->content=$faker->text(250);
        $post->save();
        }
    }
}
