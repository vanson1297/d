@extends('layout')
@section('title')
Về Chúng Tôi - Vách Ngăn SSA
@endsection
@section('submenu')
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Về Chúng Tôi</h1>
            <div class="custom-breadcrumbs">
              <a href="{{ route ('trang chu')}}">Trang chủ</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Về Chúng Tôi</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('content')
<section class="site-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a data-fancybox="" data-ratio="2" href="https://youtu.be/98Qza6ATtTs" class="block__96788">
              <span class="play-icon"><span class="icon-play"></span></span>
              <img src="images/sq_img_6.jpg" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">Vách Ngăn Di Động Phối Nỉ</h2>
            <p class="lead">Được Thiết bởi G-i Contracting cho văn phòng FWD Việt Nam</p>
            <p>vách ngăn được thiết kế và tính toán kĩ lưỡng trong nhiều tuần. Đi vào sử dụng sau 1 tháng lắp đặt</p>
          </div>
        </div>
      </div>
    </section>
<section class="site-section pt-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
            <a data-fancybox="" data-ratio="2" href="https://youtu.be/ngux8EvsI1U" class="block__96788">
              <span class="play-icon"><span class="icon-play"></span></span>
              <img src="images/sq_img_8.jpg" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
            <h2 class="section-title mb-3">Vách Ngăn Di Động Nỉ</h2>
            <p class="lead">Được Thiết bởi G-i Contracting cho văn phòng FWD Việt Nam</p>
            <p>vách ngăn được thiết kế và tính toán kĩ lưỡng trong nhiều tuần. Đi vào sử dụng sau 1 tháng lắp đặt</p>
          </div>
        </div>
      </div>
    </section>   
     
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Chúng tôi</h2>
          </div>
        </div>

        <div class="row align-items-center block__69944">

          <div class="col-md-6">
            <img src="images/person_6.jpg" alt="Image" class="img-fluid mb-4 rounded">
          </div>

          <div class="col-md-6">
            <h3>Đỗ Văn Sáng</h3>
            <p class="text-muted">Kỹ sư trưởng</p>
            <p>với kinh nghiệm 10 năm về sản xuất và lắp đặt vách ngăn di động, vách ngăn bàn làm việc, vách ngăn vệ sinh, vách ngăn xếp, vách ngăn ốp tường.</p>
            <div class="social mt-4">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-youtube"></span></a>
              
            </div>
          </div>

          <div class="col-md-6 order-md-2 ml-md-auto">
            <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-4 rounded">
          </div>

          <div class="col-md-6">
            <h3>Huỳnh Nhật Tân</h3>
            <p class="text-muted">Kỹ sư vách ngăn</p>
            <p>với kinh nghiệm hơn 1 năm về vách ngăn</p>
            <div class="social mt-4">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-youtube"></span></a>
              
            </div>
          </div>
      </div>
    </div>
@endsection