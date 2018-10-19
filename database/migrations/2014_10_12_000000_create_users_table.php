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
        Schema::create('tbl_usuarios', function (Blueprint $table) {
            $table->increments('PK_id');
            $table->string('nombre');
            $table->enum('tipoDocumento', ['TI', 'CC', 'CE'])->default('CC');
            $table->bigInteger('documento');
            $table->string('email')->unique();
            $table->bigInteger('telefono');
            $table->enum('role', ['admin', 'cliente'])->default('cliente');
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('tbl_usuarios');
    }
}
