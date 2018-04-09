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
        <h1 class="display-3">Top 10 Movies</h1>
    </div>



    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <h3 class="card-header">Jumangi</h3>
                <div class="card-body">
                    <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 7.0</h2>
                </div>
                <a href="images/13.jpg" data-lightbox="gallery" data-title="Jumangi"><img style="height: 200px; width: 100%; display: block;" src="images/13.jpg" alt="Card image"></a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-primary btn-sm">Read more...</button>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <h3 class="card-header">Mission Impossible</h3>
                <div class="card-body">
                    <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 7.1</h2>
                </div>
                <a href="images/14.jpg" data-lightbox="gallery" data-title="Mission Impossible"><img style="height: 200px; width: 100%; display: block;" src="images/14.jpg" alt="Card image"></a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-primary btn-sm">Read more...</button>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <h3 class="card-header">IP man</h3>
                <div class="card-body">
                    <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 7.1</h2>
                </div>
                <a href="images/19.jpg" data-lightbox="gallery" data-title="IP man"><img style="height: 200px; width: 100%; display: block;" src="images/19.jpg" alt="Card image"></a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-primary btn-sm" href="{{route('ipMan')}}" role="button">Read more...</a>
                </div>
            </div>

        </div>

    </div>



    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <h3 class="card-header">Transformers</h3>
                <div class="card-body">
                    <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 5.7</h2>
                </div>
                <a href="images/20.jpg" data-lightbox="gallery" data-title="Transformers"><img style="height: 200px; width: 100%; display: block;" src="images/20.jpg" alt="Card image"></a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-primary btn-sm">Read more...</button>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <h3 class="card-header">Mountain between Us</h3>
                <div class="card-body">
                    <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 6.4</h2>
                </div>
                <a href="images/23.jpg" data-lightbox="gallery" data-title="Mountain Between Us"><img style="height: 200px; width: 100%; display: block;" src="images/23.jpg" alt="Card image"></a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-primary btn-sm">Read more...</button>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <h3 class="card-header">Batman vs Superman</h3>
                <div class="card-body">
                    <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 5.6</h2>
                </div>
                <a href="images/15.jpg" data-lightbox="gallery" data-title="Batman vs Superman"><img style="height: 200px; width: 100%; display: block;" src="images/15.jpg" alt="Card image"></a>
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
                    <a class="page-link" href="{{ route('movie') }}">1</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="{{ route('movie1') }}">2</a>
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