@extends('client.master')

@section('content')
    <section class="mt-5">
    <h1 class="text-center teal-text wow fadeInUp" data-wow-delays="0.3s">ALBUM ẢNH CƯỚI ĐẸP</h1>
    <div class="row">
        <div class="col-md-12">

            <div id="mdb-lightbox-ui"></div>

            <div class="mdb-lightbox wow fadeInRight" data-wow-delay="0.5s">
                @foreach($products->where('category_id', 1) as $product)
                @foreach($product->items as $item)
                <figure class="col-md-4">
                    <a href="{{$item->link}}" data-size="1600x1067">
                        <img src="{{$item->link}}" alt="placeholder" class="img-fluid">
                    </a>
                </figure>
                @endforeach
                @endforeach
            </div>

        </div>
    </div>
</section>
<section class="mt-4">
    <h1 class="text-center teal-text wow fadeInUp" data-wow-delays="0.3s">ALBUM ẢNH KỈ YẾU ĐẸP</h1>
    <div class="row">
        <div class="col-md-12">

            <div id="mdb-lightbox-ui"></div>

            <div class="mdb-lightbox wow fadeInLeft" data-wow-delay="0.5s">

                @foreach($products->where('category_id', 2) as $product)
                @foreach($product->items as $item)
                <figure class="col-md-4">
                    <a href="{{$item->link}}" data-size="1600x1067">
                        <img src="{{$item->link}}" alt="placeholder" class="img-fluid">
                    </a>
                </figure>
                @endforeach
                @endforeach

            </div>

        </div>
    </div>
</section>
<section CLASS="mt-4">
    <h1 class="text-center teal-text wow fadeInUp" data-wow-delays="0.3s">ALBUM ẢNH THỜI TRANG ĐẸP</h1>
    <div class="row">
        <div class="col-md-12">

            <div id="mdb-lightbox-ui"></div>

            <div class="mdb-lightbox wow fadeInDown" data-wow-delay="0.5s">

                @foreach($products->where('category_id', 3) as $product)
                @foreach($product->items as $item)
                <figure class="col-md-4">
                    <a href="{{$item->link}}" data-size="1600x1067">
                        <img src="{{$item->link}}" alt="placeholder" class="img-fluid">
                    </a>
                </figure>
                @endforeach
                @endforeach

            </div>

        </div>
    </div>
</section>
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
                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScnq7cS_qd6rfW-87ZL-wcQ1-mpNzl9tlNaJXOncakhEKajHg/viewform?embedded=true" width="640" height="996" frameborder="0" marginheight="0" marginwidth="0">Đang tải...</iframe>
                            </div>
                            <div class="col-md-4">
                                <ul class="list-unstyled text-center">
                                    <li class="mt-4"><a href="https://www.facebook.com/98media.vn" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
                                        <p class="mt-2">Kết nối với chung tôi trên facebook</p> </li>
                                    <li class="mt-4"><a href="https://www.instagram.com/98media_vietnam/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                                        <p class="mt-2">Kết nối với chúng tôi trên intagram</p> </li>
                                    <li class="mt-4"><a href="https://goo.gl/maps/qdnX1XrPRa52" target="_blank"> <i class="fa fa-map-marker indigo-text fa-2x"></i></a>
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

@endsection

@section('scripts')
<script>
    // MDB Lightbox Init
    $(function () {
        $("#mdb-lightbox-ui").load("mdb/mdb-addons/mdb-lightbox-ui.html");
    });
</script>
@endsection