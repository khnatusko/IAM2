<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Nauczyciele;

class Przedmioty extends Model
{
    use HasFactory;

    
    public $timestamps = false;
    protected $primaryKey = 'idPrzedmioty';
    protected $fillable = ['idPrzedmioty','Nazwa'];
    protected $table = 'przedmioty';


    public function nauczyciel()
    {
            return $this->belongsToMany(Nauczyciele::class,'nauczyciele_has_przedmioty');
    }
}
