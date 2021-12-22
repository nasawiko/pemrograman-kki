@extends('layouts.main-all')
@section('content')
    


  {{--  START CONTENT  --}}
  <!-- JUMBOTRON TABLE -->
  <div class="jumbotron text-center" id="jbcreate">
    <div class="container" id="concontent">
      <div class="row">
        <div class="col align-self-center">
          <h1 class="display-4">EDVAMECON INDONESIA</h1>
          <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
          <div class="wrapper">
            <a class="btnwraper" data-bs-toggle="modal" data-bs-target="#formall" href="/view/task.html">POST HERE</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END JUMBOTRON TABLE -->
  <!-- FLEX CARD -->
      @include('partials.flexcard')
  <!-- END FLEX CARD -->
  <!-- MODAL-->
      @include('partials.modal')
  
  <!-- END MODAL FLEX CARD -->
  <br>
  {{--  CONTENT  --}}
  <div class="container" id="contentisi">
    <div class="row">
      <div class="row justify-content-center text-center">
        <div class="col-4">
          <br>
          <br>
          <br>
          <h5 style="text-align: left;">MEKANIKAL</h5>
          <p style="text-align: left;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quam
            similique architecto perferendis qui quia, officiis
            laboriosam in expedita hic ipsa dolor, laudantium nobis non, quae
            delectus dicta quo dolorum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium soluta,
            facilis veritatis distinctio vel, aspernatur neque quasi saepe libero
            id fuga dignissimos dicta laboriosam eos! Porro expedita numquam corporis aliquid?</p>
          <br>
          <br>
          <br>
        </div>
        <div class="col-6">
          <img src="../module/img/mekanikal.png" alt="">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="row justify-content-center text-center">
        <div class="col-6">
          <img src="../module/img/electrical.png" alt="">
        </div>
        <div class="col-4">
          <br>
          <br>
          <br>
          <h5 style="text-align: left;">ELEKTRIKAL</h5>
          <p style="text-align: left;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quam
            similique architecto perferendis qui quia, officiis
            laboriosam in expedita hic ipsa dolor, laudantium nobis non, quae
            delectus dicta quo dolorum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium soluta,
            facilis veritatis distinctio vel, aspernatur neque quasi saepe libero
            id fuga dignissimos dicta laboriosam eos! Porro expedita numquam corporis aliquid?</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="row justify-content-center text-center">
      <div class="col-4">
        <br>
        <br>
        <br>
        <h5 style="text-align: left;">HVAC</h5>
        <p style="text-align: left;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quam
          similique architecto perferendis qui quia, officiis
          laboriosam in expedita hic ipsa dolor, laudantium nobis non, quae
          delectus dicta quo dolorum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium soluta,
          facilis veritatis distinctio vel, aspernatur neque quasi saepe libero
          id fuga dignissimos dicta laboriosam eos! Porro expedita numquam corporis aliquid?</p>
          <br>
        <br>
        <br>
      </div>
      <div class="col-6">
        <img src="../module/img/HVAC.png" alt="">
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="row justify-content-center text-center">
      <div class="col-6">
        <img src="../module/img/electro.png" alt="">
      </div>
      <div class="col-4">
        <br>
        <br>
        <br>
        <h5 style="text-align: left;">ELEKTRONIKA</h5>
        <p style="text-align: left;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quam
          similique architecto perferendis qui quia, officiis
          laboriosam in expedita hic ipsa dolor, laudantium nobis non, quae
          delectus dicta quo dolorum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium soluta,
          facilis veritatis distinctio vel, aspernatur neque quasi saepe libero
          id fuga dignissimos dicta laboriosam eos! Porro expedita numquam corporis aliquid?</p>
        
      </div>
    </div>
  </div>
  </div>

  {{--  END OF CONTENT  --}}
  <br>
  <!-- FOOTER -->
      @include('partials.footer')
  <!-- END FOOTER-->
   
    @endsection