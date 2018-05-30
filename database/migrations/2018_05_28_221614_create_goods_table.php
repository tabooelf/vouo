<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->integer('category_id')->unsigned()->default(0);
            $table->integer('price')->unsigned();
            $table->string('img');
            $table->text('description');
            $table->string('slug')->default(null);
            $table->boolean('is_sale');
            $table->boolean('is_hot');
            $table->boolean('is_new');
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
        Schema::dropIfExists('goods');
    }
}
