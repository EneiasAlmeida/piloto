<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    // Definindo que a chave primária é 'code' e não é incremental
    protected $primaryKey = 'code';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'code',
        'name',
        'location',
        'description',
        'startDate',
        'endDate',
    ];

    // Gera UUID automaticamente no momento da criação
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->code)) {
                $model->code = (string) Str::uuid();
            }
        });
    }
}
