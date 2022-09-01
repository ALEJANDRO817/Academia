<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->timestamps();
            $table->string('name');
            $table->string('Lastname');
            $table->string('colelle_degree');
            $table->integer('age');
            $table->date('contract_date');
            $table->string('imagen');
            $table->string('identity_document');
            // $table->unsignedBigInteger('subject_id');
            // $table->unsignedBigInteger('courses_id');
            // $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade')->onUpdate('cascade');;
            // $table->foreign('courses_id')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');;
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
};
