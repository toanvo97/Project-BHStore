@extends('client.master.master')

@section('title','Trang chi tiết sản phẩm')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="{{asset('client/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('client/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="{{asset('client/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('client/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('client/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('client/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('client/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('client/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('client/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('client/assets/vendor/fotorama/fotorama.css')}}" rel="stylesheet">

  <link href="{{asset('client/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('client/assets/css/custom.css')}}" rel="stylesheet">

  <!-- Hide the wrapper element when first page loading -->
  <style>
    .hidden{
      display: none;
    }
  </style>

  <link rel="stylesheet" href="{{asset('client/assets/vendor/fancybox/dist/jquery.fancybox.min.css')}}">
@endsection

@section('header')
    @include('client.layout.header')
@endsection

@section('content')
<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Chi tiết sản phẩm</h2>
          <ol>
            <li><a href="index.html">Trang chủ</a></li>
            <li>Chi tiết sản phẩm</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6">
            <!-- <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/product/laptop-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/product/laptop-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/product/laptop.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div> -->
            <div class="fotorama" data-arrows="false" data-nav="thumbs"  data-width="100%" data-max-width="100%" data-transition="slide" data-autoplay="true" data-clicktransition="crossfade">
              <img id="myimage" src="{{asset('client/assets/img/product/laptop-1.jpg')}}" alt="">
              <img id="myimage" src="{{asset('client/assets/img/product/laptop-2.jpg')}}" alt="">
              <img id="myimage" src="{{asset('client/assets/img/product/laptop.jpg')}}" alt="">
            </div>

          </div>

          <div class="col-lg-6">
            <div class="portfolio-info">
              <h3>DELL 15 inch dòng Inspiron 3542</h3>
              <h4>Thông tin chung</h4>
              <p>Thương hiệu: <span class="brand-name">Dell</span> | Tình trạng: <span class="product-status">Còn hàng</span></p>
              <p><span class="price">6.100.000₫</span> <del class="original-price">6.300.000₫</del></p>
              <ul>
                <li><strong>Bộ vi xử lí</strong> : Intel® Pentium 3558U 1.7GHZ</li>
                <li><strong>Ram</strong> : 4 GB</li>
                <li><strong>Đĩa cứng</strong> : 500 GB</li>
                <li><strong>Màn hình</strong> : 15.6" HD</li>
                <li><strong>Card đồ họa</strong> : lntel HD Graphics</li>
              </ul>
            </div>

            <!-- <div class="portfolio-description">
              <h2>DELL 15 inch dòng Inspiron 3542 (màu đen)</h2>
              <p>
                Dell inspiron 15 thế hệ 5 15.6″ có thiết kế mỏng nhẹ  21,4mm, nặng 2,13 kg, thời lượng pin từ 4- 6 giờ liên tục. Khung máy bằng chất liệu plastic màu đen có vân nhám chống vân tay.
                Chiếc máy cho âm thanh chất lượng cao bằng công nghệ Waves MaxxAudio® của Dell
                Bộ xử lý Intel® Pentium 3558U 1.7GHz
                Hệ điều hành Windows® 10 64bit licence
                HDD: 500GB sata
                Âm thanh chất lượng cao với Waves MaxxAudio®
                Pin sử dụng lâu 6 giờ
                Camera HD mạnh mẽ với "Exmor for PC”
              </p>
            </div> -->
          </div>

        </div>

          <!-- Tab links -->
      <div class="tab">
        <button class="tablinks" onclick="tabPanel(event, 'Description')" id="defaultOpen">Mô tả sản phẩm</button>
        <button class="tablinks" onclick="tabPanel(event, 'Feature')" >Đặc điểm nổi bật</button>
        <button class="tablinks" onclick="tabPanel(event, 'Warranty')">Thông tin bảo hành</button>
      </div>

      <!-- Tab content -->
      <div id="Feature" class="tabcontent">
        <h3>Đặc điểm nổi bật</h3>
        <p>Laptop Dell Inspiron 3542 sở hữu một cấu hình khá tốt, thiết kế mới đẹp và sang trọng hơn, cùng mức giá rất hợp lý.
          Dell Inspiron 3542 đang được bán ra tại thị trường Việt nam gồm có 4 model khác nhau về bộ xử lý và card đồ họa: Một model có vi xử lý Core i3 cùng card đồ họa Nvidia Geforce 2GB, một phiên bản dùng bộ xử lý Core i3 card đồ họa onboard HD Graphics 4400, một model tương tự như vậy nhưng được cài đặt sẵn Windows 8 bản quyền 64 bit, phiên bản còn lại chạy chip xử lý Core i5 có tích hợp card đồ họa rời Geforce 2GB.

          1. Thiết kế
          Dell Inspiron 3542 mang một vẻ ngoài khá đơn giản, các góc cạnh được làm vuông vức, mặt lưng được phủ một lớp sơn nhám có thể chống bám bụi và vân tay tốt. Kết cấu của máy khá chắc chắn, thử nghiệm cho thấy bộ khung của máy không bị sao khi rơi ở độ cao 30 cm xuống đất (Khuyến cáo bạn đọc không nên thử vì đây là sự cố ngoài ý muốn)</p>
      </div>

      <div id="Description" class="tabcontent">
        <h3>Thông số kỹ thuật</h3>
        <p>Cấu hình nổi bật
          Bộ vi xử lí :Intel® Pentium 3558U 1.7GHZ
          Ram :4 GB
          Đĩa cứng :500 GB
          Màn hình :15.6" HD
          Card đồ họa :lntel HD Graphics
          Thương Hiệu
          Thương hiệu :Dell
          Dòng/Part sản phẩm :INSPIRON 3542
          CPU
          Bộ vi xử lí :Intel® Pentium 3558U 1.7GHZ
          Bộ nhớ đệm :2M cache
          RAM
          Ram :4 GB
          Loại Ram :DDR3L 1600Mhz
          Hỗ trợ Ram tối đa :1600Mhz (4GB (SO-DIMM) x1) nâng cấp tối đa lên 8Gz
          Đĩa Cứng
          Đĩa cứng :500 GB
          Loại đĩa cứng :Sata 5400rpm
          Card đồ họa
          Kiểu thiết kế VGA :lntel HD Graphics
          Bộ nhớ đồ họa :2.0 G
          Card đồ họa :lntel HD Graphics
          Màn hình
          Công nghệ màn hình :15.6 inch HD (13 66 x 768) Truelife LED-Backlit Display
          Màn hình :15.6" HD
          Hệ điều hành
          Hệ Điều Hành :Windows® 10 64bit licence
          Giao tiếp mạng
          Chuẩn Wifi :Intel® 3160AC
          Bluetooth :Chuẩn Bluetooth 4.0
          Cổng kết nối & Audio
          Audio :Stereo speakers professionally tuned with Waves MaxxAudio® Pro 1W x 2 = 2W total
          Cổng Kết Nối :HDMI™ 1.4a, USB 3.0 (1), USB 2.0 (2), Security slot, Media Card (SD, SDHC, SDXC)
          Pin/Battery
          Thời gian sử dụng :Up to~5 hours of battery life
          Tùy chọn theo máy (option)
          Ổ đĩa quang :DVDRW
          Camera :HD (720p) capable webcam, microphone
          Đèn bàn phím :Full size, English keyboard . Có bàn phím số
          Touchpad :Multi-touch gesture-enabled pad with integrated scrolling
          Trọng lượng & kich thước
          Kích Thước :21.4mm (0.84") x Width: 345mm (13.58") x Depth: 243mm (9.57")
          Trọng Lượng :2.2 KG
          Màu Sắc :Đen
          Chất liệu máy :Plastic
          Xuất Xứ / Tiêu chuẩn
          Tiêu chuẩn hàng hóa :New full box
          Xuất xứ :Nhập từ Mỹ
          Thông tin khác
          Tính Năng Nổi Bật :Âm thanh chất lượng cao với Waves MaxxAudio®</p>
      </div>

      <div id="Warranty" class="tabcontent">
        <h3>Chính sách bảo hành</h3>
        <p>Bảo hành 1 năm</p>
      </div>
      </div>

    </section>
    <!-- End Portfolio Details Section -->

    <!-- Comment facebook -->
    <section id="comment" class="comment">
      <div class="container">

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="5MW7ASm2"></script>
        <div class="fb-comments" data-href="https://www.facebook.com/bhstore.page" data-width="100%" data-numposts="10"></div>
      </div>
    </section>

    <!-- Section product suggestion -->
    <section id="suggestion" class="suggestion section-bg ">
      <div class="container">

          <div class="section-title justify-content-center text-left" data-aos="fade-right" style="position: relative;">
            <h2>Sản phẩm liên quan</h2>
            <a href="#"><h5>Xem tất cả<i class='bx bx-chevron-right'></i></h5></a>
            <!-- <p>("Mọi đánh giá của khách hàng tiếp thêm nguồn động lực cho BH Store")</p> -->
          </div>

        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">

          <div class="suggestion-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="suggestion-item">
                  <!-- <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Chất lượng tuyệt vời, nhân viên tay nghề cao, nhiệt tình với khách. Tôi đánh giá cao BH Store
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p> -->
                  <img src="{{asset('client/assets/img/product/LENOVO-THINKPADx260.jpg')}}" class="suggestion-img" alt="">
                  <h3>Laptop LENOVO THINKPAD x260</h3>
                  <del>7,700,000₫</del>
                  <h4>7,450,000₫</h4>   
                </div>
              </div><!-- End suggestion item -->

              <div class="swiper-slide">
                <div class="suggestion-item">
                  <!-- <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Chất lượng tuyệt vời, nhân viên tay nghề cao, nhiệt tình với khách. Tôi đánh giá cao BH Store
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p> -->
                  <img src="{{asset('client/assets/img/product/ssd-2.jpg')}}" class="suggestion-img" alt="">
                  <h3>Laptop LENOVO THINKPAD x260</h3>
                  <del>7,700,000₫</del>
                  <h4>7,450,000₫</h4>
                </div>
              </div><!-- End suggestion item -->

              <div class="swiper-slide">
                <div class="suggestion-item">
                  <!-- <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Chất lượng tuyệt vời, nhân viên tay nghề cao, nhiệt tình với khách. Tôi đánh giá cao BH Store
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p> -->
                  <img src="{{asset('client/assets/img/product/LENOVO-THINKPADx260.jpg')}}" class="suggestion-img" alt="">
                  <h3>Laptop LENOVO THINKPAD x260</h3>
                  <del>7,700,000₫</del>
                  <h4>7,450,000₫</h4>
                </div>
              </div><!-- End suggestion item -->

              <div class="swiper-slide">
                <div class="suggestion-item">
                  <!-- <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Chất lượng tuyệt vời, nhân viên tay nghề cao, nhiệt tình với khách. Tôi đánh giá cao BH Store
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p> -->
                  <img src="{{asset('client/assets/img/product/LENOVO-THINKPADx260.jpg')}}" class="suggestion-img" alt="">
                  <h3>Laptop LENOVO THINKPAD x260</h3>
                  <del>7,700,000₫</del>
                  <h4>7,450,000₫</h4>
                </div>
              </div><!-- End suggestion item -->

              <div class="swiper-slide">
                <div class="suggestion-item">
                  <!-- <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Chất lượng tuyệt vời, nhân viên tay nghề cao, nhiệt tình với khách. Tôi đánh giá cao BH Store
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p> -->
                  <img src="{{asset('client/assets/img/product/LENOVO-THINKPADx260.jpg')}}" class="suggestion-img" alt="">
                  <h3>Laptop LENOVO THINKPAD x260</h3>
                  <del>7,700,000₫</del>
                  <h4>7,450,000₫</h4>
                </div>
              </div><!-- End suggestion item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </section>
@stop

@section('js')
<!-- Vendor JS Files -->
<script src="{{asset('client/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('client/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('client/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('client/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('client/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('client/assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('client/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('client/node_modules/jquery/dist/jquery.js')}}"></script>
<!-- Template Main JS File -->
<script src="{{asset('client/assets/js/main.js')}}"></script>

<!-- FancyBox for zoom in picture -->
<script src="{{asset('client/assets/vendor/fancybox/dist/jquery.fancybox.min.js')}}"></script>

<!-- Fotorama for set up moving image -->
<script src="{{asset('client/assets/vendor/fotorama/fotorama.js')}}"></script>

<script>
   /**
   * Portfolio-details tab panel
   */
    // Set tab by default
   document.getElementById("defaultOpen").click();

   function tabPanel(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
    }

</script>
@endsection

@section('footer')
    @include('client.layout.footer')
@endsection
