<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFortalezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fortalezas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_control')->default(0);

            $table->string('fortalezas_1')->default('');
            $table->string('fortalezas_2')->default('');
            $table->string('fortalezas_3')->default('');
            $table->string('fortalezas_4')->default('');

            $table->string('retro_1')->default('');
            $table->string('retro_2')->default('');
            $table->string('retro_3')->default('');
            $table->string('retro_4')->default('');

            $table->integer('cal_1')->default(0);
            $table->integer('cal_2')->default(0);
            $table->integer('cal_3')->default(0);
            $table->integer('cal_4')->default(0);


            $table->integer('cal_general')->default(0);


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
        Schema::dropIfExists('fortalezas');
    }
}
