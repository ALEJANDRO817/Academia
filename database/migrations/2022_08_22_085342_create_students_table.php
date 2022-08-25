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
            $table->timestamps();
            $table->enum('Document_type', ['CC', 'TI', 'CE']);
            $table->integer('document_number');
            $table->string('identify_document');
            $table->string('document_issunig_country');
            $table->string('issuing_department');
            $table->string('issuing_municipality');
            $table->date('expedition_date');
            $table->string('name');
            $table->string('first_last_name');
            $table->string('second_last_name');
            $table->enum('gender', ['M', 'F', 'OTROS']);
            $table->date('birth_date');
            $table->string('birth_country');
            $table->string('birth_departament');
            $table->string('birth_municipality');
            $table->integer('stratum');
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
