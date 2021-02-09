<?php

use Illuminate\Database\Seeder;
use App\Post;
class postSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class,70)->create();
    }
}
