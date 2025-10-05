<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    public $incrementing = false; // Obrigatório para UUID
    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'location',
        'description',
        'startDate',
        'endDate',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            if (empty($event->code)) {
                $event->code = (string) Str::uuid();
            }
        });
    }
}
