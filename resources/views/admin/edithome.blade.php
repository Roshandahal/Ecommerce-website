<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<style>
    .container {
        position: relative;
        top: 100px;
    }

    .form {
        border: 2px solid black;
    }

    .description {
        border: 2px solid black;
    }

   
</style>
</head>

<body style="background: #999987; color:black;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 description">
                <h1><u>Fill up the form to update home page</h1></u>
                <p>you can update all the home components that you want to update and want to show in the home page,
                    you can change the name and slogan of the page as anytime you want to, you can update edit and delete the
                    necessary components as your wish.
                </p>

                <!-- table for edit update and delete  -->
                

            </div>
            <div class="col-sm-6 form">
                <form method="post" action="{{url('update-home/'.$welcome->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                   
                    @if(session('status'))
                    <h6 style="color:white; background:black; width:250px;">{{session('status')}}</h6>
                    @endif
                    <u>
                        <h3>Fill the form/Update the home as you want.</h3>
                    </u>
                    <label>Name and slogan of the page</label><br>
                    <input placeholder="Enter name and slogan" style="width: 420px;" name="name" value="{{$welcome->name}}"><br>
                    <label>Description of the page</label><br>
                    <textarea placeholder="Enter the description you want to show in the home" value="" style="width: 420px; height:300px" name="description">{{$welcome->description}}</textarea><br>
                    <button type="submit" style="width: 420px; background: red; font-weight: bold;">Update home</button>
                </form>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>