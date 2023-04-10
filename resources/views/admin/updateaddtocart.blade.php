@extends('admin.adminnav')
@section('adminav')
@endsection
<style>
    .container {
        position: absolute;
        top: 50px;

    }

    .firstrow {

        height: auto;
    }



    .firstformcol {
        height: auto;

        color: black;
    }

    .secondformcol {
        height: auto;

    }


    .firstformcol input {
        width: 100%;
        outline: none;
    }

    .firstformcol button {
        width: 100%;
        background-color: yellow;
    }

    /* ------------------------------------for second columm */


    .secondformcol input {
        width: 100%;
        outline: none;
    }

    .secondformcol button {
        width: 100%;
        background-color: yellow;
    }

    /* ------------------------------------------second row started */
    .secondrow {

        height: auto;
    }

    .srfc {
        height: auto;
        color: black;
    }

    .srfc input {
        width: 100%;
        outline: none;

    }

    .srfc button {
        width: 100%;
        outline: none;
        background-color: yellow;
    }
    /* ---------------------------------thirdrow------------------- */
    .thirdrow{
        height: auto;
    }
</style>

<body style="background:#01778E; color:black;">
    <div class="container">
        <div class="container-fluid">


            <div class="row firstrow">
                <div class="col-sm-6 firstformcol">

                    <h5><u>Fill up the form to post first product</u></h5>

                    <form method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <label>Name of the product</label>
                        <br>
                        <input type="text" placeholder="enter product name" name="name1">
                        <br>
                        <label>price of the product</label>
                        <br>
                        <input type="text" placeholder="product price" name="price1">
                        <br>
                        <label>Discount</label>
                        <br>
                        <input type="text" placeholder="enter discount%" name="discount1">
                        <br>
                        <label>Product image</label>
                        <br>
                        <input type="file" placeholder="image of product" name="image1">
                        <br>




                </div>
                <div class="col-sm-6 secondformcol">
                    <h5><u>Fill up the form to post second product</u></h5>


                    <label>Name of the product</label>
                    <br>
                    <input type="text" placeholder="enter product name" name="name2">
                    <br>
                    <label>price of the product</label>
                    <br>
                    <input type="text" placeholder="product price" name="price2">
                    <br>
                    <label>Discount</label>
                    <br>
                    <input type="text" placeholder="enter discount%" name="discount2">
                    <br>
                    <label>Product image</label>
                    <br>
                    <input type="file" placeholder="image of product" name="image2">
                    <br>



                </div>
            </div>
            <!-- <br><br><br><br><br><br><br> -->
            <!-- ------------------------second row starts from here---------------------------- -->
            <div class="row secondrow">
                <div class="col-sm-6 srfc">
                    <h5><u>Fill up the form to post third product</u></h5>


                    <label>Name of the product</label>
                    <br>
                    <input type="text" placeholder="enter product name" name="name3">
                    <br>
                    <label>price of the product</label>
                    <br>
                    <input type="text" placeholder="product price" name="price3">
                    <br>
                    <label>Discount</label>
                    <br>
                    <input type="text" placeholder="enter discount%" name="discount3">
                    <br>
                    <label>Product image</label>
                    <br>
                    <input type="file" placeholder="image of product" name="image3">
                    <br>
                    <button type="submit">Post All product</button>
                    </form>
                    @if(session('status'))
                    <h6 style="color:white; background:black; width:250px;">{{session('status')}}</h6>
                    @endif
                </div>
                <div class="col-sm-6 srsc">
                    <!-- -----------------------------------------------for table------------------------------------->
                    
                </div>
            </div>
            <br><br>
            <!-- ---------------------------third row for table---------------------------- -->
            <div class="row thirdrow">
            <table class="table table-borderless table-dark table-sm" style=" width:100%;  box-shadow: 2px 2px 2px 2px black;">
                    <thead>
                        <tr>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($addcart as $item)
                        <tr>

                            <td>{{$item->id}}</td>
                            <td>{{$item->name1}}</td>
                            <td>{{$item->price1}}</td>
                            <td>{{$item->discount1}}</td>
                            <td><img src="{{asset('uploads/productone/' .$item->image1)}}" width="30px;"></td>

                            <td>{{$item->name2}}</td>
                            <td>{{$item->price2}}</td>
                            <td>{{$item->discount2}}</td>
                            <td><img src="{{asset('uploads/producttwo/' .$item->image2)}}" width="30px;"></td>
                            <td>{{$item->name3}}</td>
                            <td>{{$item->price3}}</td>
                            <td>{{$item->discount3}}</td>
                            <td><img src="{{asset('uploads/productthree/' .$item->image3)}}" width="30px;"></td>
                            <td><a href="{{url('edit-home/'.$item->id)}}" ><i class="fa fa-edit" style="font-size:25px;color:yellow;"></a></td>
                            <td><a href="{{url('delete-home/'.$item->id)}}"><i class="fa fa-trash" style="font-size:22px;color:red;"></a></td>


                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
<div class="card text-center" style="background-color: black; position:absolute; top:700px; width:100%;">
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