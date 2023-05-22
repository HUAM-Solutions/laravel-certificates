<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'nombre',
        'codigo',
        'curso_id',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
    
}
