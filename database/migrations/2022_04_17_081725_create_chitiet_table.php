<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiet', function (Blueprint $table) {
            $table->integer('id_chitiet');
            $table->String('user_name');
            $table->String('product_name');
            $table->integer('quantity');
            $table->integer('price');
            $table->String('image');
            $table->date('timeOrder');
            $table->integer('total');
            $table->integer('idHD');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitiet');
    }
}
