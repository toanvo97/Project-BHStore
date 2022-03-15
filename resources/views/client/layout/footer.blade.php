@extends('client.master.master')

@section('footer')
<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
    <div class="container">
        <div class="row">
        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <!-- <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3919.904950339838!2d106.70815516535168!3d10.741808662767665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x31752f9cd8d3d53b%3A0x801ca54b762f6717!2zNjcgSOG6u20gVsaw4budbiDEkGnhu4F1LCBUw6JuIFF1eSwgUXXhuq1uIDcsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmlldG5hbQ!3m2!1d10.7418787!2d106.710419!5e0!3m2!1sen!2s!4v1635906588875!5m2!1sen!2s" width="100%" height="270" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-lg-6 col-md-6 footer-links">
            <h4 data-aos="fade-right" data-aos-delay="100">BH Store</h4>
            <h5 data-aos="fade-right" data-aos-delay="200">Chuyên máy tinh, laptop, máy in, gia công website quảng bá</h5>
            <ul>
            <li data-aos="fade-right" data-aos-delay="100"><i class="bx bx-map"></i> <a href="#">67/66 hẻm Vườn Điều , phường tân quy , quận 7, Thành phố Hồ Chí Minh</a></li>
            <li data-aos="fade-right" data-aos-delay="200"><i class="bx bx-phone"></i> <a href="#">SĐT:  0934120344</a></li>
            <li data-aos="fade-right" data-aos-delay="300"><i class="bx bx-mail-send"></i> <a href="#">Email: Info.bhstore@gmail.com</a></li>
            <li data-aos="fade-right" data-aos-delay="400"><i class="bx bx-phone"></i> <a href="#">Hotline:  0934120344</a></li>
            </ul>
        </div>
        </div>
    </div>
    </div>

    <div class="container d-md-flex py-4">

    <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
        &copy; Copyright <strong><span>BH Store</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
        <a href="https://www.facebook.com/bhstore.page" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
    </div>
    </div>
</footer>
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- <a href="https://zalo.me/0348.76.98.50"><div class="zalo-chat-widget" data-oaid="579745863508352884" data-welcome-message="Bh Store giúp đươc gì cho bạn ^.^" data-autopopup="0" data-width="300" data-height="300"></div></a>

<script src="https://sp.zalo.me/plugins/sdk.js"></script> -->

<!-- <a href="http://zalo.me/0934.12.03.44" target="_blank"><div id="zalo"></div></a> -->

<div id="show" class="lienhe_ngay">
<p>Liên hệ</p>
</div>

<!-- Buttons Contact left -->
<div class="wrapper hidden" id="wrapper" >
  <div class="button">
    <a href="https://www.facebook.com/bhstore.page" target="_blank"><div class="icon">
      <i class="fa fa-facebook-f"></i>
    </div>
    <span>BH Store</span></a>
  </div>
  <div class="button" id="myBtn">
    <div class="icon">
      <i class="fa fa-envelope"></i>
    </div>
   <span>Gửi mail cho BH Store</span>
  </div>
  <div class="button">
    <a href="http://zalo.me/0934.12.03.44" target="_blank">
      <div class="icon">
       <img class="zalo" src="{{ asset('client/assets/img/icon/zalo.png')}}" alt="">
      </div>
      <span>Hỗ trợ kỹ Thuật BH Store</span></a>
  </div>
  <div class="button">
    <a href="https://goo.gl/maps/hYDScw8M8hvdE6R29" target="_blank">
      <div class="icon">
        <img class="map" src="{{ asset('client/assets/img/icon/GoogleMap_Icon.png')}}" alt="">
      </div>
      <span>Xem đường dẫn đến BH Store</span></a>
  </div>
  <div class="button">
    <a href="tel:0934.12.03.44"><div class="icon">
      <i class="fa fa-phone"></i>
    </div>
   <span>Mr.Bảo (0934.12.03.44)</span></a>
  </div>
  <!-- src="views/template/frontend/images/GoogleMap_Icon.png" -->
</div>

<!-- Modal popup sending mail -->
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <span class="close">&times;</span>
  <h2>Để lại thông tin liên hệ</h2>
  <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
    <div class="row">
      <div class="col-md-12 form-group mt-3">
        <input type="text" name="name" class="form-control" id="name" placeholder="Họ và tên" required>
      </div>
      <div class="col-md-12 form-group mt-3">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
      </div>
    </div>
    <div class="form-group mt-3">
      <input type="text" class="form-control" name="subject" id="subject" placeholder="Tiêu đề" required>
    </div>
    <div class="form-group mt-3">
      <textarea class="form-control" name="message" rows="5" placeholder="Lời nhắn" required></textarea>
    </div>
    <div class="my-3">
      <div class="loading">Loading</div>
      <div class="error-message"></div>
      <div class="sent-message">Tư vấn đã được gửi, cảm ơn!</div>
    </div>
    <div class="text-center"><button type="submit">Gửi</button></div>
  </form>
</div>

</div>
@endsection
