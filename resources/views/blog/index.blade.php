@extends('layouts.app')
@section('title', 'home blog')

@section('content')

<div class="container">


  <div class="header">
    <h2 class="text-center fw-bold text-uppercase mt-3 mb-4">Our Blog All Posts</h2>

    @if( Auth::check() )
      <a href="{{route('blog.create')}}" class="d-inline-block mb-2 btn btn-success">Add new post</a>
      @if(session()->has('message'))
        <div class="alert alert-success">
          {{session()->get('message')}}
        </div>
      @endif
    @endif

    <hr>
  </div>

  @if(isset($posts) && !empty($posts) && count($posts) > 0)

    @foreach($posts as $post)
    <div class="row">
      <div class="col-lg-6 col-md-6 mt-5 mb-2">
        <div class="img-box">
          <img class="img-fluid" src="imgs/{{$post->image_path}}" alt="">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mt-5 mb-2">
        <div class="content-box">
          <h1 class="mb-3">{{$post->title}}</h1>
          <p> {{ substr($post->description , 0 , 200) . "..."; }} </p>
          <span class="d-block mb-2 mt-2">{{$post->user->name}}</span>
          <!-- <span class="d-block mb-2 mt-2">{{ $post->updated_at }}</span> -->
          <a href="{{route('blog.show', $post->slug)}}" class="mb-2 btn btn-success">Read more</a>
        </div>
      </div>
      <hr>
    </div>
    @endforeach

    @else

    {{'There is no posts yet'}}

  @endif
</div>

@endsection
