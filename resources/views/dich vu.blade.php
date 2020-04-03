@extends('layout')
@section('title')
Dịch Vụ - Vách Ngăn SSA
@endsection
@section('submenu')
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Dịch Vụ</h1>
            <div class="custom-breadcrumbs">
              <a href="{{ route ('trang chu')}}">Trang chủ</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Dịch Vụ</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('content')
<section class="site-section services-section bg-light block__62849" id="next-section">
      <div class="container">
        
        <div class="row">
          <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

            <a href="service-single.html" class="block__16443 text-center d-block">
              <span class="custom-icon mx-auto"><span class="icon-line-paintbrush"></span></span>
              <h3>Cải Tạo Văn Phòng</h3>
              <p>cải tạo,sửa chữa nội thất văn phòng,nhà hàng uy tín trách nhiệm đảm bảo kinh tế,nhanh gọn và thẩm mỹ..</p>
            </a>

          </div>
          <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">
            
            <a href="service-single.html" class="block__16443 text-center d-block">
              <span class="custom-icon mx-auto"><span class="icon-line-profile-male"></span></span>
              <h3>Lắp Đặt</h3>
              <p>Sản xuất và lắp đặt nội thất vách ngăn: vách ngăn di động, vách ngăn bàn làm việc, vách ngăn vệ sinh, vách ngăn ốp tường, vách ngăn xếp.</p>
            </a>            

          </div>
          <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">
            
            <a href="service-single.html" class="block__16443 text-center d-block">
              <span class="custom-icon mx-auto"><span class="icon-laptop d-block"></span></span>
              <h3>Thiết kế</h3>
              <p>Thiết kế nội thất vách ngăn</p>
            </a>            

          </div>
          <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">
            
            <a href="service-single.html" class="block__16443 text-center d-block">
              <span class="custom-icon mx-auto"><span class="icon-line-chat"></span></span>
              <h3>Tư vấn</h3>
              <p>Tư vấn Đúng nhu cầu, đúng mục đích.</p>
            </a>

          </div>
         
          <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">
            
            <a href="service-single.html" class="block__16443 text-center d-block">
              <span class="custom-icon mx-auto"><span class="icon-line-tools-2"></span></span>
              <h3>Bảo trì, sửa chữa</h3>
              <p class="d-sm-block">vách ngăn di động trong nước, nước ngoài. sữa chữa vách ngăn bàn làm việc.</p>
            </a>

          </div>
        </div>

        
      </div>
    </section>
@endsection