<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Empresa;
use App\Credito;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "tbl_usuarios";
    protected $primaryKey = "PK_id";

    protected $fillable = [
        'nombre', 'tipoDocumento','documento','email','telefono','role', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function empresas(){
        return $this->HasMany(Empresa::class, 'FK_UsuarioId','PK_id');
    }

    public function creditos(){
        return $this->HasMany(Credito::class, 'FK_UsuarioId','PK_id');
    }
}
