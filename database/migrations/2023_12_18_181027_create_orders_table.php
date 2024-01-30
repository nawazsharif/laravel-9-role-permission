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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->string('status_name');
            $table->integer('customer_id')->default(0);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('telephone');
            $table->string('customer_name');
            $table->string('payment');
            $table->boolean('payment_status');
            $table->string('order_type_name');
            $table->dateTime('delivery_time');
            $table->decimal('delivery_charge')->default(0);
            $table->dateTime('order_date_time');
            $table->text('formatted_address')->nullable();
            $table->string('currency');
            $table->integer('total_items')->default(0);
            $table->decimal('order_total')->default(0);
            $table->string('customer_phone_number');
            $table->decimal('paid_amount_by_customer')->default(0);
            $table->decimal('amount_to_be_paid')->default(0);
            $table->decimal('discount')->default(0);
            $table->decimal('service_charge')->default(0);
            $table->decimal('handeling_fee')->default(0);
            $table->string('restaurant_name');
            $table->string('restaurant_id');
            $table->decimal('Vat')->default(0);
            $table->decimal('subtotal')->decimal(0);
            $table->decimal('GrandTotal')->default(0);
            $table->text('comment')->nullable();
            $table->string('coupon_title')->nullable();
            $table->decimal('coupon_value')->default(0);
            $table->json('order_menus')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
