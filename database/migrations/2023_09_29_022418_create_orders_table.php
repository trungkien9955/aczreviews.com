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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name');
            $table->string('adress');
            $table->string('ward');
            $table->string('district');
            $table->string('province');
            $table->string('mobile');
            $table->string('email');
            $table->string('shipping_charges');
            $table->string('coupon_code');
            $table->float('coupon_camount');
            $table->string('order_status');
            $table->string('payment_method');
            $table->float('total_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
