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
                     'Nauczyciele_idNauczyciele'       => $request->Nauczyciele_idNauczyciele,
                     'Uczeniowie_idUczniowie'          => $request->Uczniowie_idUczniowie,
                    ]);

                $uczniowie = $request->Uczniowie_idUczniowie;
                $user->uczniowie()->attach($uczniowie);

                return response()->json([
                    'success' => true,
                    'status_code'=>200,
                    'message' => 'Kurs created successfully!'
                ]);
          
                
     }

     public function getKurs()
    {
        $kursy = Kurs::select('idKurs','Nazwa')->get();
        return view('kurslist',compact('kursy'));
    }

    public function destroy($idKurs)
    {
        
        
        if(Kurs::destroy($idKurs)){
            return redirect('kurslist')->with('success','Kurs deleted');
        }else{
            return redirect('kurslist')->with('error','Kurs not deleted');
        }
        
    }

    public function index()
    {
        $kursy = Kurs::select('idKurs','Nazwa')->get();
        return view('kurslist',compact('kursy'));
    }

    public function create()
    {
       return view('kurslist');
    }

    public function store()
    {
        return view('kurslist');
    }


    public function show()
    {
        return view('kurslist');
    }


    public function edit()
    {
        return view('kurslist');
    }

 
    public function update()
    {
        return view('kurslist');
    }

}

