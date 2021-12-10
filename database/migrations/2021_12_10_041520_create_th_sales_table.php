<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('th_sales', function (Blueprint $table) {
            $table->bigIncrements('sales_id');
            $table->integer('customer_id');
            $table->timestamp('sales_date');
            $table->text('notes');
            $table->integer('total_sales_price');
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
        Schema::dropIfExists('th_sales');
    }
}
