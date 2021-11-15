<?php

namespace App\Http\Controllers;

use App\Models\Uczniowie;
use App\Models\Kurs;
use App\Models\Nauczyciele;
use Illuminate\Http\Request;

class UczniowieController extends Controller
{
    
    public function createUczen(Request $request){
        $uczen = Uczniowie::create([
            'Imie' => $request->Imie,
            'Nazwisko' => $request->Nazwisko,
            'rok' => $request->rok,
            'kierunek' => $request->kierunek,
            'specjalizacja' => $request->specjalizacja,
        ]);

        $kursy = $request->Kurs_idKurs;
        $uczen->kurs()->attach($kursy);

        return response()->json([
            'success' => true,
            'status_code'=>200,
            'message' => 'Uczen stworzony'
        ]);
    }


    public function getUczen()
    {
        $uczniowie = Uczniowie::select('idUczniowie','Imie', 'Nazwisko','rok','kierunek','specjalizacja')->get();

        return view('kurs',compact('uczniowie'));
    }

    public function getNauczyciel()
    {
        $nauczyciele = Nauczyciele::select('idNauczyciele','name', 'lastname')->get();

        return view('kurs',compact('nauczyciele'));
    }
}
