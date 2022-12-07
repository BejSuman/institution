<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('guardians_name');
            $table->bigInteger('student_phone_number');
            $table->bigInteger('guardians_phone_number');
            $table->bigInteger('student_whatsapp_number');
            $table->bigInteger('guardians_whatsapp_number');
            $table->string('country');
            $table->string('state');
            $table->string('address');
            $table->bigInteger('pin');
            $table->string('last_exam');
            $table->string('current_course');
            $table->string('course');
            $table->string('course_duration');
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
        Schema::dropIfExists('admissions');
    }
}
