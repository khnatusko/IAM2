<?php

namespace App\Http\Controllers;

use App\Models\Wiedza;
use App\Models\Kurs;
use Illuminate\Http\Request;

class WiedzaController extends Controller
{
    public function createWiedza(Request $request)
    {
        $user = Wiedza::create([
                     'Typ'               => $request->typ,
                     'Ocena'             => $request->ocena,
                     'Data'              => $request->data,
                     'Waga'              => $request->waga,
                     'Kurs_idKurs'       => $request->Kurs_idKurs,

                    ]);

                return response()->json([
                    'success' => true,
                    'status_code'=>200,
                    'message' => 'Wiedza created successfully!'
                ]);
     }

     public function index()
    {
        $kursy = Kurs::select('idKurs','Nazwa')->get();
        return view('wiedza',compact('kursy'));
    }
}
