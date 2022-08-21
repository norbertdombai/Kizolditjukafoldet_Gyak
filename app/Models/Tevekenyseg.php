<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tevekenyseg extends Model
{
    use HasFactory;

    //TEVEKENYSEGEKHEZ TARTOZO BEJEGYZESEK

    public function bejegyzesek()
    {
        return $this->hasMany(Bejegyzes::class);
    }
}
