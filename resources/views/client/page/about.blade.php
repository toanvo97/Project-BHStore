
@extends('client.master.master')

@section('about')
<!-- ======= About Section ======= -->
    <section id="about" class="about">
    <div class="container">

        <div class="row content">
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <!-- <h2>BH Store</h2> -->
            <img src="{{ asset('client/assets/img/logo-bh-1.png')}}" alt="">
            <!-- <h3>Chuyên laptop, máy tính, máy in các loại - Gia công Website quảng bá thương hiệu</h3> -->
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p>
                BH Store cung cấp các thiết bị, linh kiện máy tính, máy in, gia công website. Với tiêu chí chăm sóc khách hàng
                tận tâm, mang đến chất lượng dịch vụ tốt nhất. BH Store chuyên:
            </p>
            <ul>
            <li><i class="ri-check-double-line"></i> Sửa chữa nâng cấp Máy tính - Laptop</li>
            <li><i class="ri-check-double-line"></i> Nạp mực, sửa chữa máy in các loại tận nơi</li>
            <li><i class="ri-check-double-line"></i> Bán tất cả các linh kiện máy tính</li>
            <li><i class="ri-check-double-line"></i> Gia công Website quảng bá thương hiệu cho các doanh nghiệp</li>
            </ul>
            <p class="fst-italic">
            Nhanh chóng, tiện lợi, tận tâm, chuyên nghiệp
            </p>
        </div>
        </div>

    </div>
    </section>
<!-- End About Section -->

@endsection
