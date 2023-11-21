<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }
    protected $fillable = [
        'nombre_completo',
        'email',
        'telefono',
        'nombre_del_curso',
    ];
}
