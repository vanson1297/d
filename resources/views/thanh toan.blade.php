@extends('layout')
@section('title')
Vận Chuyển và Thanh Toán - Vách Ngăn SSA
@endsection
@section('submenu')
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Vận Chuyển và Thanh Toán</h1>
            <div class="custom-breadcrumbs">
              <a href="{{ route ('trang chu')}}">Trang Chủ</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Vận Chuyển Và Thanh Toán</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('content')
<section class="site-section" id="accordion">
      <div class="container">
        
        <div class="row accordion justify-content-center block__76208">
          <div class="col-lg-6">
            <img src="images/delivery.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-lg-5 ml-auto">

          	<div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block h4" data-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="true" aria-controls="collapseSeven">Tạm Ứng (Xác nhận mua hàng)<span class="icon"></span></a>
              </h3>
              <div id="collapseSeven" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Khách hàng mua hàng xác nhận đơn hàng bằng tạm ứng 50% giá trị của đơn hàng</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block h4" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false" aria-controls="collapseFive">Thanh toán trực tiếp bằng tiền mặt<span class="icon"></span></a>
              </h3>
              <div id="collapseFive" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Áp dụng cho đơn hàng dưới 20.000.000đ (có VAT 10%), không sử dụng hình thức chuyển khoản.</p>
                  <p>- Giá trị thanh toán thể hiện trên bảng báo giá đối với sản phẩm đã tạm ứng. Giá trị thanh toán khác thể hiện trên Giấy đề nghị thanh toán.</p>
                  <p>- Khách hàng thanh toán cho nhân viên của công ty có giấy giới thiệu sau khi đã nhận hàng và kiểm tra hàng hóa đầy đủ và các chứng từ kèm theo.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block h4" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false" aria-controls="collapseSix">Thanh toán chuyển khoản<span class="icon"></span></a>
              </h3>
              <div id="collapseSix" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Áp dụng mọi trường hợp mua hàng của công ty sau khi đã nhận hàng và kiểm tra hàng hóa đầy đủ và các chứng từ kèm theo.</p>
                  <p>- Giá trị thanh toán căn cứ trên hóa đơn GTGT hoặc bảng báo giá mua bán giữa công ty và khách hàng </p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block h4" data-toggle="collapse" href="#collapseEight" role="button" aria-expanded="false" aria-controls="collapseEight">Vận Chuyển<span class="icon"></span></a>
              </h3>
              <div id="collapseEight" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Các đơn hàng tại HCM, trước 19h00</p>
                  <p>Thời gian giao hàng 10 ngày kể từ ngày nhận được tạm ứng</p>
                  <p>Đối với các đơn hàng dự án hoặc mua sỉ số lượng lớn sẽ tiến hành bàn giao sản phẩm theo cam kết trong hợp đồng, chậm nhất không quá 15 ngày làm việc.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

          </div>

          
        </div>
      </div>
    </section>
@endsection