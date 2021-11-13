<?php

namespace App\Http\Controllers;

use App\Models\Kurs;
use App\Models\Nauczyciele;
use Illuminate\Http\Request;

class KursController extends Controller
{
    public function createKurs(Request $request)
    {
        $user = Kurs::create([
                     'Nazwa'                           => $request->Nazwa,
                     'Data'                            => $request->Data,
                     'Ocena_końcowa'                   => $request->ocenak,
                     'Nauczyciele_idNauczyciele'       => $request->Nauczyciele_idNauczyciele,

                    ]);

                return response()->json([
                    'success' => true,
                    'status_code'=>200,
                    'message' => 'Kurs created successfully!'
                ]);
     }

     public function index()
    {
        $nauczyciele = Nauczyciele::select('idNauczyciele','name')->get();
        return view('kurs',compact('nauczyciele'));
    }
}
