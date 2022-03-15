@extends('client.master.master')

@section('services')
 <!-- ======= Services Section ======= -->
 <section id="services" class="services section-bg">
        <div class="container">
            <div class="align-items-stretch text-center">
            <div class="section-title" data-aos="fade-right">
                <h2>Dịch vụ</h2>
                <p>BH Store mang đến cho khách hàng nhiều loại hình dịch vụ chuyên nghiệp</p>
            </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                <div class="col-md-3 d-flex align-items-stretch ">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4><a href="">Sữa chửa, nâng cấp máy tính, laptop</a></h4>
                    <a href="{{ asset('client/assets/img/price-fixing-service.png')}}" data-caption="Bảng giá dịch vụ sửa chữa máy tính">
                        <button type="button" class="btn-get-started scrollto" data-bs-toggle="modal" data-bs-target="#pcService">
                        Tham khảo
                        </button>
                    </a>
                    <!-- Modal Popup Services Refill Printer"s ink -->

                    </div>

                </div>

                <div class="col-md-3 d-flex align-items-stretch ">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4><a href="">Sửa chữa, nạp mực máy in</a></h4>
                    <a href="{{ asset('client/assets/img/price-printer.png')}}" data-caption="Bảng giá dịch vụ nạp mực máy in">
                    <button type="button" class="btn-get-started scrollto" data-bs-toggle="modal" data-bs-target="#printerInk">
                        Tham khảo
                    </button></a>
                    </div>
                </div>

                <div class="col-md-3 d-flex align-items-stretch ">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                    <h4><a href="">Cung cấp thiết bị, linh kiện máy tính, laptop</a></h4>
                    <a href="#about" class="btn-get-started scrollto" name="tk-3">Tham khảo</a>
                    <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p> -->
                    </div>
                </div>

                <div class="col-md-3 d-flex align-items-stretch ">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon"><i class="bx bx-world"></i></div>
                    <h4><a href="">Gia công Website quảng bá</a></h4>
                    <a href="#about" class="btn-get-started scrollto" name="tk-4">Tham khảo</a>
                    <!-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p> -->
                    </div>
                </div>

                </div>
            </div>


        </div>
    </section>
    <!-- End Services Section -->
@endsection
