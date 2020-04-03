 <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="{{ route ('trang chu')}}">VÁCH NGĂN SSA</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="{{ route ('trang chu')}}" class="nav-link active">Trang chủ</a></li>
              <li><a href="{{ route ('ve chung toi')}}">Về chúng tôi</a></li>
              <li class="has-children">
                <a href="">Vách Ngăn</a>
                <ul class="dropdown">
                  <li><a href="">Vách Ngăn Di Động</a></li>
                  <li><a href="">Vách Ngăn Văn Phòng</a></li>
                  <li><a href="">Vách Ngăn Vệ Sinh</a></li>
                  <li><a href="">Vách Ngăn Xếp</a></li>                
                </ul>
              </li>
              <li class="has-children">
                <a href="{{ route ('dich-vu')}}">Trang</a>
                <ul class="dropdown">
                  <li><a href="{{ route ('dich-vu')}}">Dịch Vụ</a></li>
                  <li><a href="{{ route ('gioi-thieu')}}">Giới Thiệu</a></li>
                  <li><a href="{{ route ('blog-chi-tiet')}}">Blog Chi Tiết</a></li>
                  <li><a href="{{ route ('du-an')}}">Dự Án</a></li>
                  <li><a href="{{ route ('chi-tiet-du-an')}}">Chi Tiết Dự Án</a></li>
                  <li><a href="{{ route ('y-kien-khach-hang')}}">Ý Kiến Khách Hàng</a></li>
                  <li><a href="{{ route ('dat-cau-hoi')}}">Đặt câu hỏi</a></li>
                  <li><a href="{{ route ('thu-vien')}}">Thư viện</a></li>
                  <li><a href="">Hoá Đơn</a></li>
                </ul>
              </li>
              <li><a href="{{ route ('blog')}}">Blog</a></li>
              <li><a href="{{ route ('lien he')}}">Liên hệ</a></li>     
            </ul>
          </nav>
        </div>
      </div>     
    </header>
    @yield('submenu')