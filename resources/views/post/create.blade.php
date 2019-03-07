@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h3>Create New Post</h3>
		</div>
	</div>
</div>

@if($errors->any())
<div class="alert alert-danger">
	<strong>Whoops!</strong> There were some problems with your input.<br>
	<ul>
		@foreach($errors as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
@endif
<form action="{{route('post.store')}}" method="post">
	@csrf
	<div class="well">
	<div class="row">
		<div class="col-md-12">
			<strong>Title:</strong>
			<input type="text" name="title" class="form-control">
		</div>

		<div class="col-md-12">
			<strong>Body:</strong>
			<textarea class="form-control" name="body" rows="8" cols="80"></textarea>
		</div>
		<hr>

		<div class="col-md-12">
			<a href="{{route('post.index')}}" class="btn btn-sm btn-success">Back</a>
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
	</div>
</form>
	
</div>
@endsection