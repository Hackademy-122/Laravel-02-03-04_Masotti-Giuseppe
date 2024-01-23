<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    {{-- fs --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>BLOG VIAGGI</title>
</head>
<body>
    <x-navbar/>
    {{$slot}}

{{-- footer --}}
    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
          <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <p class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© 2024</font></font></p>
          </div>
      
          <div class="col mb-3">
            <h5>I NOSTRI SOCIAL</h5>
            <div class="row mt-4 ">
                <div class="col-12 col-md-2"><a href=""><i class="fa-brands fa-facebook icf"></i></a></div>
                <div class="col-12 col-md-2"><a href=""><i class="fa-brands fa-instagram icf"></i></a></div>
                <div class="col-12 col-md-2"><a href=""><i class="fa-brands fa-twitter icf"></i></a></i></div>
                <div class="col-12 col-md-2"><a href=""><i class="fa-brands fa-tiktok"></i></a></i></div>
            </div>
          </div>

          <div class="col mb-3">
            <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SU DI NOI</font></font></h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Caratteristiche</font></font></a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prezzi</font></font></a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Domande frequenti</font></font></a></li>
            </ul>
          </div>
      
          <div class="col mb-3">
            <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CONTATTI</font></font></h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mail</font></font></a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Collaborazioni</font></font></a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lavora con noi</font></font></a></li>
            </ul>
          </div>

          
      
          <div class="col mb-3">
            <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NEWSLETTER</font></font></h5>
            <ul class="nav flex-column">
              <li class="nav-item "><p>Iscriviti per rimanere sempre aggiornato.</p></li>
              <li class="nav-item mb-2"><input type="text"></li>
              <li class="nav-item mt-2"><a href="" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><button type="button" class="btn btn-danger  btn">Iscriviti</button></font></font></a></li>

              
            </ul>
          </div>
        </footer>
      </div>





</body>
</html>