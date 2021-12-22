

@extends('dashboard.main')


@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Make a post</h1>
  </div>
  <div class="row">
    <div class="col-lg-8">
      <form method="post" action="/dashboard/categories">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-4">
          <label for="slug" class="form-label">slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required autofocus value="{{ old('slug') }}">
          @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-4">
          <label for="img_category" class="form-label">img_category</label>
          <input type="text" class="form-control @error('img_category') is-invalid @enderror" id="img_category" name="img_category" required autofocus value="{{ old('img_category') }}">
          @error('img_category')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary" style="width:200px;">Submit</button>
        </div>
      
      </form>
    </div>
  
  {{-- <div class="table-responsive">
  </div>
  <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}
  {{--  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
      fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
  </script>  --}}

@endsection