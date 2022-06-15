@extends('layouts/nav')

@section('konten')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Welcome {{ ucfirst(Auth::user()->name) }}</h3>
          <h6 class="font-weight-normal mb-0">Have a nice day! Here's a summary of your Financial Records</span></h6>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- content-wrapper ends -->
@endsection
