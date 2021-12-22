

@extends('dashboard.main')


@section('container')
    


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">All Users</h1>
  </div>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">name</th>
          <th scope="col">username</th>
          <th scope="col">email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          
          @foreach ($users as $user)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->username }}</td>
          <td>{{ $user->email }}</td>
          <td>
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