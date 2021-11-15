@extends('layouts.template')

@section('content')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dodaj ucznia') }}</div>
                <div class="card-body">
                    <form method="post" class="col-md-8 mx-auto">
                        @csrf
                        <div class="form-group mb-2">
                            <label>Imie</label>
                            <input type="text" name="Imie" class="form-control"/>
                        </div>  
                        <div class="form-group mb-2">
                            <label>Nazwisko</label>
                            <input type="text" name="Nazwisko" class="form-control"/>
                        </div>  

                        
                        <div class="form-group mb-2">
                            <label>Rok</label>
                            <input type="number" name="rok" class="form-control"/>
                        </div>  
                        
                        
                        <div class="form-group mb-2">
                            <label>Kierunek</label>
                            <input type="text" name="kierunek" class="form-control"/>
                        </div>  
                        
                        
                        <div class="form-group mb-2">
                            <label>Specjalizacja</label>
                            <input type="text" name="specjalizacja" class="form-control"/>
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
    
</script>
@endsection