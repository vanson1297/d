@extends('layout')
@section('title')
Liên Hệ - Vách Ngăn SSA
@endsection
@section('submenu')
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Liên hệ chúng tôi</h1>
            <div class="custom-breadcrumbs">
              <a href="{{ route ('trang chu')}}">Trang chủ</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Liên hệ chúng tôi</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('content')
<section class="site-section" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form action="#" class="">

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Tên</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Họ</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Tiêu đề</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Tin nhắn</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="viết ghi chú hoặc câu hỏi ở đây..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Gửi" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Địa chỉ</p>
              <p class="mb-4">687/18 Kinh Dương Vương, P. An Lạc, Q. Bình Tân, HCM, VN</p>

              <p class="mb-0 font-weight-bold">Điện Thoại</p>
              <p class="mb-4" style="color: #89ba16;">0933 23 0808 (zalo)</p>

              <p class="mb-0 font-weight-bold">Địa Chỉ Gmail</p>
              <p class="mb-0" style="color: #89ba16;">vachnganssa@gmail.com</p>

            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Ý kiến khách hàng</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="block__87154 bg-white rounded">
              <blockquote>
                <p>“Sản phẩm tốt nhiều mẫu ma đa dạng”</p>
              </blockquote>
              <div class="block__91147 d-flex align-items-center">
                <figure class="mr-4"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></figure>
                <div>
                  <h3>Mrs. Thư</h3>
                  <span class="position">Quản lí</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="block__87154 bg-white rounded">
              <blockquote>
                <p>“Tư vấn đúng nhu cầu, hỗ trợ tốt. Tôi hài lòng với chất lượng sản phẩm của CTY”</p>
              </blockquote>
              <div class="block__91147 d-flex align-items-center">
                <figure class="mr-4"><img src="images/person_2.jpg" alt="Image" class="img-fluid"></figure>
                <div>
                  <h3>Mr. Hưng</h3>
                  <span class="position">Khách hàng</span>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>
@endsection