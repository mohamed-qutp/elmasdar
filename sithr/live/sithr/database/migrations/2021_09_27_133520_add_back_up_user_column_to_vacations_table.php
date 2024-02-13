<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBackUpUserColumnToVacationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vacations_takens', function (Blueprint $table) {
            $table->unsignedBigInteger('back_up_user');
            $table->index('back_up_user');
            $table->foreign('back_up_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vacations_takens', function (Blueprint $table) {
            $table->dropColumn('back_up_user');
        });
    }
}
