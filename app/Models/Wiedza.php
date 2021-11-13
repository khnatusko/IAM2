<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wiedza extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'idWiedza';
    protected $fillable = ['idWiedza','Typ','Ocena','Data','Waga','Kurs_idKurs'];
    protected $table = 'wiedza';
}
