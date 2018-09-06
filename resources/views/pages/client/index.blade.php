@extends('client.master')

@section('content')

<section class="row no-gutters" id="features">
    <div class="col-lg-3 col-md-6 col-sm-12 blue bg-blue lighten-1 text-white">
        <div class="p-5 text-center wow zoomIn" data-wow-delay=".1s"><i class="fas fa-camera-retro 3x fa-3x"></i>
            <div class="h5 mt-3"> Photography </div>
            <p class="mt-5">Một sự lựa chọn tuyệt vời để lưu những khoảng khắc đẹp của chính bạn và người thân </p>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 teal lighten-1 text-white">
        <div class="p-5 text-center wow zoomIn" data-wow-delay=".3s"><i class="fas fa-video 5x fa-3x"></i>
            <div class="h5 mt-3">Film Maker </div>
            <p class="mt-5">Với ekip chuyên nghiệp có kinh nghiệm lâu năm trong lĩnh vực quay và dựng sẽ làm cho
                quý khách hài lòng trên từng thước phim</p>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 cyan lighten-1 text-white">
        <div class="p-5 text-center wow zoomIn" data-wow-delay=".5s"><i class="fas fa-desktop fa-3x"></i>
            <div class="h5 mt-3"> Graphic Design</div>
            <p class="mt-5">Với đội ngũ designer giàu kinh nghiệm , năng động và tâm huyết với từng sản phẩm , Quý
                khách hàng hoàn toàn có thể yên tâm cùng 98Media !</p>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 light-blue lighten-1 text-white">
        <div class="p-5 text-center wow zoomIn" data-wow-delay=".7s"><i class="far fa-edit fa-3x"></i>
            <div class="h5 mt-3">Video Edit</div>
            <p class="mt-5">Video Editer hàng đầu tại Hà Nội đảm trách , cam kết khách hàng không ưng không lấy
                tiền ! </p>
        </div>
    </div>
</section>
<section class="text-center py-5 grey lighten-4" id="about">
    <div class="container">
        <div class="wow fadeIn">
            <h2 class="h1 pt-5 pb-3">Về 98 Media Team</h2>
            <p class="px-5 mb-5 pb-3 lead blue-grey-text">
                Chuyên nghiệp =)))

            </p>
        </div>
        <div class="row">
            <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay=".3s"><i class="fas fa-tachometer-alt fa-3x orange-text"></i>
                <h3 class="h4 mt-3">Đa dạng về lựa chọn </h3>
                <p class="mt-3 blue-grey-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                    minima assumenda deleniti
                    hic.
                </p>
            </div>
            <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay=".4s"><i class="fas fa-star fa-3x cyan-text"></i>
                <h3 class="h4 mt-3">Được đánh giá rất cao </h3>
                <p class="mt-3 blue-grey-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                    minima assumenda deleniti
                    hic.
                </p>
            </div>
            <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay=".5s"><i class="fa fa-cubes fa-3x red-text"></i>
                <h3 class="h4 mt-3">Rút ngắn thời gian của khách hàng </h3>
                <p class="mt-3 blue-grey-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                    minima assumenda deleniti
                    hic.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="text-center py-5 indigo darken-1 text-white" id="pricing">
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
                    <div class="text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded">
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
                    <div class="text-white text-center pricing-card d-flex align-items-center rgba-teal-strong py-3 px-3 rounded">
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
                    <div class="text-white text-center pricing-card d-flex align-items-center rgba-red-strong py-3 px-3 rounded">
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
<section class="py-5" id="team">
    <div class="container">
        <div class="wow fadeIn">
            <h2 class="h1 pt-5 pb-3 text-center">Thành viên 98 Media Viet Nam</h2>
            <p class="px-5 mb-5 pb-3 lead text-center blue-grey-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident
                voluptate
                esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.
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
<section id="contact" style="background-image:url('img/panorama-3094696_1920.jpg');">
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
                                            <input class="form-control" id="name" type="text" name="name" required="required" />
                                            <label for="name">Tên của bạn</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input class="form-control" id="message" type="text" name="_replyto"
                                                required="required" />
                                            <label for="email">Số điện thoại liên hệ</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form">
                                            <input class="form-control" id="subject" type="text" name="subject"
                                                required="required" />
                                            <label for="subject">Loại dịch vụ đang quan tâm</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="md-form">
                                            <textarea class="md-textarea" id="message" name="message" required="required"></textarea>
                                            <label for="message">Lời nhắn với chúng tui</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="center-on-small-only mb-4">
                                    <button class="btn btn-indigo ml-0" type="submit"><i class="fa fa-paper-plane-o mr-2"></i>
                                        Send</button>
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
@endsection