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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->enum('document_type', ['CC', 'TI', 'CE']);
            $table->integer('document_number');
            $table->string('identify_document');
            $table->unsignedBigInteger('issuing_municipality');
            $table->date('id_expedition_date');
            $table->string('names');
            $table->string('first_last_name');
            $table->string('second_last_name');
            $table->enum('gender', ['M', 'F', 'OTROS']);
            $table->date('birth_date');
            $table->unsignedBigInteger('id_birth_municipality');
            $table->integer('stratum');
            $table->timestamps();
            //foraneas
            $table->foreign('issuing_municipality')->references('id')->on('municipalities')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('id_birth_municipality')->references('id')->on('municipalities')->onDelete('cascade')->onUpdate('cascade');;
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
