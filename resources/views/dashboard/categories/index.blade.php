

@extends('dashboard.main')


@section('container')
    

<a href="categories/create" class="btn btn-primary mt-4">New Category</a>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Categories</h1>
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
          <th scope="col">name</th>
          <th scope="col">slug</th>
          <th scope="col">img_category</th>
        </tr>
      </thead>
      <tbody>
          
          @foreach ($categories as $category)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>{{ $category->slug }}</td>
          <td>{{ $category->img_category }}</td>
          <td>
              <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"> <span data-feather="edit"></span></a>
              <form action="/dashboard/categories/{{ $category->slug }}" class="d-inline" method="post">
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