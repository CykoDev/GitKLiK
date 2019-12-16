<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    	Tag::truncate();
    	
    	Tag::create([
			'name'        => 'PHP',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'Laravel',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'MySQL',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'MySQLi',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'PDO',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'Flutter',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'Android',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'iOS',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'WordPress',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'Nodejs',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'JQuery',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'AJAX',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'JavaScript',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'Python',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'Python R',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'Python NumPy',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'Python Pygame',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'Data Science',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'WooCommerce',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'Elementor',
			'description' => '',
    	]);	

    	Tag::create([
			'name'        => 'Java',
			'description' => '',
    	]);	
    }
}
