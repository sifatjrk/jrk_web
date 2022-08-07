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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',100)->nullable();
            $table->string('level',100)->nullable();
            $table->string('country_of_institution',100)->nullable();
            $table->string('institution_name',100)->nullable();
            $table->string('major_subject',100)->nullable();
            $table->string('result',100)->nullable();
            $table->string('passing_year',100)->nullable();
            $table->string('note',100)->nullable();
            $table->string('creator',100)->nullable();
            $table->string('slug',100)->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('education');
    }
};
