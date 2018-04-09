<!doctype html>
<html lang="en">
<head>

    <title>Login Page</title>

    <link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.css">

    <script type="text/javascript">
        var image1=new Image();
        image1.src="..\\images\\l1.jpg"
        var image2=new Image();
        image2.src="..\\images\\l2.jpg"
        var image3=new Image();
        image3.src="..\\images\\l3.jpg"
        var image4=new Image();
        image4.src="..\\images\\l5.jpg"
        var image5=new Image();
        image5.src="..\\images\\l7.jpg"
        var image6=new Image();
        image6.src="..\\images\\l9.jpg"
        var image7=new Image();
        image7.src="..\\images\\l11.jpg"
        var image8=new Image();
        image8.src="..\\images\\l12.jpg"
        var image9=new Image();
        image9.src="..\\images\\l15.jpg"
        var image10=new Image();
        image10.src="..\\images\\l16.png"
        var image11=new Image();
        image11.src="..\\images\\l16.jpg"
        var image12=new Image();
        image12.src="..\\images\\l21.jpg"


    </script>



</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"></a>
    <a class="navbar-brand" href="#"></a>
    <a class="navbar-brand" href="#"></a>
    <a class="navbar-brand" href="#"></a>
    <a class="navbar-brand" href="#"></a>
    <a class="navbar-brand" href="#"></a>
    <img src="images/1.png" alt="" width="45px">
    <a class="navbar-brand" href="#"></a>
    <a class="navbar-brand" href="#">MyTvShow</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">

        </ul>
        <form class="form-inline my-2 my-lg-0" method="post" action="{{ route('signin') }}">
            <input class="form-control mr-sm-2" type="text" placeholder="UserName" name="user_name">

            <input class="form-control mr-sm-2" type="password" placeholder="Password" name="password">

            <button type="submit" class="btn btn-primary">Log In</button>
            {{ csrf_field() }}
        </form>
    </div>
</nav>


<div class="container">

    <br><br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <div id="image_sl_show">
                <img id="proimg" src="..\images\001.jpg"  class="img-thumbnail"	name="slide" width="80%" height="40%"/>

                <script type="text/javascript">
                    var step=1;
                    function slideit()
                    {
                        document.images.slide.src=eval("image"+step+".src");
                        if(step<12)
                            step++;
                        else
                            step=1;
                        setTimeout("slideit()",2000);
                    }
                    slideit();
                </script>
            </div>

        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
            <h1>Create a New Account</h1>
            <p>It's free and always will be.</p>
            <form method="post" action="{{ route('signup') }}">
                <fieldset>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Full Name" width="50%" name="full_name">
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">User Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name" name="user_name">

                            </div>

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-10">
                            <small>By clicking Create Account, you agree to our Terms and confirm that you have read our
                                Data Policy, including our Cookie Use Policy. You may receive SMS message notifications
                                from Facebook and can opt out at any time<br></small>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Account</button>
                </fieldset>
                {{ csrf_field() }}
            </form>
        </div>

    </div>



</div>




<script src="js/jquery-3.3.1.min.js"></script>

</body>
</html>