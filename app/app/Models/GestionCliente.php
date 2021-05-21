<?php

namespace App\Models;

use App\Http\Controllers\TicketController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GestionCliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'gestion_id',
        'atendido',
        'fecha_creacion',
        'id
        '
    ];

    public function gestiones(){
        return $this->belongsTo(Gestion::class,'gestion_id');
    }

    public function ticket(){
        return $this->hasMany(Ticket::class);
    }



}
