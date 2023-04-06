<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputoutagereadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputoutagereadings', function (Blueprint $table) {
            $table->id();
            $table->string('station');
            $table->string('outage_type');
            $table->string('out_feeder');
            $table->string('out_date_out');
            $table->string('out_date_in');
            $table->string('out_time_out');
            $table->string('out_time_in');
            $table->string('out_load_loss');
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
        Schema::dropIfExists('inputoutagereadings');
    }
}
