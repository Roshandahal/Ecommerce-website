<style>
    
.container
{
    position: relative;
    top: 100px;
    border: 5px solid black;
}

.description{
 background-color: #CBC8C8;
 display: flex;
 justify-content: center;   
}

.logincol{
    background-color: black;
    display: flex;
 justify-content: center;   
}
</style>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body style="background: #999987; color:black;">
    <!-- for making form  -->

    <div class="container">
        <div class="row">
            <div class="col-sm-6 description">
                <p style="font-weight: bold;">Edit and update user details from here, user type consists two parameter.
                (0 and null) says that is user account and 1 indicates that is admin account. you can edit and update as per your request. 
                </p>

            </div>
            <div class="col-sm-6 logincol">
                <!-- form start  -->
                <form method="post" action="{{url('update-user/'.$user->id)}}">
                    @csrf
                    @method('PUT')
                    <h3 style="display: flex; justify-content: center; color: aliceblue;"><u>Update from here</u></h3><br>
                    @if(session('status'))
                    <h6 style="color:white; background:red; width:250px;">{{session('status')}}</h6>
                    @endif
                    <label style="color: aliceblue; font-weight: bold; background-color: green; border: 1px solid white;">Username</label>
                    <input type="email" placeholder="enter your gmail here" style="height: 20px; width: 300px; border:1px solid black;" name="email" value="{{$user->email}}"><br><br>
                    <label style="color: aliceblue; font-weight: bold; background-color: green; border: 1px solid white;">Password </label>
                    <input type="password" placeholder="enter your password" style="height: 20px; width: 300px; border:1px solid black;" name="password" value="{{$user->email}}"><br><br>
                    <label style="color: aliceblue; font-weight: bold; background-color: green; border: 1px solid white;">Username</label>
                    <input type="text" placeholder="usertype" style="height: 20px; width: 300px; border:1px solid black;" name="usertype" value="{{$user->usertype}}"><br><br>

                    <button type="submit" style="display:flex; justify-content: center; background-color: brown;">update</button><br><br>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
<div class="card text-center" style="background-color: black; position:absolute; top:500px; width:100%;">
    <!-- <div class="card-header">
    Featured
  </div> -->
    <div class="card-body">
        <h5 class="card-title" style="color: white;">@purbeli product</h5>
        <p class="card-text" style="color: white;">Come and get shoe us.</p>
        <a href="{{url('/userdetails')}}" class="btn btn-primary">Userdetails</a>
    </div>
    <!-- <div class="card-footer text-muted">
    2 days ago
  </div> -->
</div>
