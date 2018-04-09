<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#003333">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="images/1.png" alt="" width="45px">
    <a class="navbar-brand" href="#">MyTvShows</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#"><h4><i class="fas fa-user"></i> {{ Auth::user()->full_name }}</h4><span class="sr-only">(current)</span></a>

            </li>


        </ul>


    </div>
</nav>

<section><!--4to Change-->
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="jumbotron " >
                    <h2 class="display-3 text-primary">Tv Series</h2>
                    <p class="text-primary">You can fing the best tv series with the IMDB rankings through this web site
                    </p>
                    <hr class="my-4">
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="{{route('tvshow')}}" role="button">See more</a>
                    </p>
                </div>
            </div>
            <div class="col-md-7">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->


                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/1.jpg" class="img-thumbnail" >
                            <div class="carousel-caption">
                                <h1>Game of Thrones</h1>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/2.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                                <h1></h1>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/3.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                                <h1>Prison Break</h1>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/4.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                                <h1>100</h1>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/5.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                                <h1>Into the BadLands</h1>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/6.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                                <h1></h1>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/7.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                                <h1>Sherlock Homes</h1>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/8.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                                <h1>Home Land</h1>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/9.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                                <h1>13 Reasons Why</h1>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/10.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                                <h1>Lost</h1>
                            </div>
                        </div>


                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="jumbotron " >
                        <h1 class=" text-primary">Top 10 TV shows</h1>
                        <p class="text-primary">
                            When you feel bored, you can select any of the tv series according to your favour.
                            The interesting tv series are available for you through the website.
                            You can get the breif introduction about the tv series of Game of Trones, Breaking Bad, Prison Break,
                            100, Into the BadLands, the Walking Dead, Sherlock, Home Land, 13 reasons why, Lost, Shannara Chronicles and
                            the Secret Circle by looking at this web site.
                        </p>

                    </div>

                </div>
            </div>
            <hr>
        </div>
    </div>

</section><!--4to change-->


<section><!--4to Change-->
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="jumbotron " >
                    <h2 class="display-3 text-primary">Movies</h2>
                    <p class="text-primary">You can get the Brief idea about the best Movies that have Released.</p>
                    <hr class="my-4">
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="{{ route('movie') }}" role="button">See more</a>
                    </p>
                </div>
            </div>
            <div class="col-md-7">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <!-- Indicators -->


                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/11.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                                <h1>Narnia</h1>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/12.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                                <h1></h1>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/13.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                                <h1>Jumangi</h1>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/mis02.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                                <h1></h1>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/15.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                                <h1></h1>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/16.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                                <h1>Jon Wick</h1>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/17.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                                <h1>Harry Potter</h1>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/18.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                                <h1>Twilight</h1>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/19.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                                <h1>Ip man</h1>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/20.jpg" class="img-thumbnail">
                            <div class="carousel-caption">
                                <h1>Transformers</h1>
                            </div>
                        </div>


                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron " >
                    <h1 class="text-primary">Top 10 Movies</h1>
                    <p class="text-primary">
                        When you feel bored, you can select any of the movie according to your favour.
                        The interesting movies are available for you through the website.
                        You can get the breif introduction about the movies of Narnia, Harry Potter, Load of the rings, Jumangi, Twilight, Batman vs Superman,
                        jhon wick, Divergent, Transformers, Mountain between us, Ip man and Mission Impossible
                        by looking at this web site.
                    </p>

                </div>


            </div>
        </div>

        <!--Footer-->
        <footer class="page-footer font-small stylish-color-dark pt-4 mt-4">

            <!--Footer Links-->
            <div class="container text-center text-md-left">

                <hr>

                <div class="row py-3 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-md-8 col-lg-8">

                        <!--Copyright-->
                        <p class="text-center text-md-left text-muted ">© 2018: <a href="#"><strong> kachirandharshana@gmail.com</strong></a></p>
                        <!--/.Copyright-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 col-lg-4 ml-lg-0">

                        <!--Social buttons-->
                        <div class="text-center text-md-right">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1 text-info"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1 text-info"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1 text-info"><i class="fab fa-pinterest-square"></i></a></li>
                                <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1 text-info"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <!--/.Social buttons-->

                    </div>
                    <!--Grid column-->

                </div>

            </div>

        </footer>
        <!--/.Footer-->



</section><!--4to change-->






<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
        integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
        crossorigin="anonymous"></script>



</body>
</html>