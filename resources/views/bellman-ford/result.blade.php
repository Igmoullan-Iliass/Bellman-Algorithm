


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
          <div class="col-lg-6 mx-auto">
        
</div>

                    

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<table class="table table-striped text-light ">
    <tr class="table-light">
        <th  scope="col">Sommet</th>
        <th scope="col">Distance à partir du sommet initial</th>
    </tr>
    @for ($i = 0; $i < count($dist); $i++)
        <tr >
            <td class="text-light">{{ $i }}</td>
            <td class="text-light">{{ $dist[$i] }}</td>
        </tr>
    @endfor
</table>



                  </div>
                </div>
              </div>

              {{-- fin pour fomr  --}}
            </div>
          </div>
        </div>
      </div>