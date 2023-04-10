<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
    .container {

        position: relative;
        top: 100px;
    }

    /* .form {
            background:  black;
        } */

    /* .description {
            border: 2px solid black;
        } */

    .body {
        background-color: blue;
        color: black;
    }

    .row {
        background: #999987; color:black;
        box-shadow: 2px 2px 2px 3px black;
    }
</style>
</head>

<body class="body" style="background: #999987; color:black;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 description">
                <h1><u>Edit form from here</h1></u>
                <p style="font-style: italic; font-weight:bold;">
                    To make contact to us fill up the form with all the necessary items mentioned in the contact form
                    we will make review in it.Mention your gmail and contact number, we will contact you if the
                    problem/purpose of making contact is genune.
                    and also mention why are you trying to make contact to us.mention the problem so we can handle it
                </p>
            </div>
            <div class="col-sm-6 form">
                <form method="post" action="{{url('update-contact/'.$contact->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <u>
                        <h3>Edit contact details</h3>
                    </u>
                    @if(session('status'))
                    <h6 style="color:white; background:black; width:250px;">{{session('status')}}</h6>
                    @endif
                    <label style="font-weight:bold; color:black; font-style:italic;">Full Name</label><br>
                    <input placeholder="Enter your name and surname" style="width: 250px;" name="name" value="{{$contact->name}}"><br>
                    <label style="font-weight:bold; color:black; font-style:italic;">Your gmail</label><br>
                    <input placeholder="Enter your gmail" style="width: 250px" name="email" value="{{$contact->email}}"><br>
                    <label style="font-weight:bold; color:black; font-style:italic;">Your contact</label><br>
                    <input placeholder="Enter your contact" style="width: 250px;" name="contactnumber" value="{{$contact->contactnumber}}"><br>
                    <label style="font-weight:bold; color:black; font-style:italic;">Purpose of making contact</label><br>
                    <textarea placeholder="mention the purpose of making contact
why do you want to make contact to us?" style="width: 250px;" name="purpose">{{$contact->purpose}}</textarea><br>
                    <button type="submit" style="width: 250px; background:blue; font-weight: bold;">Update contact</button>
                </form>
            </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>