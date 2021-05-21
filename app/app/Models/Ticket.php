<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_cliebte',
        'apellido_cliente',
        'direccion',
        'telefono',
        'problema_expuesto',
        'solucion_brindada'
    ];

    public function cliente()
    {
        return $this->belongsTo(GestionCliente::class,'gestionCli_id');
    }

    public function gestion(){
        return $this->hasMany(Gestion::class);
    }
}
