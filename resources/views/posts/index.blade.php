@extends('layout.master')

@section('content')


    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        My bootstap blog
      </h3>


      @include('posts.post')




      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div><!-- /.blog-main -->

@endsection

