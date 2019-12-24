<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Schema::table('stars', function (Blueprint $table) {

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('repository_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });

        Schema::table('repositories', function (Blueprint $table) {

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });

        Schema::table('commits', function (Blueprint $table) {

            $table->foreign('repository_id')
                ->references('id')->on('repositories')
                ->onDelete('cascade');
        });
    }
}
