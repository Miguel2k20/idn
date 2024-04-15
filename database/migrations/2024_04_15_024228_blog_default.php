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
        Schema::create('blogs', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('id_category'); 
            $table->string('title')->nullable(false);
            $table->text('text')->nullable(false);
            $table->enum('status', ['1', '0'])->default('1');
            $table->timestamps();
            
            $table->foreign('id_category')->references('id')->on('blogsCategory');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
