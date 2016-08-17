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
            $table->decimal("price");
            $table->integer("city_id")->unsigned();
	    $table->integer("user_id")->unsigned();
	    $table->integer("tel_id")->unsigned();
	    $table->foreign("city_id")->references("id")->on("cities");
	    $table->foreign("user_id")->references("id")->on("users");
	    $table->foreign("tel_id")->references("id")->on("tels");
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