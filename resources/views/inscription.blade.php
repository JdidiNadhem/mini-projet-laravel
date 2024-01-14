@extends('Layout.app')
@section('content')
    <!-- END nav -->
    
    <main>
    <section id="dates-list">
        <div class="row mb-5">
            <div class="col-12" id="line-title">
                <h3>Inscription</h3>
            </div>
        </div>
        <div class="col-lg-2 col"></div>
          <div class="col-lg-4 col-md-6 mt-0 mt-md-5">
		  <form action="{{ route('confirmation') }}" method="post" class="request-form ftco-animate">
    @csrf
    <h2>Join Conference</h2>

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Enter your Name" name="name">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Enter your Email" name="email">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" placeholder="Enter your Password" name="password">
    </div>

    <div class="form-group">
        <div class="checkbox">
            <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
        </div>
    </div>
    
    <div class="form-group">
        <input type="submit" value="Join now" class="btn btn-primary py-3 px-4">
    </div>
</form>

          </div>
        </div>
        </main><!-- End #main -->

    @endsection

