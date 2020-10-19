<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreteUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table){
        $table->increments('id');
        $table->string('meno');
        $table->string('priezvisko');
        $table->string('email');
        $table->string('heslo',60);
        $table->unsignedInteger('vek');
        $table->timestamps();
        }

        );
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
