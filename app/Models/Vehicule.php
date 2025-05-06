<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'image',
        'prix',
    ];

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
