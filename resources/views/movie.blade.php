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
                <h3 class="card-header">Narnia</h3>
                <div class="card-body">
                        <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 6.9</h2>
                </div>
                <a href="images/11.jpg" data-lightbox="gallery" data-title="Narnia"><img style="height: 200px; width: 100%; display: block;" src="images/11.jpg" alt="Card image"></a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-primary btn-sm" href="{{route('narnia')}}" role="button">Read more...</a>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <h3 class="card-header">Hobbit</h3>
                <div class="card-body">
                    <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 7.9</h2>
                </div>
                <a href="images/12.jpg" data-lightbox="gallery" data-title="Hobbit"><img style="height: 200px; width: 100%; display: block;" src="images/12.jpg" alt="Card image"></a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-primary btn-sm" href="{{route('hobbit')}}" role="button">Read more...</a>
                </div>
            </div>

        </div>



        <div class="col-md-4">
            <div class="card mb-4">
                <h3 class="card-header">Harry Potter</h3>
                <div class="card-body">
                    <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 7.6</h2>
                </div>
                <a href="images/17.jpg" data-lightbox="gallery" data-title="Harry Potter"><img style="height: 200px; width: 100%; display: block;" src="images/17.jpg" alt="Card image"></a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-primary btn-sm" href="{{route('harryPotter')}}" role="button">Read more...</a>
                </div>
            </div>

        </div>
    </div>

    <div class="row">


        <div class="col-md-4">
            <div class="card mb-4">
                <h3 class="card-header">Twilight</h3>
                <div class="card-body">
                    <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 5.2</h2>
                </div>
                <a href="images/18.jpg" data-lightbox="gallery" data-title="Twilight"><img style="height: 200px; width: 100%; display: block;" src="images/18.jpg" alt="Card image"></a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-primary btn-sm" href="{{route('twilight')}}" role="button">Read more...</a>
                </div>
            </div>

        </div>


        <div class="col-md-4">
            <div class="card mb-4">
                <h3 class="card-header">Allegiant</h3>
                <div class="card-body">
                    <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 5.7</h2>
                </div>
                <a href="images/24.jpg" data-lightbox="gallery" data-title="Allegiant"><img style="height: 200px; width: 100%; display: block;" src="images/24.jpg" alt="Card image"></a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-primary btn-sm" href="{{route('Allegiant')}}" role="button">Read more...</a>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <h3 class="card-header">Jhon Wick</h3>
                <div class="card-body">
                    <h2 class="card-header text-primary"><i class="fab fa-imdb"></i> 7.3</h2>
                </div>
                <a href="images/16.jpg" data-lightbox="gallery" data-title="Jhon wick"><img style="height: 200px; width: 100%; display: block;" src="images/16.jpg" alt="Card image"></a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-primary btn-sm" href="{{route('jhonWick')}}" role="button">Read more...</a>
                </div>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-md-5"></div>
        <div>
            <ul class="pagination">

                <li class="page-item active">
                    <a class="page-link" href="{{ route('movie') }}">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="{{ route('movie1') }}">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="{{ route('movie1') }}">&raquo;</a>
                </li>
            </ul>
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