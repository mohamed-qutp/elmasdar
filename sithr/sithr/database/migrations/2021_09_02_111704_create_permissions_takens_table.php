<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTakensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions_takens', function (Blueprint $table) {
            $table->id();
            $table->dateTime('from');
            $table->dateTime('to');
            $table->string('type')->default("ظرف شخصي");
            $table->string('status')->default("pending");
            $table->text('reason')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('accepted_by');
            $table->index('accepted_by');
            $table->foreign('accepted_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('permissions_takens');
    }
}
