@extends('Layout.app')
@section('content')
<!-- END nav -->
<main>
  <section id="dates-list">
    <div class="row mb-5">
      <div class="col-12" id="line-title">
        <h3>Keynotes</h3>
      </div>
    </div>
    <div class="container">
      <div class="row">
        @foreach($keynotes as $keynote)
        <div class="col-lg-3 py-5 px-4 mb-5">
          <img src="{{ $keynote->image }}" alt="" style="width: 100%;">
        </div>

        <div class="col-lg-3 text-start mb-5">
          <h4 class="blue-color">{{ $keynote->firstname }} {{ $keynote->lastname }}</h4>

          <p>
            {{ $keynote->description }}
          </p>

          website: <a class="text-decoration-underline" href="{{ $keynote->website }}" target="_blank">{{
            $keynote->website }}</a>
        </div>
        @endforeach
      </div>
    </div>
  </section>
</main><!-- End #main -->
@endsection