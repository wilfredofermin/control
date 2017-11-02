<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->smallInteger('estado')->default(1);
            $table->string('email')->unique();
            $table->integer('role')->default(0); # 0 - Client | 1 - Support or Supervisor | 2 - Evaluator | 3- Admin
            $table->string('avatar')->default('default.png');
            $table->string('password');
            $table->integer('cod_empleado');
            $table->string('puesto');
            $table->string('sucursal');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
