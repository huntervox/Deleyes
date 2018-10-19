<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
    protected $primaryKey = "PK_id";
    protected $table = "tbl_servicioscredito";
    protected $fillable = ['suceso','fecha','soporte','departamento','ciudad','FK_UsuarioId'];
    protected $hidden = ['created_at', 'updated_at'];

    public function usuarios()
    {
        return $this->belongsTo(User::class, 'FK_usuarioId', 'PK_id');
    }
}
