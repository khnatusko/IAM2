<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> IAM2 </title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
		<link rel="stylesheet" href="css/main.min.css" >
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	</head>
	<body class="body">
        <div class="container-fluid bg-dark d-flex justify-content-center">
            <div class="container p-2 sticky-top d-flex flex-row justify-content-between">
                <div class="mb-auto">
                    <h5 class="text-light"><i class="fas fa-university text-secondary"></i> IAM2 Projekt </h5>
                </div>
                <div class="mb-auto">
                    @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-500 underline">Home</a>
                    @else

                        <a href="{{ route('login') }}" class="text-sm text-gray-500 underline">Login</a>
                        @if (Route::has('register'))

                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-500 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
                </div>
            </div>    
        </div>
        
        <div class="container">        
            <img class="img-fluid" src="{{URL::asset('/image/banner3.jpg')}}" >
        </div>

        <div class="container rounded bg-white my-3 d-flex flex-row p-2 ">
            <div class="col-3 p-3 container-fluid rounded bg-primary shadow-lg sidebar">
                <h3 class="p-2 text-light">Kategorie kursów</h3>
                <div class="vstack gap-2 mx-start p-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white"href="#">Kategoria #1</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link text-white"href="#">Kategoria #2</a>
                    </li>
                      
                    <li class="nav-item">
                        <a class="nav-link text-white"href="#">Kategoria #3</a>
                      </li>
                      
                    <li class="nav-item">
                        <a class="nav-link text-white"href="#">Kategoria #4</a>
                      </li>
                      
                    <li class="nav-item">
                        <a class="nav-link text-white"href="#">Kategoria #5</a>
                      </li>
                      
                    <li class="nav-item">
                        <a class="nav-link text-white"href="#">Kategoria #6</a>
                      </li>
                      
                    <li class="nav-item">
                        <a class="nav-link text-white"href="#">Kategoria #7</a>
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

        <div class="bg-dark text-center p-2">
            <span class= "text-secondary p-2 small opacity-75">Created by: K.Hnatusko & K.Pałęga</span>
        </div>
	</body>
</html>