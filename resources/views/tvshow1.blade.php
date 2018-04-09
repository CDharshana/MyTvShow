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
        <h1 class="display-3 text-primary">Top 10 TV shows</h1>
    </div>



    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <h3 class="card-header text-primary">Sherlock Homes</h3>
                <div class="card-body">
                    <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 9.2</h2>
                </div>
                <a href="images/7.jpg" data-lightbox="gallery" data-title="Sherlock Homes"><img style="height: 200px; width: 100%; display: block;" src="images/7.jpg" alt="Card image"></a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-primary btn-sm" href="{{route('sherLock')}}" role="button">Read more...</a>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <h3 class="card-header text-primary">Home Land</h3>
                <div class="card-body">
                    <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 8.4</h2>
                </div>
                <a href="images/8.jpg" data-lightbox="gallery" data-title="Home Land"><img style="height: 200px; width: 100%; display: block;" src="images/8.jpg" alt="Card image"></a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-primary btn-sm" href="{{route('homeLand')}}" role="button">Read more...</a>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <h3 class="card-header text-primary">13 Reasons Why</h3>
                <div class="card-body">
                    <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 8.3</h2>
                </div>
                <a href="images/9.jpg" data-lightbox="gallery" data-title="13 Reason Why"><img style="height: 200px; width: 100%; display: block;" src="images/9.jpg" alt="Card image"></a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-primary btn-sm">Read more...</button>
                </div>
            </div>

        </div>

    </div>



    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <h3 class="card-header text-primary">Lost</h3>
                <div class="card-body">
                    <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 8.4</h2>
                </div>
                <a href="images/10.jpg" data-lightbox="gallery" data-title="Lost"><img style="height: 200px; width: 100%; display: block;" src="images/10.jpg" alt="Card image"></a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-primary btn-sm" href="{{route('lost')}}" role="button">Read more...</a>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <h3 class="card-header text-primary">Shannara Chronicles</h3>
                <div class="card-body">
                    <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 7.4</h2>
                </div>
                <a href="images/21.jpg" data-lightbox="gallery" data-title="Shannara Chronicals"><img style="height: 200px; width: 100%; display: block;" src="images/21.jpg" alt="Card image"></a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-primary btn-sm" href="{{route('shannara')}}" role="button">Read more...</a>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <h3 class="card-header text-primary">Secret Circle</h3>
                <div class="card-body">
                    <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 7.4</h2>
                </div>
                <a href="images/22.jpg" data-lightbox="gallery" data-title="Secret Circle"><img style="height: 200px; width: 100%; display: block;" src="images/22.jpg" alt="Card image"></a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-primary btn-sm">Read more...</button>
                </div>
            </div>

        </div>

    </div>


    <div class="row">
        <div class="col-md-5"></div>
        <div>
            <ul class="pagination">
                <li class="page-item ">
                    <a class="page-link" href="{{ route('tvshow') }}">1</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="{{ route('tvshow1') }}">2</a>
                </li>

            </ul>
        </div>
    </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/lightbox.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
            integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
            crossorigin="anonymous"></script>

</body>
</html>