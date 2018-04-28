<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUniqueToProducersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("producers", function (Blueprint $table) {
            $table->unique(['chain_id', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("producers", function (Blueprint $table) {
            $table->dropForeign(['chain_id']);
            $table->dropUnique(['chain_id', 'name']);
            $table->foreign('chain_id')->references('id')->on('chains');
        });
    }
}
