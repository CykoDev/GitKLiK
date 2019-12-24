<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commits', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->index();
            $table->integer('repository_id')->unsigned()->index();
            $table->integer('hex_code')->unique();
            $table->string('name');
            $table->string('branch');
            $table->text('message')->nullable;
            $table->string('author');
            $table->timestamps();


            $table->foreign('repository_id')
                ->references('id')->on('repositories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commits');
    }
}
