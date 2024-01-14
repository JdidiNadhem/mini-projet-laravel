@extends('Layout.app')
@section('content')
<!-- END nav -->

<main>
  <section id="dates-list">
    <div class="row mb-5">
      <div class="col-12" id="line-title">
        <h3>Special Session</h3>
      </div>
    </div>
    <div class="container mb-5">
      <div class="row">
        @foreach($specialsessions as $specialsession)
        <div class="col-lg-6 mb-5">
          <div class="mb-3">
            <a href="#">
              <h4 class="titular-title gradient-horizon gradient-text ss-title mb-3">{{ $specialsession->title }}</h4>
            </a>
            <p>{{ $specialsession->description }}</p>
          </div>
          <a href="#"><button class="button button-border button-small button-rounded button-purple">Learn
              More</button></a>
        </div>
        @endforeach
      </div>
    </div>
  </section>
</main><!-- End #main -->
@endsection