
 @extends('layouts.main-all')
 

 @section('content')
  
{{--  START CONTENT  --}}
 <center>
  <h2 class="title mb-5" style="margin-top: 30px;">{{ $task_tittle }}</h2>
</center>
 
@if ($posts->count())
<div class="container">
  <div class="row mb-3">
 <div class="col-md-6"></div>
    <div class="col-md-6">
     <form action="/task">
     <div class="input-group" >
       <input type="text" class="form-control" placeholder="Search..." value="{{ request('search') }}" name="search">
       <button class="btn btn-success" type="submit" id="search">Search</button>
     </form>
     </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="card mb-3 text-center">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->categories->img_category }}" class="card-img-top shadow-lg" alt="{{ $posts[0]->categories->img_category }}">
    <div class="card-body">
      <h5 class="card-title">{{ $posts[0]->title }}</h5>
      <p class="card-text">Author : <a class="text-decoration-none" href="/authors/{{ $posts[0]->user->username}}">{{ $posts[0]->user->name }} </a>    to : <a class="text-decoration-none" href="/categories/{{ $posts[0]->categories->slug }}">{{ $posts[0]->categories->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a class="text-decoration-none btn btn-success" href="/posts/{{ $posts[0]->slug }}">Read More</a>
    </div>
  </div>
</div>

 <div class="container">
   <div class="row">
    @foreach ($posts->skip(1) as $post)
     <div class="col-md-4">
      <div class="card">
        <div class="position-absolute" style="background-color: rgba(0, 0, 0, 0.6")><a class="text-white text-decoration-none" href="/categories/{{ $post->categories->slug }}">{{ $post->categories->name }}</a></div>
        <img src="https://source.unsplash.com/500x400?{{ $post->categories->img_category }}" class="card-img-top" alt="{{ $post->categories->img_category }}">
        <div class="card-body">
          <h5 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
          <p class="card-text">Author : <a class="text-decoration-none" href="/authors/{{ $post->user->username}}">{{ $post->user->name }}  </a></p>
          <p class="card-text">{{ $post->excerpt }}</p>
          <a class="btn btn-success" href="/posts/{{ $post->slug }}" class="Read More">Go somewhere</a>
        </div>
      </div>
     </div>
   @endforeach
   </div>
 </div>
 @else
     <h2 class="text-center">Post Not Found...</h2>
    @endif
      {{-- <div class="col pb-4">
        <article class="mb-5 border-bottom pb-4">
        @foreach ($posts->skip(1) as $post)
            <div class="container">
              <h2><a class="text-decoration-none text-dark" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
              <p>Author : <a class="text-decoration-none" href="/authors/{{ $post->user->username}}">{{ $post->user->name }}  </a></p>
              <p> to : <a class="text-decoration-none mb-5 border-bottom pb-4" href="/categories/{{ $post->categories->name }}">{{ $post->categories->name }}</a> </p>
              <p>from {{ $post->datestart }} to {{ $post->dateend }}</p>
              <p>{{ $post->excerpt }}</p>
              <a class="text-decoration-none mb-5 border-bottom pb-4" href="/posts/{{ $post->slug }}">Readmore...</a>
              <br>
              <br>
              <br>
            </div>
        @endforeach
      </article>  
    </div> --}}
  <div class="container d-flex justify-content-end pt-4">
   
       {{--  {{ $posts->links() }}  --}}
    
     
  </div>

   
  <!-- END SIDE BAR -->
  {{--  CONTENT BODY  --}}
  {{--  END CONTENT BODY  --}}
  {{--  END CONTENT  --}}
     @endsection