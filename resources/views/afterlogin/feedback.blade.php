@extends('afterlogin.nav')
@section('afterloginnav')
<style>
        .container {
           
            position: relative;
            top: 100px;
        }
        /* .row{
            box-shadow: 2px 2px 2px 3px red;
        } */

         .form {
            /* border: 2px solid black; */
            /* background-color: black; */
            color: black;
        }
        /* .description {
            border: 2px solid black;
            box-shadow: 2px 2px 2px 3px black;
        }  */
        body{
            background: #01778E;
            color: black;
        }
       
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 description">
                <h5 style="text-shadow: 1px 1px 1px black;"><u>Give Feedback to us/say something.</h5></u>
                <p>
                    you can give feedback to us as per your userinterface experience. you can make complained about
                    the things that should be improve in the system.
                </p>
            </div>
            <div class="col-sm-6 form">
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <u>
                        <h5 style="text-shadow: 1px 1px 1px white;">Fill the Feedback box/say aything you want.</h5>
                    </u>
                    @if(session('status'))
                    <h6 style="color:white; background:red; color:black; width:400px; font-style:italic; font-weight:bold;">{{session('status')}}</h6>
                    @endif
                    
                    <label>Give suggestion/Feedback to us.</label><br>
                    <textarea placeholder="say something that you want to tell us to improve our performance."
                        style="width: 420px; height:200px" name="feedback"></textarea><br>
                    <button type="submit" style="width: 420px; background: blue; font-weight: bold;">Post the component</button>
                </form>
            </div>









            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
                crossorigin="anonymous"></script>
</body>
@endsection
<div class="card text-center" style="background-color: black; position:absolute; top:600px; width:100%;">
  <!-- <div class="card-header">
    Featured
  </div> -->
  <div class="card-body">
    <h5 class="card-title" style="color: white;">Special title treatment</h5>
    <p class="card-text" style="color: white;">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <!-- <div class="card-footer text-muted">
    2 days ago
  </div> -->
</div>