<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tels', function (Blueprint $table) {
            $table->increments('id');
	    $table->string("tel_nb",15)->unique();
	    $table->integer("partma_id")->unsigned(); 
	    $table->foreign("partma_id")->references("id")->on("partmas");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tels');
    }
}
