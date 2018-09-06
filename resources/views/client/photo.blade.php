<!DOCTYPE html>
<html class="full-height" lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>98MEDIA Photo</title>
    <link rel='stylesheet' href='https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css'>
    <link rel='stylesheet' href='/style/main.css'>

    <!-- Scripts -->
    <script src="{{ asset('mdb/js/jquery-3.2.1.min.js') }}" defer></script>
    <script src="{{ asset('mdb/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('mdb/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('mdb/js/mdb.min.js') }}" defer></script>
    <script src="{{ asset('mdb/js/modules/cards.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
          crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('mdb/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('mdb/css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/client.css') }}" rel="stylesheet">

</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light " id="barphoto">
    <div class="container"><a class="navbar-brand" href="/"><img style="width: 100px; height: auto" src="{{asset('img/Untitled-1.png')}}"></a>
        <button class="navbar-toggler blue" type="button" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" >
            <ul class="navbar-nav ml-auto" style="font-family: 'Roboto', sans-serif">
                <li class="nav-item"><a class="nav-link active" href="#kyyeu">Ảnh kỉ yếu</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Ảnh thời trang</a></li>
                <li class="nav-item"><a class="nav-link" href="#pricing">Ảnh gia đình</a></li>
                <li class="nav-item"><a class="nav-link" href="#team">Thiết bị</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Liên hệ</a></li>
            </ul>
        </div>
    </div>
</nav>
    <!--Carousel Wrapper-->
    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(88).jpg" alt="First slide">
                <div class="carousel-caption">
                    <div class="animated fadeInDown">
                        <h3 class="h3-responsive">Super light mask</h3>
                        <p>Secondary text</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(121).jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg" alt="Third slide">
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(88).jpg" class="img-fluid"></li>
            <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(121).jpg" class="img-fluid"></li>
            <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(31).jpg" class="img-fluid"></li>
        </ol>
    </div>
    <!--/.Carousel Wrapper-->
</header>
<section id="kyyeu" class="lookbook">
    <h3 class="text-center text-white">Ảnh kỉ yếu :3 </h3>
    <div class="container page-top">
        <div class="row">
                <div class="col-md-4">
                    <div class="view zoom">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img%20(7).jpg" class="img-fluid " alt="">
                        <div class="mask flex-center">
                            <p class="black-text">Zoom effect</p>
                        </div>
                    </div>


    </div>

</section>
    <script src="js/bootstrap.min.js"></script>

    {{--<script src="js/main.js"></script>--}}
    {{--<script src="js/mdb.js"></script>--}}
    <script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/mdb.js"></script>
<script>new WOW().init(); </script>
{{--<script src="../../../public/js/main.js"></script>--}}
</body>
</html>
