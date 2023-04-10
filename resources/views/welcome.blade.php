@extends('header.userheader')
@section('userheader')
<style>
    body{
        background-color: blue;
    }
</style>

<h1 style="position: relative; top:300px; font-weight:bold; color:black;"><marquee direction="right" scrollamount="20">Welcome to the userinterface of
Oraganic Purbali Product</marquee></h1>

<p style="position: relative; top:300px; font-weight:bold; color:black; text-shadow:1px 1px 1px black;">You can see product here, as well as you can buy the product with minimum price compare to others </p>

@endsection
<div class="card text-center" style="background-color: black; position:absolute; top:550px; width:100%;">
  <!-- <div class="card-header">
    Featured
  </div> -->
  <div class="card-body">
    <h5 class="card-title" style="color: white;">Special title treatment</h5>
    <h5 class="card-text" style="color: white;">With supporting text below as a natural lead-in to additional content.</h5>
  
  </div>
  <!-- <div class="card-footer text-muted">
    2 days ago
  </div> -->
</div>