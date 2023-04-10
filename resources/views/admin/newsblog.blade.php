@extends('admin.adminnav')
@section('adminav')
@endsection

<style>
    .container {

        position: relative;
        top: 100px;
    }

    .actualform {
        /* border: 2px solid black; */
        height: auto;
        /* box-shadow: 3px 2px 2px 3px black; */
    }

    .description {
        /* border: 2px solid black; */
        /* box-shadow: 2px 2px 2px 2px black; */
        height: auto;
    }

    body {
        background: black;
        color: white;
    }

    form input {
        box-shadow: 2px 2px 2px 2px black;
        outline: none;
    }

    form label {
        font-weight: bold;
        color: white;
        text-shadow: 1px 1px 1px black;
    }

    form button {
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
                <h1 style="color: yellow; text-shadow: 1px 1px 1px black;"><u>Fill up the form to update news letter sign in</h1></u>
                <p>you can update all the home components that you want to update and want to show in the news letter-signin,
                    you can change the product of the page as anytime you want to, you can update edit and delete the
                    necessary components as your wish.
                </p>
                <!-- table for edit update and delete  -->
                <table class="table table-borderless table-dark table-sm" style=" width:100%; box-shadow: 2px 2px 2px 2px black;">

                    <thead>
                        <tr>

                            <th scope="col">Id</th>
                            <th scope="col">P. Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Discount</th>
                            <th scope="col">Product</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>


                        </tr>

                    </thead>
                    @if(session('status'))
                    <h6 style="color:white; background:red; width:100%;">{{session('status')}}</h6>
                    @endif

                    <tbody>
                        @foreach($newsletter as $item)
                        <tr>

                            <td>{{$item->id}}</td>
                            <td>{{$item->productname}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->discount}}</td>
                            <td style="border-radius: 50en;"><img src="{{asset('uploads/newsletter/' .$item->image)}}" width="30px;"></td>
                            <td><a href="{{url('edit-news/'.$item->id)}}"><i class="fa fa-edit" style="font-size:25px;color:yellow;"></i></a></td>
                            <td><a href="{{url('delete-news/'.$item->id)}}"><i class="fa fa-trash" style="font-size:22px;color:red;"></i></a></td>


                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 form">
                <form method="post" action="" enctype="multipart/form-data" class="actualform">
                    @csrf
                    <u>
                        <h3 style="text-shadow: 1px 1px 0px black; font-weight:bold;">Fill the form/Update news letter signin.</h3>
                    </u>
                    @if(session('status'))
                    <h6 style="color:white; background:black; width:75%;">{{session('status')}}</h6>
                    @endif
                    <label>Product page</label><br>
                    <input placeholder="Enter the name of product" style="width: 420px;" name="productname"><br>
                    <label>Product Image</label><br>
                    <input type="file" placeholder="Enter the name of product" style="width: 420px; background:gold;" name="image"><br>
                    <label>Product Description</label><br>
                    <input placeholder="say something of product" style="width: 420px;" name="description"><br>
                    <label>Product Price</label><br>
                    <input placeholder="Enter the price of product" style="width: 420px;" name="price"><br>
                    <label>Discount</label><br>
                    <input placeholder="Enter discount% to offer" style="width: 420px;" name="discount"><br><br>

                    <button type="submit" style="width: 420px; background: red; font-weight: bold;">Post the component of news letter-blog</button>
                </form>

            </div>
        </div>
    </div>

</body>



<div class="card text-center" style="background-color: black; position:absolute; top:600px; width:100%;">
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