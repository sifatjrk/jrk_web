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
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->string('photo', 100)->nullable();
            $table->string('category_id', 100)->nullable();
            $table->string('title',100)->nullable();
            $table->text('description')->nullable();
            $table->text('requirement')->nullable();
            $table->text('responsibility')->nullable();
            $table->integer('salary', 100)->nullable();
            $table->text('benifits')->nullable();
            $table->string('job_type',100)->nullable();
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
        Schema::dropIfExists('job_posts');
    }
};
