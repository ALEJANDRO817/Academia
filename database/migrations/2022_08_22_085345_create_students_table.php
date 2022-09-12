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
        //    $table->string('document_issuing_country');//este no se guarda Base de datos//
        //    $table->string('issuing_department');//este no se guarda Base de datos//
            $table->date('expedition_date');
            $table->unsignedBigInteger('id_issuing_municipalityy');
            $table->string('name', 45);
            $table->string('first_last_name', 45);
            $table->string('second_last_name', 45);
            $table->enum('gender', ['M', 'F', 'OTROS']);
            $table->date('birth_date');
            $table->unsignedBigInteger('birth_municipality');
            $table->integer('stratum');
            $table->unsignedBigInteger('id_course');
            $table->timestamps();
            //foraneas
            $table->foreign('id_issuing_municipalityy')->references('id')->on('municipalities')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('birth_municipality')->references('id')->on('municipalities')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('id_course')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');;
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
