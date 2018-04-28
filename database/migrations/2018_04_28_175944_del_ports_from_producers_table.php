<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DelPortsFromProducersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('producers', function (Blueprint $table) {
            $table->dropColumn('p2p_port');
            $table->dropColumn('api_port');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('producers', function (Blueprint $table) {
            $table->integer('p2p_port');
            $table->integer('api_port');
        });
    }
}
