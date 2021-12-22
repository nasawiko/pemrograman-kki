

@extends('dashboard.main')


@section('container')
    
<article>
  <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mt-4">Edit <span data-feather="edit"></a>
    <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="post">
      @method('delete')
      @csrf
      <button class="btn btn-danger mt-4" onclick="return confirm('Data akan terhapus loh?! Pikir-pikir Lagi coba :D')">Hapus<span data-feather="trash-2"></button>
      </form>
    {{-- <a href="" class="btn btn-danger mt-4">Hapus<span data-feather="trash-2"></a> --}}
    <div class="container mt-5 border-bottom pb-4">
      <h1 class=" border-bottom pb-4">{{ $post->title }}</h1>
      <p>to : {{ $post->categories->name }}</p>
      <p>Start {{ $post->datestart }} Deadline {{ $post->dateend}}</p>
      <p>{{ $post->deskripsi}}</p>
      @include('partials.modal-report')
    </div>
</article>
@endsection

