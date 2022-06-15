@extends('layouts/nav')

@section('konten')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-9 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Manage Transaction</h3>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
	  	<a href="{{ route('post.create') }}" class="btn btn-primary">Add Post</a>
	  </div>
  </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
      	@if ($posts->count() > 0)
	        <table class="table table-striped">
	          <thead>
	            <tr>
	              <th>Title</th>
	              <th>Content</th>
                  <th>Date</th>
                  <th>Username</th>

	              <th></th>
	            </tr>
	          </thead>
	          <tbody>
		          	@foreach ($posts as $key => $post)
		            <tr>
		              <td>{{$post->title}}</td>
		              <td>{{$post->content}}</td>
		              <td>{{$post->date}}</td>
		              <td>{{$post->akun->username}}</td>
		              <td width="40">
		              	<a href="{{route('post.edit', $post->id)}}" class="btn btn-outline-warning btn-fw">Edit</a>
		              	<a href="{{route('post.destroy', $post->id)}}" class="btn btn-outline-danger btn-fw">Delete</a>
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
