<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_mobil extends Model
{
    use HasFactory;
    protected $guarded = []; 

    public $incrementing = false; // karena UUID bukan auto-increment
    protected $keyType = 'string'; // karena UUID adalah string

    protected static function boot()
    {
        parent::boot();
    
        static::creating(function ($model) {
            $model->uuid = (string) \Illuminate\Support\Str::uuid();
        });
    }
    
}