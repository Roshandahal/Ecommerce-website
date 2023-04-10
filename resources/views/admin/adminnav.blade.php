<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Backend of purbeli product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- for nav  -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-weight: bold;">Purbeli-product backend</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel" style="text-shadow: 1px 1px 1px black; font-weight:bold;">Admin pannel</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a aria-current="page" href="{{('settings') }}" style="width:50px; font-weight:bold; color:white; font-style:italic; text-decoration:none; color:red;"><i class="fa fa-gears" style="font-size:15px;color:white; color:red;"></i> Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{'home'}}" style="color: white; text-shadow:1px 1px 1px black;"><i class="fa fa-user-circle-o" style="font-size:15px;color:white;"></i> Go to userinterface</a>
                        </li>

                        <!-- for updating the credincial  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Update from here
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="{{('updatehome')}}"><i class="fa fa-university" style="font-size:15px;color:white;"></i> Update home page</a></li>
                                <li><a class="dropdown-item" href="{{('newsblog')}}"><i class="fa fa-newspaper-o " style="font-size:15px;color:white;"></i> Update news-letter blog signin</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{('updatecart')}}"><i class="fa fa-plus-circle" style="font-size:17px;color:white;"></i> Update add to cart</a></li>
                            </ul>
                        </li>
                        <!-- for viewing the details  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                View details from here
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" style="background: #E3E3E3;">
                                <li><a class="dropdown-item" style="color: green;" href="{{('userdetails')}}"><i class="fa fa-user-secret" style="font-size:15px;color:green;"></i> View user details</a></li>
                                <li><a class="dropdown-item" style="color: green;" href="{{('feedbackdetails')}}"><i class="fa fa-star-half-o" style="font-size:15px;color:green;"></i> Show feedback of user</a></li>
                                <li><a class="dropdown-item" style="color: green;" href="{{('contactdetails')}}"><i class="fa fa-vcard-o" style="font-size:15px;color:green;"></i> Show contact details</a></li>
                                <li><a class="dropdown-item" style="color: green;" href="{{('cartdetails')}}"><i class="fa fa-shopping-cart" style="font-size:15px;color:green;"></i> Show cart details</a></li>
                                

                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>



    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
@yield('adminnav')