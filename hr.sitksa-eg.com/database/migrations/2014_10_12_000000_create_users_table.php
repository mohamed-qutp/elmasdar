<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->bigInteger('national_id')->nullable();
            $table->string('phone_number')->unique();
            $table->string('gender')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('department_id');
            $table->string('auth')->default('regular');
            $table->integer('permission')->default(2);
            $table->integer('have_permissions')->default(1);
            $table->double('vacations',2)->default(21);
            $table->integer('have_vacations')->default(1);
            $table->integer('status')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
