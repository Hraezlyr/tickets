<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    protected $fillable = [
        'user_id',
        'nombre_gestion'
    ];

    use HasFactory;

    public function user(){
      return $this->belongsTo(User::class);
    }

    public function cliente(){
        return $this->hasMany(GestionCliente::class);
    }

    public function ticket(){
        return $this->belongsTo(Ticket::class);
    }
}
