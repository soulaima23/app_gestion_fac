<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->integer('registration_number');
            $table->string('fullname');
            $table->string('specialitee');
            $table->String('contrat');
            $table->integer('phone');
            $table->string('address');
            $table->string('city');
            $table->string('niveau');
            $table->unsignedBigInteger('type_teacher');

            $table->foreign('type_teacher')->references('id')->on('types');

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
        Schema::dropIfExists('teachers');
    }
}
