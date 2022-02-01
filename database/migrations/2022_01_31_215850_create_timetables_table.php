<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject')->constrained('id')->on('subjects');
            $table->foreignId('teacher')->constrained('id')->on('users');
            $table->foreignId('cabinet')->constrained('id')->on('cabinets');
            $table->foreignId('day')->constrained('id')->on('days');
            $table->enum('type', ['Знаменатель', 'Числитель', 'Общий'])->default('Общий');
            $table->integer('number');
            $table->foreignId('group')->constrained('id')->on('groups');
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
        Schema::dropIfExists('timetables');
    }
}
