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

<!-- cart details  -->

<!-- table of user details starts from here  -->

<body>
    <div class="container">
        <div style="border: 2px solid black; height:auto; background:white;">
            <h2 style="color: black; font-weight:bold; margin:5px;">Details of the cart.</h2>
            <table class="table table-borderless  table-sm table-dark" style="width: 90%;margin:5px; box-shadow: 2px 2px 2px 2px black;">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Product wanted</th>
                        <th scope="col">quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($cartdetailes as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->product_title}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->price}}</td>
                        <td><a href="{{url('delete-user/'.$item->id)}}"><i class="fa fa-trash" style="font-size:22px;color:red;"></a></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div><br><br>
    </div>
</body>