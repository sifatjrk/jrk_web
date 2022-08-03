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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200)->nullable();
            $table->string('photo', 100)->nullable();
            $table->string('icon', 100)->nullable();
            $table->text('description')->nullable();
            $table->integer('price', 100)->nullable();
            $table->integer('discount_price', 100)->nullable();
            $table->date('discount_start_date', 100)->nullable();
            $table->date('discount_end_date', 100)->nullable();
            $table->boolean('featured', 100)->nullable();
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
        Schema::dropIfExists('services');
    }
};
