<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chain_id')->unsigned();
            $table->foreign('chain_id')->references('id')->on('chains');
            $table->string('name');
            $table->string('organization');
            $table->string('contact');
            $table->string('location');
            $table->string('p2p_url');
            $table->integer('p2p_port');
            $table->string('api_url');
            $table->integer('api_port');
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
        Schema::dropIfExists('producers');
    }
}
