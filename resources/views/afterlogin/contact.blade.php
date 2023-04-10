@extends('afterlogin.nav')
@section('afterloginnav')


<style>
    .container {

        position: relative;
        top: 100px;
    }

    .form {
        
        color: white;
    }

    /* .description {
        border: 2px solid black;
        
    } */

    body {
        background-color: #01778E;
        color: black;
        
    }

   label{
    color: black;
   }
    form input {
        width: 100%;
        border: 1px solid red;
        border-radius: 5px;
    }
    form textarea {
        width: 100%;
        border: 1px solid red;
        border-radius: 5px;
    }
</style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 description">
                <h5 style="color:black;"><u>Make contact us from here</h5></u>
                <p>
                    To make contact to us fill up the form with all the necessary items mentioned in the contact form
                    we will make review in it.Mention your gmail and contact number, we will contact you if the
                    problem/purpose of making contact is genune.
                    and also mention why are you trying to make contact to us.mention the problem so we can handle it
                </p>
            </div>
            <div class="col-sm-6 form">
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <u style="color: black;">
                        <h3 style="color:black;">Fill it & Make contact to us.Feel free to get in touch.</h3>
                    </u>
                    @if(session('status'))
                    <h6 style="color:white; background:black; width:100%;">{{session('status')}}</h6>
                    @endif
                    <label>Full Name</label><br>
                    <input placeholder="Enter your name and surname"  name="name"><br>
                    <label>Your gmail</label><br>
                    <input placeholder="Enter your gmail"  name="email"><br>
                    <label>Your contact</label><br>
                    <input placeholder="Enter your contact"  name="contactnumber"><br>
                    <label>Purpose of making contact</label><br>
                    <textarea placeholder="mention the purpose of making contact
why do you want to make contact to us?" name="purpose"></textarea><br>
                    <button type="submit" style=" background:blue; width:100%;">Make contact</button>
                </form>
            </div>

            <!-- ..........................................................down code is for footer............................................................................. -->
            
</body>
@stop
<div class="card text-center" style="background-color: black; position:absolute; top:600px; width:100%;">
  <!-- <div class="card-header">
    Featured
  </div> -->
  <div class="card-body">
    <h5 class="card-title" style="color: white;">Special title treatment</h5>
    <p class="card-text" style="color: white;">With supporting text below as a natural lead-in to additional content.</p>
  
  </div>
  <!-- <div class="card-footer text-muted">
    2 days ago
  </div> -->
</div>