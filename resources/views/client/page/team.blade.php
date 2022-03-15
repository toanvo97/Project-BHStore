@extends('client.master.master')

@section('team')
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="row justify-content-center text-center">
            <div class="col-lg-12">
                <div class="section-title" data-aos="fade-right">
                <h2>Đội ngũ BH Store</h2>
                <p>Bh Store's members are the beast</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">

                <div class="col-lg-4">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pic"><img src="{{ asset('client/assets/img/team/hang.jpg')}}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Trần Thị Thanh Hằng</h4>
                        <span>Seller, Customer Service, HR at BH Store</span>
                        <p>Tư vấn viên, Quảng trị page BH Store</p>
                        <!-- <div class="social">
                        <a href=""><i class="ri-twitter-fill"></i></a>
                        <a href=""><i class="ri-facebook-fill"></i></a>
                        <a href=""><i class="ri-instagram-fill"></i></a>
                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div> -->
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                    <div class="pic"><img src="{{ asset('client/assets/img/team/bao.jpg')}}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Võ Duy Bảo</h4>
                        <span>Seller, Technician, Developer</span>
                        <p>Tư vấn viên, Kỹ thuật viên chính của BH Store</p>
                        <!-- <div class="social">
                        <a href=""><i class="ri-twitter-fill"></i></a>
                        <a href=""><i class="ri-facebook-fill"></i></a>
                        <a href=""><i class="ri-instagram-fill"></i></a>
                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div> -->
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="member" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pic"><img src="{{ asset('client/assets/img/team/toan.jpg')}}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Võ Tiến Toàn</h4>
                        <span>Seller, Customer Service, Technician, Developer</span>
                        <p>Tư vấn viên, Nhân viên hỗ trợ khách hàng, Kỹ thuật viên Bh Store</p>
                        <!-- <div class="social">
                        <a href=""><i class="ri-twitter-fill"></i></a>
                        <a href=""><i class="ri-facebook-fill"></i></a>
                        <a href=""><i class="ri-instagram-fill"></i></a>
                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div> -->
                    </div>
                    </div>
                </div>
                </div>

            </div>
            </div>

        </div>
    </section>
    <!-- End Team Section -->
@endsection
