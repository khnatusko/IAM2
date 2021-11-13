@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Uczniowie') }}</div>
                <div class="card-body">
                    <form method="post" >
                        @csrf
                        <div class="form-group">
                            <label>Imie</label>
                            <input type="text" name="Imie" class="form-control"/>
                        </div>  
                        <div class="form-group">
                            <label>Nazwisko</label>
                            <input type="text" name="Nazwisko" class="form-control"/>
                        </div>  
                        
                        <div class="form-group">
                            <label><strong>Wybierz kurs :</strong></label><br/>
                            <select name="Kurs_idKurs" id="Kurs_idKurs" class="form control">
                                
                                @foreach ($kursy as  $kurs)
                                    <option value="{{ $kurs->idKurs }}">{{ $kurs->Nazwa }}</option>
                                @endforeach
                                
                            </select>
                            
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