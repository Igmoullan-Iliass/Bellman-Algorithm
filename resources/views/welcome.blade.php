<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    {{-- <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    {{-- <link rel="{{asset(css/css/bootstrap.min.css)}}"  rel="stylesheet"> --}}
    {{-- {!! HTML::style('css/css/') !!} --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>HOME </title>
    <style>
      .shadow-blue { text-shadow: 2px 2px 5px rgb(40, 40, 199);}

    </style>

</head>

<body>

    <!-- Navbar -->


    <div class="container ">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <h2 class="shadow-blue" style=" font-family: 'Brush Script MT', cursive;font-size: 40px; "> chemins</h2>
        </a>


        
      </header>
    </div>

    <!-- main  -->
    <main class="container-fluid " >

      <!-- main 1 -->
      <div class="bg-dark text-secondary px-4 py-5 text-center">
        <div class="py-5">
          <h1 class="display-5 fw-bold text-white shadow-blue " style=" font-family: 'Brush Script MT', cursive; " >algorithme de bellman-ford</h1>
          <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">Problèmatique de plus court chemin.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
              <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold rounded-pill" ><a style="text-decoration: none;" href="{{route('bellman-ford.index')}}">utiliser l'algorithme </button>
                {{-- modale pour Forme prise de rendez vous  --}}
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title " id="staticBackdropLabel"> </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                   
                    <div class="alert alert-danger" role="alert">
                      <ul>
              <li></li>
              </ul>
</div>

                    
                    <div class="modal-footer col-md-12 text-center ">
                      {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                    </div>
                  </div>
                </div>
              </div>

              {{-- fin pour fomr  --}}
            </div>
          </div>
        </div>
      </div>
      
     
    



</body>
</html>
