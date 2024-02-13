<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacationsTakensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 
        Schema::create('vacations_takens', function (Blueprint $table) {
            $table->id();
            $table->text('reason')->nullable();
            $table->double('number_of_days', 2);
            $table->date('date_from');
            $table->date('date_to');
            $table->string('type');
            $table->string('status')->default("pending");
            $table->unsignedBigInteger('user_id');
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('accepted_by_substitute_employee')->nullable();
            $table->index('accepted_by_substitute_employee');
            $table->foreign('accepted_by_substitute_employee')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('accepted_by')->nullable();
            $table->index('accepted_by');
            $table->foreign('accepted_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('back_up_user');
            $table->index('back_up_user');
            $table->foreign('back_up_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('vacations_takens');
    }
}
