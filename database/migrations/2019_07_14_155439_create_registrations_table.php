<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('staff_name');
            $table->string('staff_email');
            $table->string('staff_phone');
            $table->enum('staff_gender', ['male', 'female']);
            $table->text('staff_image')->nullable();
            $table->string('staff_password');
            $table->rememberToken();
            $table->enum('staff_status', ['supervisor', 'nurse', 'operator']);
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
        Schema::dropIfExists('registrations');
    }
}
