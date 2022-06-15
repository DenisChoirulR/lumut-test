@extends('layouts/nav')

@section('konten')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Form Transactions</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      @if (isset($post))
      <form class="forms-sample" action="{{route('post.update', $post)}}" method="post">
      	{{ csrf_field() }}
        <div class="form-group">
        <div class="form-group">
          	<label for="exampleInputName1">Title</label>
          	<input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="title" isset($post) ? value="{{$post->title}}" : '' >
        </div>
        <div class="form-group">
          	<label for="exampleInputName1">Content</label>
          	<input type="text" name="content" class="form-control" id="exampleInputName1" placeholder="content" isset($post) ? value="{{$post->content}}" : '' >
        </div>
        <button type="submit" class="btn btn-primary mr-2">Save</button>
        <a href="{{ route('post.index') }}" class="btn btn-light">Cancel</button>
      </form>
      @else
      <form class="forms-sample" action="{{route('post.store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          	<label for="exampleInputName1">Title</label>
          	<input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="title"  >
        </div>
        <div class="form-group">
          	<label for="exampleInputName1">Content</label>
          	<input type="text" name="content" class="form-control" id="exampleInputName1" placeholder="content" >
        </div>
        <button type="submit" class="btn btn-primary mr-2">Save</button>
        <a href="{{ route('post.index') }}" class="btn btn-light">Cancel</button>
      </form>
      @endif
    </div>
  </div>
</div>
<!-- content-wrapper ends -->
@endsection
