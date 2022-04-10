<?php

namespace Support\Database\Console\Seeds;

use Domain\Auth\database\seeders\UsersSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call(UsersSeeder::class);
    }
}
