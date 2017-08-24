<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHipotesisTutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hipotesis_tutor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pertanyaan');
            $table->string('isian');
            $table->integer('status')->comment('1 for true, 0 for false');
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
        Schema::dropIfExists('hipotesis_tutor');
    }
}
