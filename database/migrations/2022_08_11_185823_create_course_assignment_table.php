<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseAssignmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_assignment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('assignment_id');
            $table->timestamps();
        });
        //relasi ke tabel 
         Schema::table('course_assignment', function (Blueprint $table) {
            $table->foreign('course_id')->references('id')->on('course')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('assignment_id')->references('id')->on('assignment')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_assignment');
    }
}
