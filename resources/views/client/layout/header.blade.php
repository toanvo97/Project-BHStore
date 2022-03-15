@extends('client.master.master')

@section('header')
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="{{asset('/')}}"><span>BH Store</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Trang chủ</a></li>
            <li><a class="nav-link scrollto" href="#about">Về BH-Store</a></li>
            <li><a class="nav-link scrollto" href="#services">Dịch vụ</a></li>
            <li><a class="nav-link scrollto " href="#portfolio">Sản phẩm</a></li>
            <li><a class="nav-link scrollto" href="#team">Đội ngũ</a></li>
            <li class="dropdown"><a href="#portfolio"><span>Chuyên mục</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li class="dropdown"><a href="#"><span>PC - Laptop</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="#">Chuột - Bàn phím</a></li>
                    <li><a href="#">Màn hình</a></li>
                    <li><a href="#">Nguồn</a></li>
                    <li><a href="#">Ổ cứng</a></li>
                    <li><a href="#">USB</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Máy in</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="#">Mực máy in</a></li>
                    <li><a href="#">Hộp mực</a></li>
                  </ul>
                </li>
                <li><a href="#">Website</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="#contact">Liên hệ</a></li>
            <li><a class="getstarted scrollto" href="#about">Tham Khảo</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>BH Store</h1>
      <h2>Mang đến trải nghiệm dịch vụ chuyên nghiệp và nhanh chóng cho khách hàng</h2>
      <a href="#about" class="btn-get-started scrollto">Tham khảo</a>
    </div>
  </section>
  <!-- End Hero -->

@endsection
