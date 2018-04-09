<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.css">
    <link rel="stylesheet" href="css/lightbox.css">

    <title>Document</title>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="images/1.png" alt="" width="45px">
    <a class="navbar-brand" href="#">MyTvShows</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item ">
                <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
            </li>

        </ul>

        <form class="form-inline my-2 my-lg-0" >
            <a class="btn btn-primary" href="{{route('signout')}}" role="button">Log Out</a>
        </form>
    </div>
</nav>

<div class="container">



    <div class="row"><br></div>
    <div class="jumbotron">
        <h2 class="display-3">Jhon Wick Movie Series</h2>
        <p>Michael Scofield is a desperate man in a desperate situation. His brother, Lincoln Burrows,
            was convicted of a crime he didn't commit and put on Death Row. Michael holds up a bank to get
            himself incarcerated alongside his brother in Fox River State Penitentiary, then sets in motion
            a series of elaborate plans to break Lincoln out and prove his innocence. Once out of jail,
            their perils aren't over -- the brothers must flee to escape recapture and battle an intricate
            political conspiracy that puts everyone's life at risk.</p>
    </div>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <div class="card mb-3">
                <h3 class="card-header">Jhon Wick(2014)</h3>
                <div class="card-body">
                    <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 7.3</h2>
                </div>
                <a href="images/jhon03.jpg" data-lightbox="gallery" data-title="100"><img style="height: 200px; width: 100%; display: block;" src="images/jhon03.jpg" alt="Card image"></a>
                <div class="card-body">
                    <p class="card-text">
                        The first season of the fantasy drama television series Game of Thrones premiered on HBO on
                        April 17, 2011, at 9.00 pm in the U.S., and concluded on June 19, 2011. It consists of ten
                        episodes, each of approximately 55 minutes. The series is based on A Game of Thrones,
                        the first novel in the A Song of Ice and Fire series by George R. R. Martin Ice and Fire series</p>
                </div>
            </div>
        </div>


        <div class="col-md-5">
            <div class="card mb-3">
                <h3 class="card-header">Jhon Wick:Chapter 2(2017)</h3>
                <div class="card-body">
                    <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 7.5</h2>
                </div>
                <a href="images/jhon04.jpg" data-lightbox="gallery" data-title="100"><img style="height: 200px; width: 100%; display: block;" src="images/jhon04.jpg" alt="Card image"></a>
                <div class="card-body">
                    <p class="card-text">
                        The second season of the fantasy drama television series Game of Thrones premiered in the
                        United States on HBO on April 1, 2012, and concluded on June 3, 2012. It consisting of 10 episodes, each running approximately
                        50–60 minutes. The season mostly covers the events of A Clash of Kings, the second novel of
                        the A Song of Ice and Fire series by George R. R. Martin.</p>
                </div>
            </div>
        </div>



    </div>














</div>




</div>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/lightbox.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
        integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
        crossorigin="anonymous"></script>




</body>
</html>