@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h3>List Posts</h3>
		</div>

		<div class="col-sm-2">
			<a class="btn btn-sm btn-success" href="{{route('post.create')}}">
			Create New Post</a>
		</div>
   </div>

   @if($message = Session::get('success'))
   <div class="alert alert-success">
   	<p>{{ $message }}</p>
   </div>
   @endif
   <table class="table table-hover table-sm">
   	<tr>
   		<th width="50px"><b>No.</b></th>
		<th width="100px"><b>Title</b></th>
		<th width="300px"><b>Body</b></th>   
   		<th width="300px">Action</th>
   	</tr>
   	@foreach ($posts as $post)
   	<tr>
   		<td><b>{{++$i}}.</b></td>
   		<td>{{$post->title}}</td>
   		<td>{{$post->body}}</td>
   		<td>
            <form action="{{ route('post.destroy', $post->id)}}" method="post">                                                                                                          
   			<a class="btn btn-sm btn-success" href="{{route('post.show', $post->id)}}">Show</a>
   			<a class="btn btn-sm btn-warning" href="{{route('post.edit', $post->id)}}">Edit</a>
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit">Delete</button>
            </form>

   		</td>
   	</tr>
   	@endforeach
   </table>
   
</div>
@endsection