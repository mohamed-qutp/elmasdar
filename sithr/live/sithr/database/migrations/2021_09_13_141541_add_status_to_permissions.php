<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permissions_takens', function (Blueprint $table) {
            $table->string('status')->default("pending")->after('to');

            $table->unsignedBigInteger('accepted_by');
            $table->index('accepted_by');
            $table->foreign('accepted_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permissions_takens', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('accepted_by');
        });
    }
}
