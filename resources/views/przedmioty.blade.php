@extends('layouts.template')

@section('content')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Przedmioty') }}</div>
                <div class="card-body">
                    <form method="post" >
                        @csrf
                        <div class="form-group">
                            <label>Nazwa</label>
                            <input type="text" name="name" class="form-control"/>
                        </div>  
                        
                        <div class="col-10 mx-auto p-2">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                              <div class="col-3">
                                <label for="list" class="form-label">Dodaj nauczyciela</label>
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
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($nauczyciele as $nauczyciel)
                                  <tr>
                                    <th scope="row"><input class="form-check-input" name="Nauczyciele_idNauczyciele[]" type="checkbox" value="{{ $nauczyciel->idNauczyciele }}"></th>
                                    <td>{{ $nauczyciel->name }}</td>
                                    <td>{{ $nauczyciel->lastname }}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  @endforeach
    
                                </tbody>
                              </table>
                        </div>
                        
                        <div class="text-center" style="margin-top: 10px;">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    
</script>
@endsection