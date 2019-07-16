<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('doctor_name');
            $table->string('doctor_password');
            $table->string('doctor_degree');
            $table->string('doctor_speciality');
            $table->string('doctor_fellowship');
            $table->string('doctor_year_of_experience');
            $table->string('doctor_position');
            $table->string('doctor_email');
            $table->string('doctor_phone');
            $table->string('doctor_facebook');
            $table->string('doctor_twitter');
            $table->string('doctor_instagram');
            $table->string('doctor_youtube');
            $table->text('doctor_image');
            $table->enum('doctor_status', ['active', 'inactive']);
            $table->softDeletes();
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
        Schema::dropIfExists('doctors');
    }
}
