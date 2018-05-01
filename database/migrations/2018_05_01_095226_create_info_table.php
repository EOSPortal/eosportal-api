<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chain_id')->unsigned();
            $table->foreign('chain_id')->references('id')->on('chains');
            $table->integer('producer_id')->unsigned();
            $table->foreign('producer_id')->references('id')->on('producers');
            $table->integer('head_producer_id')->unsigned();
            $table->foreign('head_producer_id')->references('id')->on('producers');
            $table->string('server_version');
            $table->integer('head_block_num');
            $table->integer('last_irreversible_block_num');
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
        Schema::dropIfExists('info');
    }
}
