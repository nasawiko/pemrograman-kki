

@extends('dashboard.main')


@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Make a post</h1>
  </div>
  <div class="row">
    <div class="col-lg-8">
      <form method="post" action="/dashboard/posts">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">title</label>
          <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
          @error('title')
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
        </div>
        <div class="input-group date mb-4">
          {{--  <span class="input-group-text" id="inputGroup-sizing-default"></span>  --}}
          <input type="text" class="form-control" id="datestart" name="datestart" placeholder="Start Date" value="{{ old('datestart') }}">
          <span class="input-group-append">
          </span>
          {{--  <span class="input-group-text" id="inputGroup-sizing-default"></span>  --}}
          <input type="text" class="form-control" id="dateend" name="dateend" placeholder="Date Line" value="{{ old('dateend') }}">
          <span class="input-group-append">
          </span>
        </div>
        Division
        <div class="mb-3">
          <label for="categories_id" class="form-label">Division</label>
          <select class="form-select" name="categories_id" value="{{ old('categories_id') }}">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
           
          </select>
          @error('categories_id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
    
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <p class="text-danger">
                  @error('deskripsi')
                  {{ $message }} 
                  @enderror
            </p>
            <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
            <trix-editor input="deskripsi"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary" style="width:200px;">Submit</button>
      </form>
    </div>
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