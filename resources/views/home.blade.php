@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ url('/przedmioty') }}" class="text-sm text-gray-500 underline">Przedmioty</a>
                    <a href="{{ url('/wiedza') }}" class="text-sm text-gray-500 underline">Wiedza</a>
                    <a href="{{ url('/uczniowie') }}" class="text-sm text-gray-500 underline">Uczniowie</a>
                    <a href="{{ url('/kurs') }}" class="text-sm text-gray-500 underline">Kurs</a>
                    <a href="{{ url('/kurslist') }}" class="text-sm text-gray-500 underline">Lista kursów</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
