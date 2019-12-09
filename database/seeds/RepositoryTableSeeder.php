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
			'user_id'     => 1,
			'name'        => 'PHP Login System',
			'description' => 'Raw PHP+AJAX login and registration system',
        ]);

        Repository::create([
			'user_id'     => 1,
			'name'        => 'PHP Oonga Boonga System',
			'description' => 'Raw PHP+Ooonga login and Boonga system',
        ]);

        Repository::create([
			'user_id'     => 2,
			'name'        => 'Automatic Butt Scratcher in ML',
			'description' => 'Unsupervised Learning for unsupervised luxury. Use wherever you want.',
        ]);

        Repository::create([
			'user_id'     => 5,
			'name'        => 'My Dead Uncle\'s Will',
			'description' => 'Please dont tell the police it wasnt my fault he was offering me candy.',
        ]);

        Repository::create([
			'user_id'     => 1,
			'name'        => 'Python 2D Game',
			'description' => 'click on this link to win 100000000000$!!!!!!',
        ]);

        Repository::create([
			'user_id'     => 8,
			'name'        => 'Java tentacle generator',
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
			'name'        => 'Why are you gay?',
			'description' => 'Who said Im Gay - AI program for future brainwashing agendas.',
        ]);

        Repository::create([
			'user_id'     => 1,
			'name'        => 'Toilet Paper Simulator',
			'description' => 'App shows a toilet paper. Open it, look at it, marvel it, then use it to wipe. Super smooth experience. 10/10 dentists recommmended this product to kill yourself.',
        ]);

        Repository::create([
			'user_id'     => 8,
			'name'        => 'Particle Generator',
			'description' => 'Generated Particles. They\'re colorful...that was my Final Yead Project now fuck off.',
        ]);
    }
}
