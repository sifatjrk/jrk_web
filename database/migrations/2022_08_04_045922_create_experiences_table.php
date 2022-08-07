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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',100)->nullable();
            $table->string('company_name',100)->nullable();
            $table->string('employment_type',100)->nullable();
            $table->string('country',100)->nullable();
            $table->string('start_date',100)->nullable();
            $table->string('end_date',100)->nullable();
            $table->string('designation',100)->nullable();
            $table->string('current_salary',100)->nullable();
            $table->string('responsibility',100)->nullable();
            $table->string('achivement',100)->nullable();
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
        Schema::dropIfExists('experiences');
    }
};
