@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Post Details</h3>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<strong>Title:</strong>{{$post->title}}
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<strong>Body:</strong>{{$post->body}}
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<a href="{{route('post.index')}}" class="btn btn-sm btn-success">Back</a>
		
	</div>
</div>
@endsection