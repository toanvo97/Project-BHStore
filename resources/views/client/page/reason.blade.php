@extends('client.master.master')

@section('reason')
 <!-- Reason why customer should choose BH Store  -->
 <section id="reason" class="reason">
        <div class="container">
            <div class="reason-title" data-aos="jump-in">
            <h2>Lý do bạn nên lựa chọn BH Store hơn là các cửa hàng khác</h2>
            </div>
            <div class="row">
            <div class="col-sm-6">
                <div class="reason-content dv">
                <p class="reason-detail" data-aos="fade-right" data-aos-delay="100"> Đối với BH Store khách hàng là trên hết rồi mới đến lợi nhuận</p>
                <p class="reason-detail" data-aos="fade-right" data-aos-delay="200">BH Store mang đến dịch vụ đầy đủ từ phần cứng đến phần mềm</p>
                <p class="reason-detail" data-aos="fade-right" data-aos-delay="300">Chi phí tốt, sản phẩm chất lượng</p>
                <p class="reason-detail" data-aos="fade-right" data-aos-delay="400">Hỗ trợ tận  nơi, phục vụ 24/7</p>
                </div>
            </div>
            <div class="col-sm-6" data-aos="fade-left">
                <div class="reason-img">
                <img class="img-fluid" src="{{ asset('client/assets/img/unnamed.jpg')}}" alt="">
                </div>
            </div>
            </div>
            <div class="col-xs-12 btn-dk" data-aos="flip-right"><div class="btn-dk-ngay">
                <a class="fadeInDown" href="#contact"> Đăng ký tư vấn</a>
            </div>
            </div>
        </div>
    </section>
    <!-- End Reason -->
@endsection
