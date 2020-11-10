<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('weekday_monday')->default(false);
            $table->boolean('weekday_tuesday')->default(false);
            $table->boolean('weekday_wednesday')->default(false);
            $table->boolean('weekday_thursday')->default(false);
            $table->boolean('weekday_friday')->default(false);
            $table->boolean('weekday_saturday')->default(false);
            $table->boolean('time_morning')->default(false);
            $table->boolean('time_afternoon')->default(false);
            $table->boolean('time_night')->default(false);
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
        Schema::dropIfExists('courses');
    }
}
