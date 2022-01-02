@extends('layouts.main-all')
 

@section('content')

        <div class="container mt-5 border-bottom pb-4">
          <h1 class=" border-bottom pb-4">{{ $posting->title }}</h1>
          <p>to : {{ $posting->categories->name ?? 'none' }}</p>
          <p>Start {{ $posting->datestart }} Deadline {{ $posting->dateend}}</p>
          <p>{!! $posting->deskripsi !!}</p>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#report">
            Input Pekerjaan
          </button>
          @include('partials.modal-report')
</article>
@endsection

  