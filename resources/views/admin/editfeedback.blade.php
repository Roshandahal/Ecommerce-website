<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
        .container {
           
            position: relative;
            top: 100px;
        }
        /* .row{
            box-shadow: 2px 2px 2px 3px red;
        } */

         .form {
            border: 2px solid black;
            background-color: black;
            color: white;
        }
        /* .description {
            border: 2px solid black;
            box-shadow: 2px 2px 2px 3px black;
        }  */
        body{
            background: #999987; color:black;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 description">
                <h1 style="text-shadow: 1px 1px 1px black;"><u>Edit Feedback to us/say something.</h1></u>
                <p style="font-weight: bold;">
                    you can edit feedback to us as per your userinterface experience. you can make complained about
                    the things that should be improve in the system.
                </p>
            </div>
            <div class="col-sm-6 form">
                <form method="post" action="{{url('update-feedback/'.$feedback->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <u>
                        <h3 style="text-shadow: 1px 1px 1px white;">Fill the Feedback box/say aything you want.</h3>
                    </u>
                    @if(session('status'))
                    <h6 style="color:white; background:red; color:black; width:400px; font-style:italic; font-weight:bold;">{{session('status')}}</h6>
                    @endif
                  
                    <label>Give suggestion/Feedback to us.</label><br>
                    <textarea placeholder="say something that you want to tell us to improve our performance."
                        style="width: 420px; height:200px" name="feedback">{{$feedback->feedback}}</textarea><br>
                    <button type="submit" style="width: 420px; background: blue; font-weight: bold;">update feedback</button>
                   
                </form>
            </div>









            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
                crossorigin="anonymous"></script>
</body>

