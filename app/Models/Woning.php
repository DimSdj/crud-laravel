<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Woning extends Model
{
    protected $fillable = [
        'naam',
        'beschrijving',
        'oppervlakte_m2',
        'huur_per_week'
    ];
    protected $table = 'woning';
    use HasFactory;
}
