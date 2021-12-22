

@extends('dashboard.main')


@section('container')
    

<a href="posts/create" class="btn btn-primary mt-4">Make a New Post </a>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
  </div>
@if(session()->has('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@elseif(session()->has('ok'))
<div class="alert alert-danger">
  {{ session('ok') }}
</div>
@elseif(session()->has('nice'))
<div class="alert alert-warning">
  {{ session('nice') }}
</div>
@endif
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Division</th>
          <th scope="col">Start Project</th>
          <th scope="col">Deadline</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          
          @foreach ($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->categories->name }}</td>
          <td>{{ $post->datestart }}</td>
          <td>{{ $post->dateend }}</td>
          <td>
              <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-success"> <span data-feather="book-open"></span></a>
              <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"> <span data-feather="edit"></span></a>
              <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="post">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Data akan terhapus loh?! Pikir-pikir Lagi coba :D')"><span data-feather="trash-2"></button>
              </form>
          </td>
        </tr>
        @endforeach
 
      </tbody>
    </table>
  </div>
  <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
@endsection