<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Uczniowie;

class Kurs extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'idKurs';
    protected $fillable = ['idKurs','Nazwa','Data','Ocena_końcowa','Nauczyciele_idNauczyciele'];
    protected $table = 'kurs';


    public function uczniowie()
    {
            return $this->belongsToMany(Uczniowie::class,'Uczniowie_has_Kurs');
    }
}
