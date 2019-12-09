<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Star;

class StarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    	Star::truncate();

    	Star::create([
			'user_id'       => 1,
			'repository_id' => 1,
    	]);	

    	Star::create([
			'user_id'       => 2,
			'repository_id' => 2, 
    	]);	

    	Star::create([
			'user_id'       => 3,
			'repository_id' => 2,
    	]);	

    	Star::create([
			'user_id'       => 4,
			'repository_id' => 2,
    	]);	

    	Star::create([
			'user_id'       => 7,
			'repository_id' => 2,
    	]);	

    	Star::create([
			'user_id'       => 8,
			'repository_id' => 2,
    	]);	

    	Star::create([
			'user_id'       => 9,
			'repository_id' => 2,
    	]);	

    	Star::create([
			'user_id'       => 1,
			'repository_id' => 5, 
    	]);	

    	Star::create([
			'user_id'       => 1,
			'repository_id' => 4, 
    	]);	

    	Star::create([
			'user_id'       => 1,
			'repository_id' => 3, 
    	]);	

    	Star::create([
			'user_id'       => 1,
			'repository_id' => 7, 
    	]);	

    	Star::create([
			'user_id'       => 1,
			'repository_id' => 8, 
    	]);	

    	Star::create([
			'user_id'       => 2,
			'repository_id' => 4, 
    	]);	

    	Star::create([
			'user_id'       => 3,
			'repository_id' => 4, 
    	]);	

    	Star::create([
			'user_id'       => 4,
			'repository_id' => 5, 
    	]);	

    	Star::create([
			'user_id'       => 5,
			'repository_id' => 4, 
    	]);	

    	Star::create([
			'user_id'       => 6,
			'repository_id' => 4, 
    	]);	

    	Star::create([
			'user_id'       => 5,
			'repository_id' => 5, 
    	]);	

    	Star::create([
			'user_id'       => 6,
			'repository_id' => 6, 
    	]);	

    	Star::create([
			'user_id'       => 1,
			'repository_id' => 9, 
    	]);	

    	Star::create([
			'user_id'       => 2,
			'repository_id' => 9, 
    	]);	

    	Star::create([
			'user_id'       => 3,
			'repository_id' => 9, 
    	]);	

    	Star::create([
			'user_id'       => 4,
			'repository_id' => 9, 
    	]);	

    	Star::create([
			'user_id'       => 5,
			'repository_id' => 9, 
    	]);	

    	Star::create([
			'user_id'       => 6,
			'repository_id' => 9, 
    	]);	

    	Star::create([
			'user_id'       => 7,
			'repository_id' => 9, 
    	]);	

    	Star::create([
			'user_id'       => 9,
			'repository_id' => 9, 
    	]);	

    	Star::create([
			'user_id'       => 7,
			'repository_id' => 8, 
    	]);	

    	Star::create([
			'user_id'       => 4,
			'repository_id' => 8, 
    	]);	

    	Star::create([
			'user_id'       => 2,
			'repository_id' => 8, 
    	]);	

    	Star::create([
			'user_id'       => 1,
			'repository_id' => 7, 
    	]);	

    	Star::create([
			'user_id'       => 4,
			'repository_id' => 7, 
    	]);	

    	Star::create([
			'user_id'       => 9,
			'repository_id' => 7, 
    	]);	

    	Star::create([
			'user_id'       => 8,
			'repository_id' => 7, 
    	]);	

    	Star::create([
			'user_id'       => 6,
			'repository_id' => 6, 
    	]);	

    	Star::create([
			'user_id'       => 9,
			'repository_id' => 6, 
    	]);	
    }
}
