<?php

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
        $this->call(UserTableSeeder::class);
        $this->call(RepositoryTableSeeder::class);
        $this->call(CommitTableSeeder::class);
        $this->call(StarTableSeeder::class);
    }
}
