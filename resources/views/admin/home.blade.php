@extends('admin.adminnav')
@section('adminav')
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

<body style="background:#01778E; color:black;">
  <div class="container" style="position: absolute; top:300px;">
    <h1>Admin pannel of purbeli product</h1>
    <p>Begin by developing your backend data models, administration, and APIs and adding them to the admin panel. The backend will be the primary first deliverable and will serve as a good demo. You don't need a developer to complete this task. If you've already planned out the app, you can build the entire backend in an hour or two by simply clicking in data entry.
      After you've uploaded your models, click deploy and then go to the app's Admin Panel. Remember that credentials are emailed to the app creator, but they can be changed once you access the app admin panel.</p>
  </div>
</body>
