<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tittle }}</title>
    <!-- BOOTSTRAP CDN HERE-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- END BOOTSTRAP CDN -->
    <!-- BOOTSTRAP JS CDN HERE -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- END BOOTSTRAP JS CDN -->
    <!-- BOOTRAP MANUAL -->
    <link rel="stylesheet" href="../module/css/bootstrap/bootstrap.min.css">
    <!-- END BOOTSTRAP MANUAL -->
    <!-- JS BOOTSTRAP MANUAL -->
    <script src="../module/js/bootstrap.min.js"></script>
    <!-- END JS BOOTSRAP MANUAL -->
    <!-- MANUAL CSS -->
    <link rel="stylesheet" href="../module/css/mycss/index.css">
    <!-- END MANUAL CSS -->
    <!-- FONT TAMBAHAN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <!-- END FONT TAMBAHAN -->
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <!-- END FONT AWESOME -->
    <!-- DATEPICKER -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    

    <!-- END DATEPICKER -->
</head>
<body>
   <!-- NAVIGASI BAR -->
   <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #158328;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/module/img/Logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            PT. Edvamecon Design Indonesia
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link {{ ($active == "home") ? 'active' : ''}}" href="/">Home</a>
          @auth
          <a class="nav-link {{ ($active == "task") ? 'active' : ''}}" href="/task">Task</a>
          {{--  <a class="nav-link {{ ($active == "create") ? 'active' : ''}}" href="/create">Create</a>  --}}
          <a class="nav-link {{ ($active == "categories") ? 'active' : ''}}" href="/categories">Division</a>
          <a class="nav-link {{ ($active == "report") ? 'active' : ''}}" href="/report">Report</a>
          @endauth
          
          @auth
          
           <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="fas fa-chart-line"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <form action="/logout" method="post">
             @csrf
             <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</button>
            </form>
          </ul>
        </li>
          @else
          <a class="btn px-4 nav-link {{ ($active == "report") ? 'active' : ''}}" style="background-color: rgb(31, 187, 39);" href="/login"><i class="fas fa-sign-in-alt"></i>Login</a>
          @endauth
          
        </div>
      </div>
    </div>
  </nav>
  <!-- NAVIGASI BAR END-->
 
 @yield('content')
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="../module/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
 <!-- DATE PICKER START -->
 <script type="text/javascript">
   $(function() {
     $('#datemekanikal').datepicker();
   });
 </script>
 <script type="text/javascript">
   $(function() {
     $('#endmekanikal').datepicker();
   });
 </script>
 <!-- DATEPICKER END -->
{{--  END CONTENT  --}}
</body>
</html>