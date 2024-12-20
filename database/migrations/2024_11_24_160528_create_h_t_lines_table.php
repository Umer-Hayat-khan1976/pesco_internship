<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHtLinesTable extends Migration
{
    public function up()
    {
        Schema::create('ht_lines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('survey_id')->constrained('surveys')->onDelete('cascade');
            $table->string('conductor_name');
            $table->float('length_in_kms');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ht_lines');
    }
}
