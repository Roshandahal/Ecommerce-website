@extends('admin.adminnav')
@section('adminav')
@endsection

<style>
    .container {
        position: relative;
        top: 100px;
    }

    /* .form {
        border: 2px solid black;
        box-shadow: 2px 2px 2px 2px black;
    } */

    /* .description {
        border: 2px solid black;
       
    } */

    form input{
        box-shadow: 1px 1px 1px 1px black;
        outline: none;
        background: yellow;
    }
    form textarea{
        box-shadow: 1px 1px 1px 1px black;
        outline: none;
    }
    form label{
        font-weight: bold;
        color: white;
        text-shadow: 1px 1px 1px black;
    }
    form button{
        font-weight: bold;
        color: white;
        text-shadow: 1px 1px 1px black;
        box-shadow: 2px 2px 2px 2px black;
    }
</style>
</head>

<body style="background:#01778E; color:black;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 description">
                <h1><u>Fill up the form to update home page</h1></u>
                <p>you can update all the home components that you want to update and want to show in the home page,
                    you can change the name and slogan of the page as anytime you want to, you can update edit and delete the
                    necessary components as your wish.
                </p>

                <!-- table for edit update and delete  -->
                <table class="table table-borderless table-dark" style=" width:100%;  box-shadow: 2px 2px 2px 2px black;">
                    <thead>
                        <tr>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($welcome as $item)
                        <tr>

                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->description}}</td>
                            <td><a href="{{url('edit-home/'.$item->id)}}" ><i class="fa fa-edit" style="font-size:25px;color:yellow;"></a></td>
                            <td><a href="{{url('delete-home/'.$item->id)}}"><i class="fa fa-trash" style="font-size:22px;color:red;"></a></td>


                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 form">
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    @if(session('status'))
                    <h6 style="color:white; background:red; width:80%;">{{session('status')}}</h6>
                    @endif
                    <u>
                        <h3>Fill the form/Update the home as you want.</h3>
                    </u>
                    <label>Name and slogan of the page</label><br>
                    <input placeholder="Enter name and slogan" style="width: 420px;" name="name"><br>
                    <label>Description of the page</label><br>
                    <textarea placeholder="Enter the description you want to show in the home" style="width: 420px; height:150px" name="description"></textarea>
                    <br><br>
                    <button type="submit" style="width: 420px; background: red; font-weight: bold;">Post the component</button>
                </form>
            </div>
        </div>
    </div>
</body>

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