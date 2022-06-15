@extends('layouts/nav')

@section('konten')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-9 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Manage Akun</h3>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
	  	<a href="{{ route('akun.create') }}" class="btn btn-primary">Add Akun</a>
	  </div>
  </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
      	@if ($akuns->count() > 0)
	        <table class="table table-striped">
	          <thead>
	            <tr>
	              <th>Name</th>
	              <th>Username</th>
	              <th>Role</th>
	            </tr>
	          </thead>
	          <tbody>
		          	@foreach ($akuns as $key => $akun)
		            <tr>
		              <td>{{$akun->name}}</td>
		               <td>{{$akun->username}}</td>
		                <td>{{$akun->role}}</td>
		              <td width="40">
		              	<a href="{{route('akun.edit', $akun->id)}}" class="btn btn-outline-warning btn-fw">Edit</a>
		              	<a href="{{route('akun.destroy', $akun->id)}}" class="btn btn-outline-danger btn-fw">Delete</a>
		              </td>
		            </tr>
		            @endforeach
	          </tbody>
	        </table>
	      @else
	      <table class="table table-striped">
	      	<thead>
	        	<tr>
	            <td><center>No data found</center></td>
	          </tr>
	        </thead>
        </table>
        @endif
      </div>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->
@endsection
