<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Przedmioty;

class Nauczyciele extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $timestamps = false;
    protected $primaryKey = 'idNauczyciele';
    protected $fillable = ['idNauczyciele','name','lastname','password','email'];
    protected $table = 'nauczyciele';


    public function przedmiot()
    {
            return $this->belongsToMany(Przedmioty::class,'nauczyciele_has_przedmioty');
    }
}
