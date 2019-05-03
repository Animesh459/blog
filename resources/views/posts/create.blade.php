@extends('layout.master')

@section('content')
<div class="col-sm-8">

	<h1>Create The Post</h1>
@include('layout.errors')
<form method="POST" action="/posts">
	{{csrf_field()}}
  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" class="form-control" id="Title"  name='title'>
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea name="body"  class="form-control" name="body"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection

