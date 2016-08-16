<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partmas', function (Blueprint $table) {
            $table->increments('id');
	    $table->string("address");
	    $table->string("type");
            $table->dicimal("price");
            $table->integer("cities_id");
	    $table->foreing("cities_id")->references("id")->on("cities");
	    $table->integer("users_id")->references("id")->on("users");
	    $table->string("tels_id")->references("id")->on("tels");
	    $table->decimal("surface");
	    $table->text("addInfo");
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
        Schema::drop('partmas');
    }
}
