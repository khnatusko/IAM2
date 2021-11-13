@extends('layouts.app')

@section('content')
<div class="container">
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
                        
                        <div class="form-group">
                            <label><strong>Wybierz nauczyciela :</strong></label><br/>
                            <select name="Nauczyciele_idNauczyciele" id="Nauczyciele_idNauczyciele" class="form control">
                                
                                @foreach ($nauczyciele as  $nauczyciel)
                                    <option value="{{ $nauczyciel->idNauczyciele }}">{{ $nauczyciel->name }}</option>
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