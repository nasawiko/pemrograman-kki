

@extends('layouts.main-all')


@section('content')

  
      {{--  START CONTENT  --}}

      <!-- JUMBOTRON -->
      <div class="jumbotron text-center" id="jumb1">
        <img src="module/img/Logo.png" alt="">
        <br>
        <br>
        <h1 class="display-5">Selamat Datang</h1>
        <p class="lead">Edvamecon Design adalah sebuah perusahaan yang bergerak dibidang design interior dan eksterior dengan menggunakan standar yang berlaku</p>
      
        <div class="wrapper">
          <a class="btnwraper" href="/task">Lihat Tugas</a>
      </div>
    
    <!-- SVG GRADATION FOR BUTTON -->
    <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
            <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
            </filter>
        </defs>
    </svg>
    <!-- END SVG GRADATION FOR BUTTON -->
    <!-- SVG FOR LAYOUT -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,128L48,117.3C96,107,192,85,288,90.7C384,96,480,128,576,144C672,160,768,160,864,154.7C960,149,1056,139,1152,117.3C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <!-- SVG FOR LAYOUT END -->
  </div>
      <!-- JUMBOTRON END -->
    <!-- CONTENT PERTAMA -->
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>Schedule</h2>
          <hr style="width: 800px; margin: auto; border: 2px solid;">
          <br>
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body shadow rounded text-center text-dark">
              <h5 class="card-title">Lihat tugas mu disini</h5>
              <hr>
              <img src="module/img/slider2.jpg" alt="" style="width: 200px; height: 200px;">
              <p class="card-text">Berhati-hatilah saat bekerja, selalu gunakan standar K3 dilapangan</p>
              <a href="/task" class="btn btn-success">Press Here</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body shadow rounded text-center text-dark">
              <h5 class="card-title">Report</h5>
              <hr>
              <img src="module/img/slider1.jpg" alt="" style="width: 200px; height: 200px;">
              <p class="card-text">Bekerjalah dengan menggunakan standar yang tepat dan tetap berhati-hati</p>
              <a href="/report" class="btn btn-success">Press Here</a>
            </div>
          </div>
        </div>
      </div>
    </div>
   {{--  FOOTER  --}}
   @include('partials.footer')
   {{--  END FOOTER  --}}
    @endsection