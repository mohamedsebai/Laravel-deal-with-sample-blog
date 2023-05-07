@extends('layouts.app')
@section('title', 'home')

@section('content')

<!-- Background image -->
<div class="bg-image bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white">
  <h1 class="mb-3">Welcom to my blog</h1>
  <p>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus praesentium
    labore accusamus sequi, voluptate debitis tenetur in deleniti possimus modi voluptatum
    neque maiores dolorem unde? Aut dolorum quod excepturi fugit.
  </p>
  <a href="#" class="btn btn-success">Start reading</a>
</div>
<!-- Background image -->

<!-- start under header -->
<div class="container">
  <div class="row">

    <div class="col-lg-6 col-md-6 mb-4">
      <div class="img-box">
        <img class="img-fluid" src="{{url('imgs/read-blog.jpg')}}" alt="">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 mb-4 d-flex justify-content-center align-items-center">
      <div class="content-box">
        <h1 class="mb-3">How to be yourself in our world !</h1>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus praesentium
          labore accusamus sequi, voluptate debitis tenetur in deleniti possimus modi voluptatum
          neque maiores dolorem unde? Aut dolorum quod excepturi fugit.
        </p>
        <a href="#" class="btn btn-success">Read more</a>
      </div>
    </div>

  </div>
</div>
<!-- end under header -->

<!-- start category -->
<div class="container">
   <h2 class="mb-5 mt-5 text-center">Our Main Categories</h2>
  <div class="row">

    <div class="col-lg-3 col-md-3 mb-4 d-flex justify-content-center align-items-center">
      <div class="category-box text-center">
        <span>First Category</span>
      </div>
    </div>

    <div class="col-lg-3 col-md-3 mb-4 d-flex justify-content-center align-items-center">
      <div class="category-box text-center">
        <span>Secend Category</span>
      </div>
    </div>

    <div class="col-lg-3 col-md-3 mb-4 d-flex justify-content-center align-items-center">
      <div class="category-box text-center">
        <span>Third Category</span>
      </div>
    </div>

    <div class="col-lg-3 col-md-3 mb-4 d-flex justify-content-center align-items-center">
      <div class="category-box text-center">
        <span>Fourth Category</span>
      </div>
    </div>



  </div>
</div>
<!-- end category -->

<!-- start recent posts  -->
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 mb-4 d-flex justify-content-center align-items-center">
      <div class="recent-post-box text-center">
        <h2 class="mb-5 mt-5">Our Recent Posts</h2>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus praesentium
          labore accusamus sequi, voluptate debitis tenetur in deleniti possimus modi voluptatum
          neque maiores dolorem unde? Aut dolorum quod excepturi fugit.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus praesentium
          labore accusamus sequi, voluptate debitis tenetur in deleniti possimus modi voluptatum
          neque maiores dolorem unde? Aut dolorum quod excepturi fugit.
        </p>
      </div>
    </div>
  </div>
</div>
<!-- end recent posts -->

<!-- start show posts  -->
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mt-5 mb-4 d-flex justify-content-center align-items-center">
      <div class="card text-white bg-danger mb-3">
        <div class="card-header text-center">
          <a href="#" class="btn btn-warning mb-1 mb-2">PHP</a>
          <a href="#" class="btn btn-warning mb-1 mb-2">Programing</a>
          <a href="#" class="btn btn-warning mb-1 mb-2">Language</a>
          <a href="#" class="btn btn-warning mb-1 mb-2">BackEnd</a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Danger card title</h5>
          <p class="card-text">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus praesentium
          labore accusamus sequi, voluptate debitis tenetur in deleniti possimus modi voluptatum
          neque maiores dolorem unde? Aut dolorum quod excepturi fugit.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus praesentium
          labore accusamus sequi, voluptate debitis tenetur in deleniti possimus modi voluptatum
          neque maiores dolorem unde? Aut dolorum quod excepturi fugit.
          </p>
          <a href="#" class="btn btn-success ">Read more</a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 mt-5 mb-4">
      <div class="img-box">
        <img class="img-fluid" src="{{url('imgs/read-blog.jpg')}}" alt="">
      </div>
    </div>
  </div>
</div>
<!-- end show posts -->
@endsection
