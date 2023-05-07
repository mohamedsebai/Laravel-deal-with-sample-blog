@extends('layouts.app')
@section('title', 'edit post')

@section('content')

<div class="container">


  <div class="header">
    <h2 class="text-center fw-bold text-uppercase mt-3 mb-4">Edit post</h2>
    <hr>
  </div>


    <div class="row">
      <div class="col-lg-3 col-md-3 mt-5 mb-2"></div>


      <div class="col-lg-6 col-md-6 mt-5 mb-2">

        <form method="POST" action="{{route('blog.update', $post->id)}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group mb-3 mt-1">
            <label for="title-post">Title</label>
            <input type="text" class="form-control" id="title-post" placeholder="Title" name="title" value="{{$post->title}}">
            @error('title')
              <div class="px-1 py-1 mt-2 alert alert-danger">
                {{$message}}
              </div>
            @enderror
          </div>
          <div class="form-group mb-3 mt-1">
            <label for="description-post">Description</label>
            <textarea type="text" class="form-control" id="description-post" rows="8" cols="80" name="description">{{$post->description}}</textarea>
            @error('description')
              <div class="px-1 py-1 mt-2 alert alert-danger">
                {{$message}}
              </div>
            @enderror
          </div>

          <div class="custom-file">
            <label class="d-block mb-2 mt-3 custom-file-label" for="validatedCustomFile">Choose Image for your post</label>
           <input type="file" class="custom-file-input" id="validatedCustomFile" name="image">
           <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
           @error('image')
             <div class="px-1 py-1 mt-2 alert alert-danger">
               {{$message}}
             </div>
           @enderror
         </div>

         <div class="form-group mb-3 mt-5 text-center">
           <button type="submit" class="d-inline-block w-25 btn btn-success">update</button>
         </div>

        </form>

      </div>

      <hr>
      <div class="col-lg-3 col-md-3 mt-5 mb-2"></div>
    </div>

</div>

@endsection
