<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('photo', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->string('photo_name');
            $table->string('photo_description');
            $table->date('photo_date');
            $table->unsignedBigInteger('event_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('blog_id')->nullable();

            $table->foreign('event_id')->references('id')->on('event')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
            $table->foreign('blog_id')->references('id')->on('blog')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo');
    }
};
