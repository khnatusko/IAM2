@extends('layouts.template')

@section('content')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Wiedza') }}</div>
                <div class="card-body">
                    <form method="post" class="col-md-8 mx-auto" >
                        @csrf
                        <div class="form-group mb-2">
                            <label>Typ</label>
                            <select class="form-select form-select" id="type" name="typ">
                                <option value="null"> - </option>
                                <option value="10">Kolokwium końcowe</option>
                                <option value="3">Kolokwium</option>
                                <option value="5">Odpowiedź ustna</option>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label>Data</label>
                            <input type="date" name="data" class="form-control"/>
                        </div>  
                        <div class="form-group mb-2">
                            <label>Waga</label>
                            <input type="text" disabled name="waga" id="wage" class="form-control"/>
                        </div>
                        
                        <div class="col-12 mx-auto p-2 mb-2">

                        <table class="table" id="list">
                            <thead>
                              <tr>
                                <th scope="col">Imię</th>
                                <th scope="col">Nazwisko</th>
                                <th scope="col">Ocena</th>
                            </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Anna</td>
                                <td>Nowak</td>
                                <td>
                                        <select class="form-select form-select-sm">
                                            <option value="0" selected>Brak</option>
                                            <option value="5">5</option>
                                            <option value="4.5">4.5</option>
                                            <option value="4">4</option>
                                            <option value="3.5">3.5</option>
                                            <option value="3">3</option>
                                            <option value="2">2</option>
                                        </select>
                                    </td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                        <div class="text-center" style="margin-top: 10px;">
                        <button type="submit" class="btn btn-secondary text-white fw-bold">Zapisz</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $( "#type" ).change(function() {
        wage = $( "select option:selected" ).val();
      
        $("#wage").val(wage)
        
      console.log(wage)
    })
</script>
@endsection