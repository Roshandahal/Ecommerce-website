<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   

</head>


<body>
    <!-- for navication  -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="height: auto;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-weight: bold; color:red; ">
                <marquee>Purbeli-product </marquee>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <spam class="navbar-toggler-icon"></spam>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/addcart')}}" style="font-weight:bold; color:yellow;"><i class="fa fa-pie-chart" style="font-size:15px;color:yellow;"></i> See product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/home')}}" style="font-weight:bold; color:yellow;"><i class="fa fa-info-circle" style="font-size:15px;color:yellow;"></i> Details</a>
                    </li>
                    

                    @if (Route::has('login'))

                    @auth
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link" style="color:white; font-weight:bold;font-style:italic;">Dashboard</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link" style="color:white; font-weight:bold;">Login</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link" style="color:white; font-weight:bold;">Register</a>
                    </li>
                    @endif
                    @endauth

                    @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>

@yield('userheader')