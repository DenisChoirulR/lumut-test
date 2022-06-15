@extends('layouts/nav')

@section('konten')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Form Categories</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      @if (isset($akun))
      <form class="forms-sample" action="{{route('akun.update', $akun)}}" method="post">
      	{{ csrf_field() }}
        <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name" isset($akun) ? value="{{$akun->name}}" : '' >
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Type</label>
          	<select class="form-control form-control-sm" id="exampleFormControlSelect3" name="role">
	          <option value="admin" {{$akun->role}} == "admin" ? 'selected' : ''>Admin</option>
	          <option value="author" {{$akun->role}} == "author" ? 'selected' : ''>Author</option>
	        </select>
        </div>
        <button type="submit" class="btn btn-primary mr-2">Save</button>
        <a href="{{ route('akun.index') }}" class="btn btn-light">Cancel</button>
      </form>
      @else
      <form class="forms-sample" action="{{route('akun.store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Username</label>
          <input type="text" name="username" class="form-control" id="exampleInputName1" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputName1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Type</label>
            <select class="form-control form-control-sm" id="exampleFormControlSelect3" name="role">
            <option value="admin">Admin</option>
            <option value="author">Author</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary mr-2">Save</button>
        <a href="{{ route('akun.index') }}" class="btn btn-light">Cancel</button>
      </form>
      @endif
    </div>
  </div>
</div>
<!-- content-wrapper ends -->
@endsection
