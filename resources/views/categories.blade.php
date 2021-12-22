
 @extends('layouts.main-all')
 

 @section('content')
  
{{--  START CONTENT  --}}
 <center>
  <h2 class="tittle mb-5" style="margin-top: 30px;">APLIKASI PENUGASAN</h2>
</center>
  <!-- Card BAR -->
  

    <div class="container">   
      <div class="row">

        @foreach ($categories as $post)
        <div class="col mb-4 d-grid">
     
          <a href="/categories/{{ $post->slug }}">   
      <div class="card" style="width: 18rem; background-color: rgb(210, 235, 215)">
        <img src="https://source.unsplash.com/500x400?{{ $post->img_category }}" class="card-img-top" alt="{{ $post->img_category }}">
        <div class="card-body text-center">
          <a href="/categories/{{ $post->slug }}" class="btn btn-success">{{ $post->name }}</a>
        </div>
      </div>
    </a>
       
</div>
@endforeach 
</div>
</div>


  {{--  <div class="container">
    
    <div class="row">
        @foreach ($categories as $post)
            <ul>
                <li>
                    <h2><a href="/categories/{{ $post->slug }}">{{ $post->name }}</a></h2>
                </li>
            </ul>
        @endforeach
    </div>  --}}
   
  <!-- END Card BAR -->
  {{--  CONTENT BODY  --}}
  {{--  END CONTENT BODY  --}}
  {{--  END CONTENT  --}}
     @endsection