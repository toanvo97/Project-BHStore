@extends('client.master.master')

@section('portfolio')

    <!-- ======= Product Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title text-center" data-aos="fade-left">
            <h2>Lap top, linh kiện máy tính - máy in, Mẫu Website</h2>
            <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">Tất cả</li>
                <li data-filter=".filter-pc">Máy tính</li>
                <li data-filter=".filter-printer">Máy in</li>
                <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-pc">
                <div class="portfolio-wrap">
                <img src="{{ asset('client/assets/img/product/laptop-1.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Laptop Dell</h4>
                    <p>Lap top</p>
                    <div class="portfolio-links">
                    <a href="{{ asset('client/assets/img/product/laptop-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Laptop Dell"><i class="bx bx-plus"></i></a>
                    <a href="{{ asset('/san-pham/chi-tiet-san-pham/1')}}" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-pc">
                <div class="portfolio-wrap">
                <img src="{{ asset('client/assets/img/product/combo-keyboard-mouse.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Combo bàn phím và chuột</h4>
                    <p>Keyboard & mouse</p>
                    <div class="portfolio-links">
                    <a href="{{ asset('client/assets/img/product/combo-keyboard-mouse.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Combo bán phím và chuột wireless"><i class="bx bx-plus"></i></a>
                    <a href="product-detail.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-pc">
                <div class="portfolio-wrap">
                <img src="{{ asset('client/assets/img/product/ssd-1.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>SSD KingMax</h4>
                    <p>SSD</p>
                    <div class="portfolio-links">
                    <a href="{{ asset('client/assets/img/product/ssd-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Combo bán phím và chuột wireless"><i class="bx bx-plus"></i></a>
                    <a href="product-detail.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-pc">
                <div class="portfolio-wrap">
                <img src="{{ asset('client/assets/img/product/ssd-2.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>SSD KingMax Plus</h4>
                    <p>SSD</p>
                    <div class="portfolio-links">
                    <a href="{{ asset('client/assets/img/product/ssd-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Combo bán phím và chuột wireless"><i class="bx bx-plus"></i></a>
                    <a href="product-detail.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-printer">
                <div class="portfolio-wrap">
                <img src="{{ asset('client/assets/img/product/rsz_3laptop-2.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Laptop Dell</h4>
                    <p>Lap top</p>
                    <div class="portfolio-links">
                    <a href="{{ asset('client/assets/img/product/rsz_3laptop-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                    <a href="product-detail.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                <img src="{{ asset('client/assets/img/product/laptop.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Laptop Dell </h4>
                    <p>Laptop</p>
                    <div class="portfolio-links">
                    <a href="{{ asset('client/assets/img/product/laptop.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                    <a href="product-detail.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                </div>
            </div>

            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->
@endsection
