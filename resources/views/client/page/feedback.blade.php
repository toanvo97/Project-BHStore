@extends('client.master.master')

@section('feedback')
    <!-- ======= feedback Section ======= -->
    <section id="feedback" class="feedback section-bg ">
        <div class="container">

            <div class="section-title justify-content-center text-center" data-aos="fade-right">
                <h2>Đánh giá của khách hàng</h2>
                <p>("Mọi đánh giá của khách hàng tiếp thêm nguồn động lực cho BH Store")</p>
            </div>

            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">

            <div class="feedback-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="feedback-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Chất lượng tuyệt vời, nhân viên tay nghề cao, nhiệt tình với khách. Tôi đánh giá cao BH Store
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{ asset('client/assets/img/feedback/feedback-1.jpg')}}" class="feedback-img" alt="">
                    <h3>Anh Đạt Nguyễn</h3>
                    <h4>Khách hàng</h4>
                    </div>
                </div><!-- End feedback item -->

                <div class="swiper-slide">
                    <div class="feedback-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Chất lượng tuyệt vời, nhân viên tay nghề cao, nhiệt tình với khách. Tôi đánh giá cao BH Store
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{ asset('client/assets/img/feedback/feedback-2.jpg')}}" class="feedback-img" alt="">
                    <h3>Chị Trang Thùy Nguyễn</h3>
                    <h4>Khách hàng</h4>
                    </div>
                </div><!-- End feedback item -->

                <div class="swiper-slide">
                    <div class="feedback-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Chất lượng tuyệt vời, nhân viên tay nghề cao, nhiệt tình với khách. Tôi đánh giá cao BH Store
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{ asset('client/assets/img/feedback/feedback-3.jpg')}}" class="feedback-img" alt="">
                    <h3>Chị Mít ƯỚc</h3>
                    <h4>Khách hàng</h4>
                    </div>
                </div><!-- End feedback item -->

                <div class="swiper-slide">
                    <div class="feedback-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Chất lượng tuyệt vời, nhân viên tay nghề cao, nhiệt tình với khách. Tôi đánh giá cao BH Store
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{ asset('client/assets/img/feedback/feedback-4.jpg')}}" class="feedback-img" alt="">
                    <h3>ANh Hùng Đỗ</h3>
                    <h4>Khách hàng</h4>
                    </div>
                </div><!-- End feedback item -->

                <div class="swiper-slide">
                    <div class="feedback-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Chất lượng tuyệt vời, nhân viên tay nghề cao, nhiệt tình với khách. Tôi đánh giá cao BH Store
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{ asset('client/assets/img/feedback/feedback-5.jpg')}}" class="feedback-img" alt="">
                    <h3>Anh Tèo Nguyễn </h3>
                    <h4>Khách Hàng</h4>
                    </div>
                </div><!-- End feedback item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>
            </div>
        </div>
    </section>
    <!-- End feedback Section -->
@endsection
