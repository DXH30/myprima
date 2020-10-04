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
        Schema::create('groups', function(Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('departments', function(Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('deptauth')->nullable();
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('deptid');
            $table->foreign('deptid')->references('id')->on('departments')->onUpdate('cascade');
            $table->unsignedBigInteger('groupid')->nullable();
            $table->foreign('groupid')->references('id')->on('groups')->onUpdate('cascade');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('deptauth'); // Berisi array dept yang bisa di balas
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
        Schema::dropIfExists('departments');
        Schema::dropIfExists('users');
    }
}
