<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicule_id',
        'email',
        'nom_prenom',
        'addresse',
        'date_retour',
    ];

    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class);
    }
}
