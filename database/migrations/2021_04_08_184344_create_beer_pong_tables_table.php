<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeerPongTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beer_pong_tables', function (Blueprint $table) {
            $table->id('table_id');        
            $table->boolean('cup_1');
            $table->boolean('cup_2');
            $table->boolean('cup_3');
            $table->boolean('cup_4');
            $table->boolean('cup_5');
            $table->boolean('cup_6');
            $table->boolean('cup_7');
            $table->boolean('cup_8');
            $table->boolean('cup_9');
            $table->boolean('cup_10');
            $table->boolean('cup_11');
            $table->boolean('cup_12');
            $table->boolean('cup_13');
            $table->boolean('cup_14');
            $table->boolean('cup_15');
            $table->boolean('cup_16');
            $table->boolean('cup_17');
            $table->boolean('cup_18');
            $table->boolean('cup_19');
            $table->boolean('cup_20');
            $table->integer('team_one')->nullable();
            $table->integer('team_two')->nullable();
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
        Schema::dropIfExists('beer_pong_tables');
    }
}
