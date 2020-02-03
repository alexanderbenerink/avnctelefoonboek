<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TelefoonBoek extends Model
{
    protected $fillable = 
    [
        'id',
        'voornaam',
        'achternaam',
        'telefoonnummer'
    ];

    public $timestamps = false;
}

