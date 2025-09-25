<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * Campos que podem ser preenchidos em massa (mass assignment)
     */
  

    protected $fillable = [
        'name',
        'location',
        'description',
        'startDate',
        'endDate',
    ];
}
    /**
     * Se tua tabela tiver outro nome diferente de "events",
     * descomenta a linha abaixo e ajusta o nome.
     */
    // protected $table = 'meus_eventos';

