<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosCreditoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_serviciosCredito', function (Blueprint $table) {
            $table->increments('PK_id');
            $table->string('suceso');
            $table->string('fecha');
            $table->string('soporte')->nullable();
            $table->string('departamento');
            $table->string('ciudad');
            $table->integer('FK_UsuarioId')->unsigned();

            $table->foreign('FK_UsuarioId')->references('PK_id')
            ->on('tbl_usuarios')->onUpdate('cascade');

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
        Schema::dropIfExists('tbl_serviciosCredito');
    }
}
