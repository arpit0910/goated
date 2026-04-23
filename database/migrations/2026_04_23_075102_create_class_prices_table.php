<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('class_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dance_class_id')->constrained('dance_classes')->onDelete('cascade');
            $table->string('label'); // e.g., Early Bird, On the spot
            $table->string('price'); // e.g., ₹2500
            $table->integer('slots')->nullable(); // e.g., 10
            $table->date('valid_till')->nullable(); // e.g., 2026-05-01
            $table->string('condition')->nullable(); // e.g., First 10 students
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('class_prices');
    }
};
