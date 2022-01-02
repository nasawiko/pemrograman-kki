

@extends('dashboard.main')


@section('container')
    

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Report</h1>
  </div>
  @if(session()->has('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Division</th>
          <th scope="col">Task Title</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          
          @foreach ($report as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->categories->name }}</td>
          <td>{{ $post->$posts->title ?? 'none'}}</td>
          <td>
              <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-success"> <span data-feather="book-open"></span></a>
              <a href="#" class="badge bg-warning"> <span data-feather="edit"></span></a>
              <a href="#" class="badge bg-danger"> <span data-feather="trash-2"></span></a>
          </td>
        </tr>
        @endforeach
          
      </tbody>
    </table>
  </div>
  <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
@endsection