@extends('afterlogin.nav')
@section('afterloginnav')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>
    .container {
        position: absolute;
        top: 100px;
        width: auto;
    }
</style>

<style>
    .container {

        position: relative;
        top: 100px;
    }

    .form .image:hover {

        opacity: 1;
        background: red;
        animation-duration: 2s;
        border-radius: 50px;
        transition: 0.4s;

    }

    /* .description {
            border: 2px solid black;
            background: yellow;
        } */

    body {
        background-color: #A09D9D;
        color: black;
    }

    label {
        font-weight: bold;
    }
</style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 description">
                <h1 style="text-shadow: 1px 1px 1px black;"><u>see your profile here</h1></u>
                <p style=" font-weight:bold;">
                    see your profile which includes all the necessary items.your username, your name, your password.the credincal for changing password
                    two factor authentication.Browser section.credincal to delete account.
                </p>
            </div>

            <div class="col-sm-6 form">
                <a class="nav-link" href="{{url('/user/profile')}}" style="font-weight:bold; color:yellow;"><img src="images/user profile.png" class="image" style="width: 100px; height:100px;"></a>
            </div>









            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>



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
</div>

@stop