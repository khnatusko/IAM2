<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nauczyciele;
use App\Models\Przedmioty;
use Illuminate\Support\Facades\Route;

class PrzedmiotyController extends Controller
{

    public function createPrzedmioty(Request $request){
        $przedmiot = Przedmioty::create([
            'Nazwa'                           => $request->name,
            'Nauczyciele_idNauczyciele'       => $request->Nauczyciele_idNauczyciele,          
        ]);

        $nauczyciele = $request->Nauczyciele_idNauczyciele;
        $przedmiot->nauczyciel()->attach($nauczyciele);

        return response()->json([
            'success' => true,
            'status_code'=>200,
            'message' => 'Przedmiot stworzony'
        ]);
    }
    
    public function getNauczyciel()
    {
        $nauczyciele = Nauczyciele::select('idNauczyciele','name','lastname')->get();
        return view('przedmioty',compact('nauczyciele'));
    }
}
