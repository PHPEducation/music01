<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSingersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('namereal');
            $table->string('national');
            $table->date('birth');
            $table->text('life');
            $table->string('sex');
            $table->integer('view');
            $table->string('image');
            $table->integer('band_id')->unsigned()->nullable();
            $table->foreign('band_id')->references('id')->on('bands')->onUpdate('CASCADE')->onDelete('CASCADE');
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
        Schema::dropIfExists('singers');
    }
}
