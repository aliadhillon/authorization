<?php

use App\Post;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)
                ->create()
                ->each(function ($user){
                    $user->posts()->createMany(
                        factory(Post::class, 5)->make()->toArray()
                    );
                });
    }
}
