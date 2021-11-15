@extends('layouts.template')
    @section('content') 
    <div>  
      <div class="card text-white">
        <img class="img-fluid img-gradient" >
        <div class="d-flex flex-column card-img-overlay justify-content-center align-items-center">
          <div class="mb-3">
            <h2 class="card-title">Utwórz kurs już teraz!</h2>
          </div>
          <div class="mb-3">
            <h4 class="card-text">Tysiące nauczycieli jest zadowolonych z naszych usług.</h4>
          </div>
        </div>
      </div>
        <div class="container rounded bg-white my-3 d-flex flex-row p-2 ">
            <div class="col-3 p-3 container-fluid rounded bg-primary shadow-lg sidebar">
                <h3 class="p-2 text-light">Kategorie kursów</h3>
                <div class="vstack gap-2 mx-start p-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                      <a href="{{ url('/przedmioty') }}" class="nav-link text-white">Przedmioty</a>
                    </li>
                    
                    <li class="nav-item">
                      <a href="{{ url('/wiedza') }}" class="nav-link text-white">Wiedza</a>
                    </li>
                      
                    <li class="nav-item">
                      <a href="{{ url('/uczniowie') }}" class="nav-link text-white">Uczniowie</a>
                      </li>
                      
                    <li class="nav-item">
                      <a href="{{ url('/kurs') }}" class="nav-link text-white">Kurs</a>
                      </li>
                      
                    <li class="nav-item">
                      <a href="{{ url('/kurslist') }}" class="nav-link text-white">Lista kursów</a>
                      </li>

                  </ul>
                  </div>
            </div>
            <div class="col-9 mb-auto container-fluid rounded p-3">
                <h6 class="display-6 p-2"><b>Najnowsze kursy</b></h6>
                <div class="row row-cols-1 row-cols-md-3 g-4 p-3 ">
                    <div class="col">
                      <div class="card h-100 shadow">
                        <img class="card-img-top" src="{{URL::asset('/image/art.jpg')}}" >
                        <div class="card-body">
                          @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                          <h5 class="card-title text-secondary">Plastyka</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et lectus quis ante interdum condimentum ut at arcu. Donec finibus lectus sit amet magna facilisis porta. Sed at dolor a.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Autor: x</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100 shadow">
                        <img class="card-img-top" src="{{URL::asset('/image/knitting.jpg')}}" >
                        <div class="card-body">
                          <h5 class="card-title text-secondary">Techika</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et lectus quis ante interdum condimentum ut at arcu. Donec finibus lectus sit amet magna facilisis porta. Sed at dolor a.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Autor: x</small>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col">
                        <div class="card h-100 shadow">
                          <img class="card-img-top" src="{{URL::asset('/image/web.jpg')}}" >
                          <div class="card-body">
                            <h5 class="card-title text-secondary">Web Design</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et lectus quis ante interdum condimentum ut at arcu. Donec finibus lectus sit amet magna facilisis porta. Sed at dolor a.</p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Autor: x</small>
                          </div>
                        </div>
                      </div>
                    <div class="col">
                      <div class="card h-100 shadow">
                        <img class="card-img-top" src="{{URL::asset('/image/math.jpg')}}" >
                        <div class="card-body">
                          <h5 class="card-title text-secondary">Matematyka</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et lectus quis ante interdum condimentum ut at arcu. Donec finibus lectus sit amet magna facilisis porta. Sed at dolor a.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Autor: x</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100 shadow">
                        <img class="card-img-top" src="{{URL::asset('/image/web.jpg')}}" >
                        <div class="card-body">
                          <h5 class="card-title text-secondary">Web Design</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et lectus quis ante interdum condimentum ut at arcu. Donec finibus lectus sit amet magna facilisis porta. Sed at dolor a.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Autor: x</small>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

      </div>

      @endsection