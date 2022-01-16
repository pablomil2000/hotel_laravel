<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms_categories', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('imagen');
            $table->integer('tamano');
            $table->integer('precio');
            $table->integer('capacidad');
            $table->string('tipo_cama');
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
        Schema::dropIfExists('rooms_categories');
    }
}
