@extends('layouts.app')
@section('title', 'show')

@section('content')

<div class="container">


  <div class="header">
    <h2 class="text-center fw-bold text-uppercase mt-3 mb-4">{{$post->title}}</h2>
      @if(session()->has('message'))
        <div class="alert alert-success">
          {{session()->get('message')}}
        </div>
      @endif
    <hr>
  </div>

  @if(isset($post) && !empty($post))

    <div class="row">
      <div class="col-lg-12 col-md-12 mt-5 mb-2">
        <div class="img-box">
          <img class="img-fluid w-100" style="max-height: 500px;" src="../imgs/{{$post->image_path}}" alt="img">
        </div>
      </div>
      <div class="col-lg-12 col-md-12 mt-5 mb-2">
        <div class="content-box text-center">
          <h1 class="mb-3">{{$post->title}}</h1>
          <p> {{ substr($post->description , 0 , 200) . "..."; }} </p>
          <span class="d-block mb-2 mt-2">{{$post->user->name}}</span>
          <span class="d-block mb-2 mt-2">{{ $post->updated_at }}</span>
        </div>
      </div>
      <hr>
    </div>

   <!-- if isset session auth -->
   @if( Auth::check() )
     <!-- if user session auth id  === post user_id -->
       @if( ( Auth::user() && Auth::user()->id ) == $post->user_id )
          <a href="{{route('blog.edit', $post->id)}}" class="d-inline-block mb-2 btn btn-success">Edit this post</a>
          <!-- to delete something we need to use form -->
          <form action="{{route('blog.destroy', $post->id ) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" name="delete" value="delete" class="btn btn-danger mt-3 mb-3">
          </form>
        @endif
    <a href="{{route('blog.create')}}" class="d-inline-block mb-2 btn btn-success">Add new post</a>
   @endif

  @endif
</div>

@endsection
