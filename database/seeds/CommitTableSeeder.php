<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Commit;

class CommitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Commit::truncate();

        Commit::create([
			'repository_id' => '1',
			'code'          => '691269699',
			'name'          => 'initial commit',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '2',
			'code'          => '696934699',
			'name'          => 'initial commit',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'idkidkidk',
        ]);

        Commit::create([
			'repository_id' => '1',
			'code'          => '696169699',
			'name'          => 'created backend',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '2',
			'code'          => '692969699',
			'name'          => 'created unit tests',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'idkidkidk',
        ]);

        Commit::create([
			'repository_id' => '4',
			'code'          => '696962699',
			'name'          => 'initial commit',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'idkidkidk',
        ]);

        Commit::create([
			'repository_id' => '5',
			'code'          => '296969699',
			'name'          => 'initial commit',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'idkidkidk',
        ]);

        Commit::create([
			'repository_id' => '6',
			'code'          => '696969639',
			'name'          => 'initial commit',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '7',
			'code'          => '696964699',
			'name'          => 'initial commit',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '8',
			'code'          => '696959699',
			'name'          => 'initial commit',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '9',
			'code'          => '696969659',
			'name'          => 'initial commit',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '10',
			'code'          => '695969699',
			'name'          => 'initial commit',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '11',
			'code'          => '696969669',
			'name'          => 'initial commit',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '12',
			'code'          => '67969699',
			'name'          => 'initial commit',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '6',
			'code'          => '676969699',
			'name'          => 'deleted everything in anger',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '6',
			'code'          => '696969679',
			'name'          => 'ruined the code and deleted yet again',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '6',
			'code'          => '696969697',
			'name'          => 'ok fine i have an anger problem',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '12',
			'code'          => '696969689',
			'name'          => 'initial commit',
			'branch'        => 'dummt commit',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '12',
			'code'          => '698969699',
			'name'          => 'updated README',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '5',
			'code'          => '896969699',
			'name'          => 'updated README',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '11',
			'code'          => '696449699',
			'name'          => 'started debugging',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '12',
			'code'          => '446969699',
			'name'          => 'fuck stackoverflow this is ruined',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '6',
			'code'          => '69696449',
			'name'          => 'started chatbox development',
			'branch'        => 'feature-chatbox',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '6',
			'code'          => '696955699',
			'name'          => 'imeplented some shit from google',
			'branch'        => 'feature-chatbox',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '6',
			'code'          => '695569699',
			'name'          => 'finalized chatbox',
			'branch'        => 'feature-chatbox',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '6',
			'code'          => '696969677',
			'name'          => 'merged feature-chatbox->master',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

        Commit::create([
			'repository_id' => '9',
			'code'          => '696779699',
			'name'          => 'i just wanna be carried through this project',
			'branch'        => 'master',
			'message'       => '',
			'author'        => 'supahot admin',
        ]);

    }
}
