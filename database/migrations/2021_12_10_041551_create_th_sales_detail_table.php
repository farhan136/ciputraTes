<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThSalesDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('th_sales_detail', function (Blueprint $table) {
            $table->bigIncrements('salesdetail_id');
            $table->integer('sales_id');
            $table->integer('cluster_id');
            $table->integer('type_id');
            $table->integer('price');
            $table->integer('qty');
            $table->integer('total');
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
        Schema::dropIfExists('th_sales_detail');
    }
}
