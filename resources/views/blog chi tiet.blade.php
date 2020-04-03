@extends('layout')

@section('submenu')
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="custom-breadcrumbs mb-0">
              <span class="slash">Đăng bởi</span> Admin 
              <span class="mx-2 slash">•</span>
              <span class="text-white"><strong>April 15, 2020</strong></span>
            </div>
            <h1 class="text-white">Vách ngăn di độn &amp; SSA 2020</h1>
            
            
          </div>
        </div>
      </div>
    </section>
@endsection

@section('content')
<section class="site-section" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 blog-content">
            <h3 class="mb-4">Tiêu Đề</h3>
            <p class="lead">Chữ</p>
            <p><img src="images/job_single_img_1.jpg" alt="Image" class="img-fluid rounded"></p>
            

            <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident vero tempora aliquam excepturi labore, ad soluta voluptate necessitatibus. Nulla error beatae, quam, facilis suscipit quaerat aperiam minima eveniet quis placeat.</p></blockquote>

            <h4 class="mt-5 mb-4">tiêu đề phụ</h4>
            <p>Accusamus, temporibus, ullam. Voluptate consectetur laborum totam sunt culpa repellat, dolore voluptas. Quaerat cum ducimus aut distinctio sit, facilis corporis ab vel alias, voluptas aliquam, expedita molestias quisquam sequi eligendi nobis ea error omnis consequatur iste deleniti illum, dolorum odit.</p>
           
            <div class="pt-5">
              <p>Thể loại:  <a href="#">Thiết kế</a>, <a href="#">Công trình</a>  Tags: <a href="#">#vachnganvanphong</a>, <a href="#">#vachngandidong</a></p>
            </div>


          

          </div>
          <div class="col-lg-4 sidebar pl-lg-5">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control form-control-lg" placeholder="Tìm kiếm">
                </div>
              </form>
            </div>
            <div class="sidebar-box">
              <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4 w-50 rounded-circle">
              <h3>Tác Giả</h3>
              <p>Công ty vách ngăn SSA chuyên cung cấp và lắp đặt vách ngăn di động, vách ngăn văn phòng, vách ngăn vệ sinh, vách ngăn ốp tường, vách ngăn xếp cho công trình</p>
              <p><a href="{{route('gioi-thieu')}}" class="btn btn-primary btn-sm">Đọc Thêm</a></p>
            </div>

            <div class="sidebar-box">
              <div class="categories">
                <h3>Thể loại</h3>
                <li><a href="#">Sáng tạo <span>(12)</span></a></li>
                <li><a href="#">Tin Tức <span>(22)</span></a></li>
                <li><a href="#">Thiết kế <span>(37)</span></a></li>
                <li><a href="#">Công trình <span>(42)</span></a></li>
                
              </div>
            </div>
            

            <div class="sidebar-box">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection