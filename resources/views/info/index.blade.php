@extends('layouts.main')

@section('content')

  <main class="main d-flex flex-row justify-content-center">
    <div class="container">
      <div class="row">

        {{-- Create all buttons with label, using array $buttons --}}
        @foreach($buttons as $button)
        <a href="info" class="btn btn-secondary col-5 m-3">{{ $button }}</a>
        @endforeach

      </div>
    </div>
  </main>

@endsection
