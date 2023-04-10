<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
    .container {

        position: relative;
        top: 100px;
    }

    .actualform {
        border: 2px solid black;
        height: auto;
    }

    .description {
        border: 2px solid black;
        height: auto;
    }

   
</style>
</head>

<body style="background: #999987; color:black;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 description">
                <h1><u>Fill up the form to update news letter sign in</h1></u>
                <p>you can update all the home components that you want to update and want to show in the news letter-signin,
                    you can change the product of the page as anytime you want to, you can update edit and delete the
                    necessary components as your wish.
                </p>
                <!-- table for edit update and delete  -->

            </div>
            <div class="col-sm-6 form">
                <form method="post" action="{{url('update-news/'.$news->id)}}" enctype="multipart/form-data" class="actualform">
                    @csrf
                    @method('PUT')
                    <u>
                        <h3>Fill the form/Update news letter signin.</h3>
                    </u>
                    @if(session('status'))
                    <h6 style="color:white; background:black; width:250px;">{{session('status')}}</h6>
                    @endif
                    <label>Product page</label><br>
                    <input placeholder="Enter the name of product" style="width: 420px;" name="productname" value="{{$news->productname}}"><br>
                    <label>Product Image</label><br>
                    <input type="file" placeholder="Enter the name of product" style="width: 420px;" name="image"><br>
                    <img src="{{asset('uploads/newsletter/' .$news->image)}}" width="70px" height="70px" alt=""><br>
                    <label>Product Description</label><br>
                    <input placeholder="say something of product" style="width: 420px;" name="description" value="{{$news->description}}"><br>
                    <label>Product Price</label><br>
                    <input placeholder="Enter the price of product" style="width: 420px;" name="price" value="{{$news->price}}"><br>
                    <label>Discount</label><br>
                    <input placeholder="Enter discount% to offer" style="width: 420px;" name="discount" value="{{$news->discount}}"><br>

                    <button type="submit" style="width: 420px; background: red; font-weight: bold;">Update news letter-blog</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>



<div class="card text-center" style="background-color: black; position:absolute; top:600px; width:100%;">
    <!-- <div class="card-header">
    Featured
  </div> -->
    <div class="card-body">
        <h5 class="card-title" style="color: white;">@purbeli product</h5>
        <p class="card-text" style="color: white;">Come and get shoe us.</p>
        <a href="{{url('/newsblog')}}" class="btn btn-primary">Go back</a>
    </div>
    <!-- <div class="card-footer text-muted">
    2 days ago
  </div> -->
</div>