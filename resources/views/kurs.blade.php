@extends('layouts.template')

@section('content')
        
        <div class="container rounded bg-white my-3 p-3 ">
            <div class="container p-3 ">
                <h3 class="p-2">Dodaj kurs</h3>
                <form class="row g-3" method="post">
                    @csrf
                    <div class="col-10 mx-auto">
                        <label for="courseName" class="form-label">Nazwa kursu</label>
                        <input type="text" name ="Nazwa" class="form-control" id="courseName" >
                    </div>
                    <div class="col-10 mx-auto">
                        <label>Data</label>
                        <input type="date" name="Data" class="form-control"/>
                    </div>
                    
                    
                    <div class="col-10 mx-auto p-2">
                      <div class="d-flex flex-row justify-content-between align-items-center">
                        <div class="col-3">
                          <label for="list" class="form-label">Dodaj nauczyciela</label>
                        </div>
                      </div>

                      <table class="table" id="list">
                          <thead>
                            <tr>
                              <th scope="col">Zaznacz</th>
                              <th scope="col">Imię</th>
                              <th scope="col">Nazwisko</th>
                              <th scope="col"></th>
                              <th scope="col"></th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            <tr>
                              <th scope="row"><input class="form-check-input" name="Nauczyciele_idNauczyciele" type="checkbox" value="{{ Auth::user()->idNauczyciele }}"></th>
                              <td>{{ Auth::user()->name }}</td>
                              <td>{{ Auth::user()->lastname }}</td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            

                          </tbody>
                        </table>
                  </div>
                    



                    
                    <div class="col-10 mx-auto p-2">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                          <div class="col-3">
                            <label for="list" class="form-label">Dodaj użytkowników</label>
                          </div>
                          <div class="col-8">
                            <div class="input-group flex-nowrap col-10 mx-auto">
                                <input type="text" class="form-control" placeholder="Wyszukaj...">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>            
                          </div>
                        </div>

                        <table class="table" id="list">
                            <thead>
                              <tr>
                                <th scope="col">Zaznacz</th>
                                <th scope="col">Imię</th>
                                <th scope="col">Nazwisko</th>
                                <th scope="col">Rok studiów</th>
                                <th scope="col">Kierunek studiów</th>
                                <th scope="col">Specjalizacja</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($uczniowie as $uczen)
                              <tr>
                                <th scope="row"><input class="form-check-input" name="Uczniowie_idUczniowie[]" type="checkbox" value="{{ $uczen->idUczniowie }}"></th>
                                <td>{{ $uczen->Imie }}</td>
                                <td>{{ $uczen->Nazwisko }}</td>
                                <td>{{ $uczen->rok }}</td>
                                <td>{{ $uczen->kierunek }}</td>
                                <td>{{ $uczen->specjalizacja }}</td>
                              </tr>
                              @endforeach

                            </tbody>
                          </table>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-secondary text-white">Utwórz kurs</button>
                    </div>
                </form>
              </div>
        </div>

        <div class="bg-dark text-center p-2 fixed-bottom">
            <span class= "text-secondary p-2 small opacity-75">Created by: K.Hnatusko & K.Pałęga</span>
        </div>

        @endsection