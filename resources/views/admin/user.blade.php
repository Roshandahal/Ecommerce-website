@extends('admin.adminnav')
@section('adminav')
@endsection
<style>
  .container {
    position: absolute;
    top: 100px;
    width: auto;
  }
</style>


<body style="background: #8F923A; color:white;">
  <div class="container">
    <!-- table of user details starts from here  -->
    <table class="table table-borderless  table-sm table-dark" style="width: auto; box-shadow: 2px 2px 2px 2px black;">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Role</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($user as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td style="color: green; font-style:italic; font-weight:bold;">{{$item->email}}</td>
          <td>{{$item->password}}</td>
          <td style="color: red;">{{$item->usertype}}</td>
          <td><a href="{{url('edit-user/'.$item->id)}}"><i class="fa fa-edit" style="font-size:25px;color:yellow;"></a></td>
          <td><a href="{{url('delete-user/'.$item->id)}}"><i class="fa fa-trash" style="font-size:22px;color:red;"></a></td>

        </tr>
        @endforeach
      </tbody>
    </table><br><br><br><br><br><br><br>


  </div>

  <body>
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