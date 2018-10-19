<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Empresa extends Model
{
    protected $primaryKey = "PK_id";
    protected $table = "tbl_serviciosempresa";
    protected $fillable = ['nombreEmpresa','tipoEmpresa','numAccionistas','capital','departamento','ciudad','FK_UsuarioId'];
    protected $hidden = ['created_at', 'updated_at'];

    public function usuarios()
    {
        return $this->belongsTo(User::class, 'FK_usuarioId', 'PK_id');
    }
}

