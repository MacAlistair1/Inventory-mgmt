<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('sales_date');
            $table->string('product_name');
            $table->float('product_rate');
            $table->integer('sales_quantity');
            $table->float('sales_amount');
            $table->float('paid_amount');
            $table->float('due_amount');
            $table->string('customer_name');
            $table->string('customer_address');
            $table->string('customer_contact');
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
        Schema::dropIfExists('sales');
    }
}
