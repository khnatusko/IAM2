<?php

namespace App\Http\Controllers;

use App\Models\Nauczyciele;
use Illuminate\Http\Request;

class NauczycieleController extends Controller
{
    public function getNauczyciel()
    {
        $nauczyciele = Nauczyciele::select('idNauczyciele','name', 'lastname')->get();

        return view('kurs',compact('nauczyciele'));
    }
}
