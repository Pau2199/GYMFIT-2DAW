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
            $table->bigIncrements('id');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',100);
            $table->string('nif',100);
            $table->rememberToken();
            $table->timestamps();
            $table->string('name',100);
            $table->string('email',100);
            $table->string('firts_surname',100);
            $table->string('second_surname',100);
            $table->string('role',100);
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
