<?php

namespace App\Http\Controllers;

use App\Models\Uczniowie;
use App\Models\Kurs;
use Illuminate\Http\Request;

class UczniowieController extends Controller
{
    
    public function createUczen(Request $request){
        $uczen = Uczniowie::create([
            'Imie' => $request->Imie,
            'Nazwisko' => $request->Nazwisko,
            'Kurs_idKurs' =>$request->Kurs_idKurs,
        ]);

        $kursy = $request->Kurs_idKurs;
        $uczen->kurs()->attach($kursy);

        return response()->json([
            'success' => true,
            'status_code'=>200,
            'message' => 'Uczen stworzony'
        ]);
    }

    public function index()
    {
        $kursy = Kurs::select('idKurs','Nazwa')->get();
        return view('uczniowie',compact('kursy'));
    }
}
