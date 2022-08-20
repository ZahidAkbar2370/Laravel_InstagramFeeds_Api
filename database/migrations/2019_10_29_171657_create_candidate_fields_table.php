<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_fields', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('candidate_field_group_id');
            $table->string('name');
            $table->string('type');
            $table->integer('sort_order')->nullable();
            $table->text('options')->nullable();
            $table->boolean('required')->default(0);
            $table->text('placeholder')->nullable();
            $table->boolean('enabled')->default(1);
            $table->boolean('filter')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_fields');
    }
}
