<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kurs;

class Uczniowie extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'idUczniowie';
    protected $fillable = ['idUczniowie','Imie','Nazwisko'];
    protected $table = 'uczniowie';


    public function kurs()
    {
            return $this->belongsToMany(Kurs::class,'Uczniowie_has_Kurs');
    }
}
