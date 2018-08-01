<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pname');
            $table->integer('page');
            $table->char('sex');
            $table->text('address');
            $table->text('address2')->nullable();
            $table->string('city');
            $table->string('district');
            $table->string('state');
            $table->string('mobileno');
            $table->string('email');
            $table->text('detail');
            $table->string('qualification')->nullable();
            $table->string('sibling')->nullable();
            $table->string('siblingname')->nullable();
            $table->integer('siblingage')->nullable();
            $table->char('siblingsex')->nullable();
            $table->string('history')->nullable();
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->string('relation')->nullable();
            $table->timestamps( );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
