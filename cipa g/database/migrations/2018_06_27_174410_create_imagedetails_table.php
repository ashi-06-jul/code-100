<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagedetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagedetails', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('id')->references('id')->on('stories');
            $table->string('purpose');
            $table->string('description');
            $table->string('tag');
            $table->string('feedby');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagedetails');
    }
}
