<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputreadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputreadings', function (Blueprint $table) {
            $table->id();
            $table->string('station');
            $table->string('load_date');
            $table->string('hour');
            $table->string('feeder');
            $table->string('load_reading');
            $table->string('energy_reading');
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
        Schema::dropIfExists('inputreadings');
    }
}
