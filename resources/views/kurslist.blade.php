@extends('layouts.template')

@section('content')

        
        <div class="container rounded bg-white my-3 p-3 ">
            <div class="container p-3 ">
            <h3 class="p-2">Lista kursów</h3>
                <div class="col-10 mx-auto p-3">
                    <div class="input-group flex-nowrap col-10 mx-auto">
                        <input type="text" class="form-control" placeholder="Wyszukaj...">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>            
                </div>
                <div class="col-10 mx-auto p-2">
                    <table class="table table-striped" id="list">
                        <thead>
                            <tr>
                            <th scope="col">ID kursu</th>
                            <th scope="col">Nazwa kursu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kursy as $kurs)
                            <tr>
                                <td>{{ $kurs->idKurs }}</td>
                                <td>{{ $kurs->Nazwa }}</td>
                                <th scope="row" style="text-align: right">
                                    <form  action="{{ route('kurslist.destroy',$kurs->idKurs) }}" method="POST">
                                    <a href="{{ url('/wiedza') }}" class="btn btn-success"><i class="fas fa-plus-circle"></i> Dodaj oceny</a>
                                    <button class="btn btn-primary"><i class="fas fa-edit"></i> Szczegóły</button>
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-secondary text-white" value="Delete" onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash"></i> Usuń</button>
                                    </form>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="bg-dark text-center p-2 fixed-bottom">
            <span class= "text-secondary p-2 small opacity-75">Created by: K.Hnatusko & K.Pałęga</span>
        </div>
@endsection