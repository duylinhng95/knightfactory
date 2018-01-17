<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('description',300);

            $table->integer('speaker_id')->unsigned()->nullable();
            $table->foreign('speaker_id')->references('id')->on('speakers');

            $table->integer('cityCourse_id')->unsigned()->nullable();
            $table->foreign('cityCourse_id')->references('id')->on('cityCourses');

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
        Schema::dropIfExists('classes');
    }
}
