<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Contacto extends Model
{
    use HasFactory;

    protected $table = 'contactos';

    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'telefono',
        'mensaje',
        'estado',
        'respuesta',
        'respondido_at',
        'uuid',
        'stock',
    ];

    protected static function booted(): void
    {
        static::creating(function ($contacto) {
            if (empty($contacto->uuid)) {
                $contacto->uuid = (string) Str::uuid();
            }
        });
    }

    protected $casts = [
        'respondido_at' => 'datetime',
    ];
}