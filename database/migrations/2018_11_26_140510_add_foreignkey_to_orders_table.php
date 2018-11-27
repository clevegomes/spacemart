<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeyToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('address_id')->unsigned();
            $table->integer('contact_id')->unsigned();
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['address_id']);
            $table->dropForeign(['contact_id']);
            $table->dropColumn('user_id');
            $table->dropColumn('address_id');
            $table->dropColumn('contact_id');
        });
    }
}
