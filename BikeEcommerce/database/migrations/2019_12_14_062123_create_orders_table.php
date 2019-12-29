<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->enum('status', ['pending', 'processing', 'completed', 'decline'])->default('pending');
            $table->integer('grand_total');
            $table->unsignedInteger('item_count');

            $table->boolean('payment_status')->default(1);
            $table->string('payment_method')->nullable();

            $table->string('fname');
            $table->string('lname');
            $table->string('companyname')->nullable();
            $table->longText('address');
            $table->string('city');
            $table->string('state');
            $table->string('zipcode');
            $table->string('emailaddress');
            $table->string('phonenumber');
            $table->string('ordernotes')->nullable();
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
}
