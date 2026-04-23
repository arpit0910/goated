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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dance_class_id')->constrained()->onDelete('cascade');
            $table->foreignId('class_price_id')->constrained()->onDelete('cascade');
            $table->string('student_name');
            $table->string('student_email');
            $table->string('student_phone');
            $table->string('amount_paid');
            $table->string('payment_status')->default('pending'); // pending, completed, failed
            $table->string('transaction_id')->nullable();
            $table->integer('slots')->default(1);
            $table->json('payment_details')->nullable();
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
        Schema::dropIfExists('bookings');
    }
};
