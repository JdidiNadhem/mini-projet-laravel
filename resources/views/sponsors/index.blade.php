@extends('Layout.app')
@section('content')
<!-- END nav -->



<main>
    <section id="dates-list">
        <div class="row mb-5">
            <div class="col-12" id="line-title">

                The following organizations are supporting us:
                If your organization/society/company is interested to support the JURSE 2025 event, please contact
                us at <a class="text-decoration-underline" href="mailto:dhaouisalma110@gmail.com">************</a>

            </div>
        </div>
        <div class="justify-content-center">
            <div class="row">
                @foreach($sponsors as $sponsor)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="#"><img src="{{ $sponsor->src }}" alt="{{ $sponsor->alt }}" class="img-fluid"></a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main><!-- End #main -->

@endsection