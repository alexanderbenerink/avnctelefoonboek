<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

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

    use Sortable;
    public $sortable = ['id', 'voornaam', 'achternaam', 'telefoonnummer'];
}

