@extends('client.master')

@section('content')

<section class="row no-gutters mt-5 ">
    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">


        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">

                <div class="col-md-4">
                    <div class="card mb-2">
                        <img class="card-img-top" src="http://c1.staticflickr.com/2/1846/44517946522_4e20010672_b.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Chụp ảnh cưới đẹp với 98 MEDIA </h4>
                            <p class="card-text"></p>
                            <a class="btn btn-primary" href="/photo">Ảnh cưới đẹp</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                        <img class="card-img-top" src="https://c1.staticflickr.com/2/1736/42460555722_1a4ea78d74_b.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Chụp ảnh kỉ yếu đẹp với 98 MEDIA</h4>
                            <p class="card-text"></p>
                            <a class="btn btn-primary" href="/photo">Ảnh kỉ yếu đẹp</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                        <img class="card-img-top" src="https://c1.staticflickr.com/2/1744/41789712164_7edc6f63f2_b.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Ảnh Thời Trang theo xu hướng hot nhất </h4>
                            <p class="card-text"></p>
                            <a class="btn btn-primary" href="/photo">Ảnh thời trang Hot</a>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item">

                <div class="col-md-4">
                    <div class="card mb-2">
                        <img class="card-img-top" src="https://c1.staticflickr.com/2/1725/27641744967_39117bb7bb_b.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Quay MV cưới với 98 Media</h4>
                            <p class="card-text"></p>
                            <a class="btn btn-primary" href="/video">Quay Video cưới đẹp</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                        <img class="card-img-top" src="https://c1.staticflickr.com/1/801/40429997435_d019bd08f0_b.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Quay MV ngắn </h4>
                            <p class="card-text"></p>
                            <a class="btn btn-primary" href="/video">MV Ngắn Đặc Sắc</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                        <img class="card-img-top" src="https://c1.staticflickr.com/1/902/39516528610_85ff1c3435_b.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Quay video viral cùng 98 MEDIA </h4>
                            <p class="card-text"></p>
                            <a class="btn btn-primary" href="/video">Video Viral </a>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.Second slide-->

            <!--Third slide-->
            <div class="carousel-item">

                <div class="col-md-4">
                    <div class="card mb-2">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Design ấn phẩm theo ý tưởng của bạn </h4>
                            <p class="card-text"></p>
                            <a class="btn btn-primary">Design ấn phẩm đẹp</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Design Logo & Bộ nhận diện thương hiệu</h4>
                            <p class="card-text"></p>
                            <a class="btn btn-primary">Design Logo</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Design áo team áo lớp</h4>
                            <p class="card-text"></p>
                            <a class="btn btn-primary">Design áo team</a>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.Third slide-->

        </div>
        <a class="carousel-control-prev" href="#multi-item-example" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#multi-item-example" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->
</section>
<section class="text-center py-5 light-blue lighten-5 " id="pricing">
    <div class="container">
        <div class="wow fadeIn">
            <h2 class="h1 pt-5 pb-3">Dịch Vụ</h2>
            <p class="px-5 mb-5 pb-3 lead">
                98 Media cung cấp các dịch vụ
            </p>
        </div>
        <div class="row wow zoomIn">
            <div class="col-lg-4 col-md-12 mb-r">
                <div class="card card-image">
                    <div class=" text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded">
                        <div class="card-body">
                            <div class="h5">Chụp ảnh</div>
                            <div class="py-5"><sup class="display-4"><i class="fas fa-camera"></i></sup></div>
                            <ul class="list-unstyled">
                                <li>
                                    <p><strong>Quy mô</strong> Ekip Chuyên nghiệp</p>
                                </li>
                                <li>
                                    <p><strong>Kinh Nghiệm</strong> 02 năm trong nghề ảnh</p>
                                </li>
                                <li>
                                    <p><strong>Tận tình</strong> Hỗ trợ lên concept chụp cho khách</p>
                                </li>
                                <li>
                                    <p><strong>Hợp túi tiền </strong>Đến với 98 bạn sẽ không phải lo về giá </p>
                                </li>
                            </ul><a class="btn btn-outline-white mt-5" href="/photo"> Tôi chọn dịch vụ này ! </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-r">
                <div class="card card-image">
                    <div class=" text-center pricing-card d-flex align-items-center rgba-teal-strong py-3 px-3 rounded">
                        <div class="card-body">
                            <div class="h5">Quay phim ngắn</div>
                            <div class="py-5"><sup class="display-4"><i class="fas fa-video"></i></sup></div>
                            <ul class="list-unstyled">
                                <li>
                                    <p><strong>Thiết bị</strong> 98 Media mang tới những thiết bị tốt nhất để có
                                        những thước phim chất lượng cao nhất </p>
                                </li>
                                <li>
                                    <p><strong>Camera man</strong> có kinh nghiệm được đào tạo và tuyển dụng kĩ
                                        lưỡng</p>
                                </li>
                                <li>
                                    <p><strong>Editer</strong> có tư duy tốt , ý tưởng hay đảm bảo sẽ làm bộ phim
                                        của bạn đạt đỗ mãn nhãn tối đa</p>
                                </li>

                            </ul><a class="btn btn-outline-white mt-5" href="/video"> Tôi chọn dịch vụ này !</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-r">
                <div class="card card-image">
                    <div class="text-center pricing-card d-flex align-items-center rgba-red-strong py-3 px-3 rounded">
                        <div class="card-body">
                            <div class="h5">Thiết kế ấn phẩm</div>
                            <div class="py-5"><sup class="display-4"><i class="fas fa-desktop"></i></sup></div>
                            <ul class="list-unstyled">
                                <li>
                                    <p><strong>Designer</strong> Được tuyển dụng kĩ lưỡng có trình độ chuyên môn
                                        cao</p>
                                </li>
                                <li>
                                    <p><strong>Kinh nghiệm</strong> Với 02 năm kinh nghiệm làm nhiều dự án lớn đảm
                                        bảo sẽ đem lại cho quý khách những sản phẩm chất lượng nhất</p>
                                </li>
                                <li>
                                    <p><strong>Thời gian</strong> Luôn tối ưu hóa thời giản thực hiện sản phẩm , để
                                        quý khách hàng không phải chờ đợi lâu</p>
                                </li>

                            </ul><a class="btn btn-outline-white mt-5" href="/design"> Tôi chọn dịch vụ này !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 light-blue lighten-5" id="team" >
    <div class="container">
        <div class="wow fadeIn">
            <h2 class="h1 pt-5 pb-3 text-center">Thành viên 98 Media Viet Nam</h2>
            <p class="px-5 mb-5 pb-3 lead text-centen">

            </p>
        </div>
        <div class="row mb-lg-4 center-on-small-only">
            <div class="col-lg-6 col-md-12 mb-r wow fadeInLeft" data-wow-delay=".5s">
                <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('img/founder.jpg')}}"
                        alt="team member" /></div>
                <div class="col-md-6 float-right">
                    <div class="h4">Bình Minh Nguyễn</div>
                    <h6 class="font-bold blue-grey-text mb-4">Founder Photographer</h6>
                    <p class="grey-text">Người sáng lập 98MEDIA VIET NAM .</p><a href="https://www.facebook.com/MINHNB09"
                        target="_blank"><i class="fab fa-facebook"></i><span class="ml-1">@mr.nguyenbinhminh9897</span></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-r wow fadeInRight" data-wow-delay=".3s">
                <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('img/cameraman.jpg')}}"
                        alt="team member" /></div>
                <div class="col-md-6 float-right">
                    <div class="h4">Chung Bùi Văn</div>
                    <h6 class="font-bold blue-grey-text mb-4">Camera Man & Editer</h6>
                    <p class="grey-text">lalalallalala</p><a href="https://www.facebook.com/profile.php?id=100007021053031"
                        target="_blank"><i class="fab fa-facebook"></i><span class="ml-1">@buichung98media</span></a>
                </div>
            </div>
        </div>
        <div class="row center-on-small-only">
            <div class="col-lg-6 col-md-12 mb-r " data-wow-delay=".3s">
                <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('img/designer.jpg')}}"
                        alt="team member" /></div>
                <div class="col-md-6 float-right">
                    <div class="h4">Trương Nguyễn Thanh Thảo</div>
                    <h6 class="font-bold blue-grey-text mb-4">Designer</h6>
                    <p class="grey-text">lellelelelelelellel</p><a href="https://www.facebook.com/thanhthao.truong.112"
                        target="_blank"><i class="fab fa-facebook"></i><span class="ml-1">@thanhthaodesigner</span></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-r wow fadeInRight" data-wow-delay=".3s">
                <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('img/editer.jpg')}}"
                        alt="team member" /></div>
                <div class="col-md-6 float-right">
                    <div class="h4">Huy Vector</div>
                    <h6 class="font-bold blue-grey-text mb-4">Pro Camera man & Editer</h6>
                    <p class="grey-text">Procameraman lalala</p><a href="https://www.facebook.com/vector710" target="_blank"><i
                            class="fab fa-facebook"></i><span class="ml-1">@huyvector98media</span></a>
                </div>
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
                                    <p class="mt-2">Kết nối với chúng tôi trên intagram</p>
                                <li class="mt-4"><a href="https://www.youtube.com/channel/UCIdYAQShWmQwkLUfT6MarZQ?view_as=subscriber" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
                                    <p class="mt-2">Channel 98 MEDIA VIET NAM</p> </li>
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