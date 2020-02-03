<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_user', function (Blueprint $table) {

            $table->bigInteger('product_id')->unsigned()->index();
            $table->foreign('product_id', 'prd_usr_key')
                    ->references('id')
                    ->on('products');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id', 'usr_prd_key')
                    ->references('id')
                    ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_user', function (Blueprint $table) {
            $table->dropForeign('prd_usr_key');
            $table->dropColumn('product_id');
            $table->dropForeign('usr_prd_key');
            $table->dropColumn('user_id');
        });
    }
}
