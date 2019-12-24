<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Repository;

class RepositoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Repository::truncate();

        Repository::create([
			'user_id'     => 9,
			'name'        => 'KLiK',
			'description' => 'Complete PHP Social Media Website',
        ]);

        Repository::create([
			'user_id'     => 1,
			'name'        => 'PHP Oonga Boonga System',
			'description' => 'Raw PHP+Ooonga login and Boonga system',
        ]);

        Repository::create([
			'user_id'     => 2,
			'name'        => 'Automatic Automation in ML',
			'description' => 'Unsupervised Learning for unsupervised luxury. Use wherever you want.',
        ]);

        Repository::create([
			'user_id'     => 5,
			'name'        => 'Automatic Car washer',
			'description' => 'this is a car washer which is automatic and is for a car which it washes',
        ]);

        Repository::create([
			'user_id'     => 1,
			'name'        => 'Python 2D Game',
			'description' => 'click on this link to win 100000000000$!!!!!!',
        ]);

        Repository::create([
			'user_id'     => 8,
			'name'        => 'Java something generator',
			'description' => 'Best for indoors fun with friends!!',
        ]);

        Repository::create([
			'user_id'     => 1,
			'name'        => 'Homemade cake generator',
			'description' => 'idk what this does it was a group assignment and i was carried.',
        ]);

        Repository::create([
			'user_id'     => 2,
			'name'        => 'Elon Musk',
			'description' => '[Top Secret] AI program for a future undercover AI owner of a dummy company Tesla. This is top secret- wait wtf',
        ]);

        Repository::create([
			'user_id'     => 1,
			'name'        => 'Hello world',
			'description' => 'Implemented Python + Unsupervised ML and 2 years of generation training to print hello world with a :) imogi.',
        ]);

        Repository::create([
			'user_id'     => 8,
			'name'        => 'programming simulator',
			'description' => 'a program which makes you feel like a programmer just by looking at the screen',
        ]);

        Repository::create([
			'user_id'     => 1,
			'name'        => 'Unity Hoolala Game',
			'description' => 'a game in unity made in unity for unity and by unity',
        ]);

        Repository::create([
			'user_id'     => 8,
			'name'        => 'Particle Generator',
			'description' => 'Generated Particles. They\'re colorful...that was my Final Year Project dont judge me.',
        ]);


    }
}
