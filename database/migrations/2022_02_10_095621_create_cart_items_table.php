<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ip');
            $table->string('p_title');
            $table->float('price');
            $table->integer('qty')->nullable();
            $table->float('total');
            $table->string('no_of_count')->nullable(); 
            $table->string('date');
            $table->string('from');
            $table->string('to');
            $table->string('type')->nullable();
            $table->string('form_option')->nullable();
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
        Schema::dropIfExists('cart_items');
    }
}
