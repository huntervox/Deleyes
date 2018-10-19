<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_serviciosEmpresa', function (Blueprint $table) {
            $table->increments('PK_id');
            $table->string('nombreEmpresa');
            $table->string('tipoEmpresa');
            $table->integer('numAccionistas');
            $table->bigInteger('capital');
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
        Schema::dropIfExists('tbl_serviciosEmpresa');
    }
}
