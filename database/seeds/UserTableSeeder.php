<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

    	User::create([
            'name'      => 'suphotadmin',
            'full_name' => 'supa hothothot',
            'email'     => 'supa@hot.admin',
            'headline'  => 'The headline of a supahot admin bebe',
            'bio'       => 'Hella noice bio of a supahotadmin',
            'password'  => bcrypt('aaaaaa'),
    	]);

    	User::create([
            'name'      => 'randomguy1',
            'full_name' => 'a random guy 1',
            'email'     => 'randomguy1@not.supahot',
            'headline'  => 'The headline of a sad random1 guy',
            'bio'       => 'Hella noice bio of a sad random1 guy',
            'password'  => bcrypt('aaaaaa'),
    	]);

    	User::create([
            'name'      => 'randomguy2',
            'full_name' => 'a random guy 2',
            'email'     => 'randomguy2@not.supahot',
            'headline'  => 'The headline of a sad random2 guy',
            'bio'       => 'Hella noice bio of a sad random2 guy',
            'password'  => bcrypt('aaaaaa'),
    	]);

    	User::create([
            'name'      => 'randomguy3',
            'full_name' => 'a random guy 3',
            'email'     => 'randomguy3@not.supahot',
            'headline'  => 'The headline of a sad random3 guy',
            'bio'       => 'Hella noice bio of a sad random3 guy',
            'password'  => bcrypt('aaaaaa'),
    	]);

    	User::create([
            'name'      => 'randomguy4',
            'full_name' => 'a random guy 4',
            'email'     => 'randomguy4@not.supahot',
            'headline'  => 'The headline of a sad random4 guy',
            'bio'       => 'Hella noice bio of a sad random4 guy',
            'password'  => bcrypt('aaaaaa'),
    	]);

    	User::create([
            'name'      => 'randomguy5',
            'full_name' => 'a random guy 5',
            'email'     => 'randomguy5@not.supahot',
            'headline'  => 'The headline of a sad random5 guy',
            'bio'       => 'Hella noice bio of a sad random5 guy',
            'password'  => bcrypt('aaaaaa'),
    	]);

    	User::create([
            'name'      => 'randomguy6',
            'full_name' => 'a random guy 6',
            'email'     => 'randomguy6@not.supahot',
            'headline'  => 'The headline of a sad random6 guy',
            'bio'       => 'Hella noice bio of a sad random6 guy',
            'password'  => bcrypt('aaaaaa'),
    	]);

    	User::create([
            'name'      => 'randomguy7',
            'full_name' => 'a random guy 7',
            'email'     => 'randomguy7@not.supahot',
            'headline'  => 'The headline of a sad random7 guy',
            'bio'       => 'Hella noice bio of a sad random7 guy',
            'password'  => bcrypt('aaaaaa'),
    	]);

    	User::create([
            'name'      => 'randomguy8',
            'full_name' => 'a random guy 8',
            'email'     => 'randomguy8@not.supahot',
            'headline'  => 'The headline of a sad random8 guy',
            'bio'       => 'Hella noice bio of a sad random8 guy',
            'password'  => bcrypt('aaaaaa'),
    	]);
    }
}
