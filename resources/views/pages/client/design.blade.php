<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>98 FILM MAKER</title>
    <script src="{{ asset('mdb/js/jquery-3.3.1.min.js') }}"></script>
    <!-- Scripts -->
    <script src="{{ asset('mdb/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('mdb/js/popper.min.js') }}"></script>
    <script src="{{ asset('mdb/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('mdb/js/mdb.min.js') }}"></script>

    <script src="{{ asset('js/optional.js') }}"></script>
    <script src="{{ asset('mdb/js/modules/toastr.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
          crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('mdb/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('mdb/css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/main.css') }}" rel="stylesheet">

</head>
<body>
<header>

    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar">
        <div class="container"><a class="navbar-brand" href="/"><img style="width: 100px; height: auto"
                                                                     src="{{asset('img/Untitled-1.png')}}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto" style="font-family: 'Roboto', sans-serif">
                    <li class="nav-item"><a class="nav-link active" href="#about">Về Chúng Tôi</a></li>
                    <li class="nav-item"><a class="nav-link" href="/photo">Chụp ảnh</a></li>
                    <li class="nav-item"><a class="nav-link" href="/video">Quay Video</a></li>
                    <li class="nav-item"><a class="nav-link" href="/design">Design</a></li>
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
                <img class="d-block w-100" src="{{asset('img/marvin-meyer-571072-unsplash (1).jpg')}}"  width="900" height="700"
                     alt="First slide">
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Slight mask</h3>
                    <p>Third text</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/Design (1).jpg')}}"  width="900" height="700"
                     alt="Second slide">
                <div class="carousel-caption carousel-fade">
                    <h3 class="h3-responsive">Slight mask</h3>
                    <p>Third text</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/design 1.jpg')}}"  width="900" height="700"
                     alt="Third slide">
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Slight mask</h3>
                    <p>Third text</p>
                </div>
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
    </div>
    <!--/.Carousel Wrapper-->
</header>

<section id="contact" style="background-image:url('../../../../public/img/Untitled-1.png');">
    <div class="rgba-black-strong py-5">
        <div class="container">
            <div class="wow fadeIn">
                <h2 class="h1 text-white pt-5 pb-3 text-center">Liên hệ</h2>
                <p class="text-white px-5 mb-5 pb-3 lead text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure
                    provident voluptate
                    esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.
                </p>
            </div>
            <div class="card mb-5 wow fadeInUp" data-wow-delay=".4s">
                <div class="card-body p-5">
                    <div class="row">
                        <div class="col-md-8">
                            <form action="https://formspree.io/youremail@example.com" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input class="form-control" id="name" type="text" name="name"
                                                   required="required"/>
                                            <label for="name">Tên của bạn</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input class="form-control" id="message" type="text" name="_replyto"
                                                   required="required"/>
                                            <label for="email">Số điện thoại liên hệ</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form">
                                            <input class="form-control" id="subject" type="text" name="subject"
                                                   required="required"/>
                                            <label for="subject">Loại dịch vụ đang quan tâm</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="md-form">
                                            <textarea class="md-textarea" id="message" name="message"
                                                      required="required"></textarea>
                                            <label for="message">Lời nhắn với chúng tui</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="center-on-small-only mb-4">
                                    <button class="btn btn-indigo ml-0" type="submit"><i
                                                class="fa fa-paper-plane-o mr-2"></i>
                                        Send
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-unstyled text-center">
                                <li class="mt-4"><i class="fa fa-map-marker indigo-text fa-2x"></i>
                                    <p class="mt-2">98MEDIA CENTER , 98 My Dinh Street , Nam Tu Liem Ditric , Ha
                                        Noi City</p>
                                </li>
                                <li class="mt-4"><i class="fa fa-phone indigo-text fa-2x"></i>
                                    <p class="mt-2">+84 98 22 99 618</p>
                                </li>
                                <li class="mt-4"><i class="fa fa-envelope indigo-text fa-2x"></i>
                                    <p class="mt-2">contact@98media.vn</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class=" text-center page-footer light-blue darken-1 center-on-small-only pt-0 mt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-5 flex-center">
                    <a href="https://www.facebook.com/98media.vn/" target="_blank"><i
                                class="fab fa-facebook-square fa-2x"></i></a>
                    <a class="ml-2" href="https://instagram.com/mr.minh_nb" target="_blank"><i
                                class="fab fa-instagram fa-2x "></i></a>
                    <a class="ml-2" href="https://www.flickr.com/photos/minhwolfptg" target="_blank"><i
                                class="fab fa-flickr fa-2x"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-copyright light-blue darken-1">
            <div class="container-fluid">
                <p>&copy; <a href="/">98 MEDIA VIET NAM</a></p>
            </div>
        </div>
</footer>
</body>
@section('scripts')
    <script>
        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("mdb/mdb-addons/mdb-lightbox-ui.html");
        });
    </script>
@endsection