@extends('header.userheader')
@section('userheader')
<style>
  body {
    background-color: #00665F;
    /* background-image: url("./img/organic.png"); */
    height: auto;
    width: 100%;
    background-size: cover;
  }
</style>

<body>
  @foreach($welcome as $item)
  <h1 style="position: relative; top:300px; font-weight:bold;color:black; text-shadow:1px 1px 1px white;">
    <marquee direction="right" scrollamount="20">{{$item->name}}</marquee>
  </h1>

  <h3 style="position: relative; top:300px; font-weight:bold; color:red; text-shadow:1px 1px 1px black;">{{$item->description}}
    @endforeach
    @endsection
    <div class="card text-center" style="background-color: black; position:absolute; top:500px; width:100%;">
      <!-- <div class="card-header">
    Featured
  </div> -->
      <div class="card-body">
        <h5 class="card-title" style="color: white;">@purbeli product</h5>
        <p class="card-text" style="color: white;">Come and get shoe us.</p>
        <a href="{{url('/home')}}" class="btn btn-primary">Go to home</a>
      </div>
      <!-- <div class="card-footer text-muted">
    2 days ago
  </div> -->
    </div>
</body>