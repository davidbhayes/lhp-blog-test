<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->
            count(4)->
            create()->
            each(function($user) {
                Post::factory()
                    ->count(rand(2,10))
                    ->forUser($user)
                    ->create();
            });
    }
}
