
 @extends('layouts.main-all')
 

 @section('content')
  
{{--  START CONTENT  --}}
 <center>
  <h2 class="tittle mb-5" style="margin-top: 30px;">Report</h2>
</center>
 
      <div class="col pb-4">
        <article class="mb-5 border-bottom pb-4">
        @foreach ($report->skip(1) as $post)
            <div class="container">
              <h2><a class="text-decoration-none text-dark" href="/posts/{{ $post->slug }}">{{ $post->tittle }}</a></h2>
              <p>Author : <a class="text-decoration-none" href="/authors/{{ $post->user->username ?? 'none'}}">{{ $post->user->name ?? 'none'}}  </a></p>
              <p> to : <a class="text-decoration-none mb-5 border-bottom pb-4" href="/categories/{{ $post->categories->name }}">{{ $post->categories->name }}</a> </p>
              <p>{{ $post->excerpt }}</p>
              <a class="text-decoration-none mb-5 border-bottom pb-4" href="/posts/{{ $post->slug }}">Readmore...</a>
              <br>
              <br>
              <br>
            </div>
        @endforeach
      </article>  
    </div>
  <div class="container d-flex justify-content-end pt-4">
   
       {{--  {{ $posts->links() }}  --}}
    
     
  </div>

   
  <!-- END SIDE BAR -->
  {{--  CONTENT BODY  --}}
  {{--  END CONTENT BODY  --}}
  {{--  END CONTENT  --}}
     @endsection