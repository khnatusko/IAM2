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
                <div class="mb-auto p-1">
                    <h5 class="text-light"><i class="fas fa-university text-secondary"></i> IAM2 Projekt </h5>
                </div>
                
                <div class="mb-auto col-5">
                    <nav class="nav nav-pills justify-content-between">
                        <a class="nav-link text-white px-5" href="#">Lista kursów</a>
                        <a class="nav-link text-white px-5" href="#">Dodaj nowy kurs</a>
                      </nav>
                </div>

                <div class="mb-auto p-1">
                    <button class="btn btn-secondary btn-sm text-light" href="#"><b>Wyloguj</b></button>
                </div>
            </div>    
        </div>
        
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
                    <div class="col-10 mx-auto">
                        <label>Ocena końcowa</label>
                        <input type="number" name="ocenak" class="form-control"/>
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
                              <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value="id"></th>
                                <td>Anna</td>
                                <td>Nowak</td>
                                <td>III</td>
                                <td>Informatyka</td>
                                <td>Inżynieria Oprogramowania</td>
                              </tr>
                              <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value="id"></th>
                                <td>Jan</td>
                                <td>Kowalski</td>
                                <td>IV</td>
                                <td>Informatyka</td>
                                <td>Projektowanie Aplikacji Webowych</td>
                              </tr>
                              <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value="id"></th>
                                <td>Tomasz</td>
                                <td>Zetski</td>
                                <td>II</td>
                                <td>Informatyka</td>
                                <td> - </td>
                              </tr>
                              <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value="id"></th>
                                <td>Maria</td>
                                <td>Bąkowa</td>
                                <td>I</td>
                                <td>Informatyka</td>
                                <td> - </td>
                              </tr>
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
        
	</body>
</html>