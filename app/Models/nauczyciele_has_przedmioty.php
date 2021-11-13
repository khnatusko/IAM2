<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nauczyciele_has_przedmioty extends Model
{
    public $table = 'nauczyciele_has_przedmioty';

    protected $fillable = [
        'Nauczyciele_idNauczyciele', 'Przedmioty_idPrzedmioty'
    ];
}
