@extends('layout.master')

@section('content')
<div class="col-sm-8">
  <h1>{{$post->title}}</h1>
  <p>{{$post->body}}</p>
<hr>
  <div class="comments">
  	<ul class="list-group">
  	@foreach ($post->comments as $comment)
		<li class="list-group-item"><strong>{{$comment->created_at->diffForHumans()}} : &nbsp</strong> {{$comment->body}}</li>
  	@endforeach
  	</ul>
  </div>
  <hr>
  @include('layout.errors')
  <div class="form-group">
  		<form method="POST" action="/posts/{{$post->id}}/">
  			@csrf
  			<div class="form-group">
  				<textarea name="body" class="form-control"></textarea>
  			</div>
  			<div class="form-group">
  				<button class="btn btn-primary" type='submit'>Add a comment</button>
  			</div>
  			
  		</form>

  </div>
</div>
@endsection

