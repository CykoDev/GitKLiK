<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Repository;

class RepoTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    	DB::table('repository_tag')->truncate();

        DB::table('repository_tag')->insert([
			'repository_id' => 1,
			'tag_id'        => 1,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 1,
			'tag_id'        => 2,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 1,
			'tag_id'        => 3,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 1,
			'tag_id'        => 4,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 1,
			'tag_id'        => 6,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 1,
			'tag_id'        => 7,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 1,
			'tag_id'        => 8,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 1,
			'tag_id'        => 9,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 1,
			'tag_id'        => 10,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 1,
			'tag_id'        => 12,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 1,
			'tag_id'        => 11,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 12,
			'tag_id'        => 1,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 12,
			'tag_id'        => 2,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 12,
			'tag_id'        => 3,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 12,
			'tag_id'        => 4,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 12,
			'tag_id'        => 5,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 12,
			'tag_id'        => 6,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 12,
			'tag_id'        => 7,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 12,
			'tag_id'        => 8,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 12,
			'tag_id'        => 9,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 12,
			'tag_id'        => 10,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 12,
			'tag_id'        => 11,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 4,
			'tag_id'        => 1,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 4,
			'tag_id'        => 11,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 6,
			'tag_id'        => 10,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 6,
			'tag_id'        => 5,
        ]);

        DB::table('repository_tag')->insert([
			'repository_id' => 9,
			'tag_id'        => 9,
        ]);
    }
}
