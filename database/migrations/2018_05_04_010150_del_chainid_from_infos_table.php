<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\QueryException;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DelChainidFromInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {
            // table was renamed, check if old index is still in use
            Schema::table('infos', function ($table) {
                $table->dropForeign('info_chain_id_foreign');
            });
        } catch (QueryException $e) {
            Schema::table('infos', function ($table) {
                $table->dropForeign(['chain_id']);
            });
        }
        Schema::table('infos', function ($table) {
            $table->dropColumn('chain_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('infos', function ($table) {
            $table->integer('chain_id')->unsigned()->nullable();
            $table->foreign('chain_id')->references('id')->on('chains');
        });
    }
}
