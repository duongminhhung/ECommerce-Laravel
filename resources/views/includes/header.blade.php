<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <ul>
                            <li>
                                <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i> Tiếng Việt
                                    <i class="fi-rs-angle-small-down"></i></a>
                                <ul class="language-dropdown">
                                    <li><a href="#"><img src="assets/imgs/theme/flag-eng.png"
                                                alt="">English</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li>Nhận các sản phẩm tuyệt vời giảm giá 50%<a href="shop.html">Thông tin chi tiết</a>
                                </li>
                                <li>Ưu đãi siêu giá trị - Tiết kiệm nhiều hơn với phiếu giảm giá</li>
                                <li>Sale sập sàn 35% <a href="shop.html">Cửa hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        <ul>
                            <li>
                                @if (session()->has('id'))
                                    <span style="padding: 0 5px;">Hello</span> 
                                    <span>{{ session()->get('name')}}</span>
                                 <a href="{{ route('logout') }}">Đăng xuất</a>

                                @else
                                    <i class="fi-rs-key"></i><a href="{{ route('login') }}">Đăng nhập </a>
                                / <a href="{{ route('register') }}">Đăng ký</a>

                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="{{ route('index') }}"><img src="assets/imgs/logo/logo.png" alt="logo"></a>
                </div>
                <div class="header-right">
                    <div class="search-style-1">
                        <form action="#">
                            <input type="text" placeholder="Nhập nội dung tìm kiếm...">
                        </form>
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.php">
                                    <img class="svgInject" alt="Surfside Media"
                                        src="assets/imgs/theme/icons/icon-heart.svg">
                                    <span class="pro-count blue">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="{{ route('cart') }}">
                                    <img alt="Surfside Media" src="assets/imgs/theme/icons/icon-cart.svg">
                                    <span class="pro-count blue">{{ count((array) session('cart')) }}</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                    @php $total = 0.0 @endphp

                                        @foreach((array) session('cart') as $id => $details)
                            @php $total += ($details['price']- ($details['sale'] * $details['price']) / 100) * $details['quantity'] @endphp
                        @endforeach
                        @if(session('cart'))
                                    @foreach ( session('cart') as $id => $details )
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="product-details.html"><img alt="Surfside Media"
                                                    src="assets/imgs/shop/{{ $details['pre_image'] }}.jpg"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="product-details.html">{{ $details['name'] }}</a></h4>
                                            <h4><span> </span>${{ $details['price']- ($details['sale'] * $details['price']) / 100 }}</h4>
                                            <h4 style="margin-right: 100px" class="text-center" data-title="Stock"><div class="detail-qty border radius  m-auto">
                                                <a style="padding:0 10px" href="{{ route('minus_quantity',$details['id']) }}" class=""><i class="fi-rs-angle-small-down"></i></a>
                                                <span style="padding:0 10px" class="qty-val">{{ $details['quantity'] }}</span>
                                                <a href="{{ route('plus_quantity',$details['id']) }}" class=""><i class="fi-rs-angle-small-up"></i></a>
                                            </div></h4>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                    
                                    
                                    @endforeach
                                    @endif
                                       
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Tổng giá <span>${{ $total }}</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="{{ route('cart') }}" class="outline">Giỏ hàng</a>
                                            <a href="checkout.html">Thanh toán</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="index.html"><img src="assets/imgs/logo/logo.png" alt="logo"></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                        <a class="categori-button-active" href="#">
                            <span class="fi-rs-apps"></span> Danh mục sản phẩm
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-large">
                            <ul>
                                <li class="has-children">
                                    <a href="shop.html"><i class="surfsidemedia-font-dress"></i>Thời trang nữ</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Hot & Xu hướng</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="{{ route('vaydam') }}">Váy đầm</a></li>

                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="{{ route('aodai') }}">Áo dài & áo sơ mi</a>
                                                            </li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="{{ route('hoodie') }}">Hoodies & Sweater</a>
                                                            </li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Đồ nữ</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Suits & Blazers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Bodysuits</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Tanks & Camis</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Áo khoác & Jackets</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Bottoms</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Quần sát người</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Váy</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Quần Shorts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Quần Jeans</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Quần dài & Quần lửng</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Đồ Bikini</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Đồ kín</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Đồ bơi</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-5">
                                                <div class="header-banner2">
                                                    <img src="assets/imgs/banner/menu-banner-2.jpg"
                                                        alt="menu_banner1">
                                                    <div class="banne_info">
                                                        <h6>10% Off</h6>
                                                        <h4>New Arrival</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="header-banner2">
                                                    <img src="assets/imgs/banner/menu-banner-3.jpg"
                                                        alt="menu_banner2">
                                                    <div class="banne_info">
                                                        <h6>15% Off</h6>
                                                        <h4>Hot Deals</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-children">
                                    <a href="shop.html"><i class="surfsidemedia-font-tshirt"></i>Thời trang nam</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Áo Jackets & Áo
                                                                    khoác</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Áo khoác dài</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Áo Jackets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Áo Parkas</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Áo khoác giả da</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Áo Khoác Trench Coat</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Len & Hỗn hợp</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Vest & Ghi lê</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Áo khoác da</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Suits & Blazers</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Blazers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Áo Vest</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Quần tây</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Suit</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Vests</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Trang phục may đo</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Đồ kín</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-5">
                                                <div class="header-banner2">
                                                    <img src="assets/imgs/banner/menu-banner-4.jpg"
                                                        alt="menu_banner1">
                                                    <div class="banne_info">
                                                        <h6>10% Off</h6>
                                                        <h4>New Arrival</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-children">
                                    <a href="shop.html"><i class="surfsidemedia-font-smartphone"></i> Điện thoại</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Hot & Xu hướng</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Điện thoại cầm tay</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Iphone</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Điện thoại tân trang</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Điện thoại di động</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Linh kiện điện thoại</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Túi và điện thoại</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Thiết bị thông tin liên lạc</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Bộ đàm</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Phụ kiện</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Cường lực điện thoại</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Dây sạc điện thoại</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Sạc không dây</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Bộ sạc xe hơi</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                    href="#">Sạc dự phòng</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-5">
                                                <div class="header-banner2">
                                                    <img src="assets/imgs/banner/menu-banner-5.jpg"
                                                        alt="menu_banner1">
                                                    <div class="banne_info">
                                                        <h6>10% Off</h6>
                                                        <h4>New Arrival</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="header-banner2">
                                                    <img src="assets/imgs/banner/menu-banner-6.jpg"
                                                        alt="menu_banner2">
                                                    <div class="banne_info">
                                                        <h6>15% Off</h6>
                                                        <h4>Hot Deals</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Máy tính và văn
                                        phòng</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Điện tử dân dụng</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-diamond"></i>Trang sức và phụ
                                        kiện</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Gia đình & Nhà vườn</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-high-heels"></i>Giày</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-teddy-bear"></i>Mẹ & Bé</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-kite"></i>Vui chơi ngoài trời</a>
                                </li>
                                <li>
                                    <ul class="more_slide_open" style="display: none;">
                                        <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Sắc đẹp và
                                                sức khỏe</a></li>
                                        <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Túi xách &
                                                giày</a></li>
                                        <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Ô tô & xe
                                                máy</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="more_categories">Xem thêm</div>
                        </div>
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                        <nav>
                            <ul>
                                <li><a class="active" href="{{ route('index') }}">Trang chủ </a></li>
                                <li><a href="about.html">Thông tin</a></li>
                                <li><a href="{{ route('shop') }}">Gian hàng</a></li>
                                <li class="position-static"><a href="#">Bộ sưu tập<i
                                            class="fi-rs-angle-down"></i></a>
                                    <ul class="mega-menu">
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="#">Thời trang nữ</a>
                                            <ul>
                                                <li><a href="product-details.html">Váy đầm</a></li>
                                                <li><a href="product-details.html">Áo cánh & Áo sơ mi</a></li>
                                                <li><a href="product-details.html">Hoodies & Sweater</a></li>
                                                <li><a href="product-details.html">Váy cưới</a></li>
                                                <li><a href="product-details.html">Váy dạ hội</a></li>
                                                <li><a href="product-details.html">Trang phục hóa trang</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="#">Thời trang nam</a>
                                            <ul>
                                                <li><a href="product-details.html">Áo Jacket</a></li>
                                                <li><a href="product-details.html">Áo giả da</a></li>
                                                <li><a href="product-details.html">Ao da</a></li>
                                                <li><a href="product-details.html">Quần tây</a></li>
                                                <li><a href="product-details.html">Quần thể thao</a></li>
                                                <li><a href="product-details.html">Harem Pants</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="#">Công nghệ</a>
                                            <ul>
                                                <li><a href="product-details.html">Laptop gaming</a></li>
                                                <li><a href="product-details.html">Laptop văn phòng</a></li>
                                                <li><a href="product-details.html">Máy tính bảng</a></li>
                                                <li><a href="product-details.html">Phụ kiện laptop</a></li>
                                                <li><a href="product-details.html">Phụ kiện máy tính bảng</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-34">
                                            <div class="menu-banner-wrap">
                                                <a href="product-details.html"><img
                                                        src="assets/imgs/banner/menu-banner.jpg"
                                                        alt="Surfside Media"></a>
                                                <div class="menu-banner-content">
                                                    <h4>Hot deals</h4>
                                                    <h3>Don't miss<br> Trending</h3>
                                                    <div class="menu-banner-price">
                                                        <span class="new-price text-success">Save to 50%</span>
                                                    </div>
                                                    <div class="menu-banner-btn">
                                                        <a href="product-details.html">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="menu-banner-discount">
                                                    <h3>
                                                        <span>35%</span>
                                                        off
                                                    </h3>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog </a></li>
                                <li><a href="contact.html">Liên hệ</a></li>
                                <li><a href="#">Tài khoản<i class="fi-rs-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">Sản phẩm</a></li>
                                        <li><a href="#">Danh mục</a></li>
                                        <li><a href="#">Mã giảm giá</a></li>
                                        <li><a href="#">Đơn đặt hàng</a></li>
                                        @if (session()->has('id'))
                                        <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                                            @endif
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="hotline d-none d-lg-block">
                    <p><i class="fi-rs-smartphone"></i><span>Liên hệ</span> 0852066719 </p>
                </div>
                <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="shop-wishlist.php">
                                <img alt="Surfside Media" src="assets/imgs/theme/icons/icon-heart.svg">
                                <span class="pro-count white">4</span>
                            </a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="cart.html">
                                <img alt="Surfside Media" src="assets/imgs/theme/icons/icon-cart.svg">
                                <span class="pro-count white">2</span>
                            </a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="product-details.html"><img alt="Surfside Media"
                                                    src="assets/imgs/shop/thumbnail-3.jpg"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="product-details.html">Plain Striola Shirts</a></h4>
                                            <h3><span>1 × </span>$800.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="product-details.html"><img alt="Surfside Media"
                                                    src="assets/imgs/shop/thumbnail-4.jpg"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="product-details.html">Macbook Pro 2022</a></h4>
                                            <h3><span>1 × </span>$3500.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>$383.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="cart.html">View cart</a>
                                        <a href="shop-checkout.php">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-action-icon-2 d-block d-lg-none">
                            <div class="burger-icon burger-icon-white">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-mid"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="index.html"><img src="assets/imgs/logo/logo.png" alt="logo"></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="#">
                    <input type="text" placeholder="Search for items…">
                    <button type="submit"><i class="fi-rs-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <div class="main-categori-wrap mobile-header-border">
                    <a class="categori-button-active-2" href="#">
                        <span class="fi-rs-apps"></span> Browse Categories
                    </a>
                    <div class="categori-dropdown-wrap categori-dropdown-active-small">
                        <ul>
                            <li><a href="shop.html"><i class="surfsidemedia-font-dress"></i>Women's Clothing</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-tshirt"></i>Men's Clothing</a></li>
                            <li> <a href="shop.html"><i class="surfsidemedia-font-smartphone"></i> Cellphones</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Computer & Office</a>
                            </li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Consumer Electronics</a>
                            </li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Home & Garden</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-high-heels"></i>Shoes</a></li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-teddy-bear"></i>Mother & Kids</a>
                            </li>
                            <li><a href="shop.html"><i class="surfsidemedia-font-kite"></i>Outdoor fun</a></li>
                        </ul>
                    </div>
                </div>
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                href="index.html">Home</a></li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                href="shop.html">shop</a></li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Our
                                Collections</a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Women's Fashion</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">Dresses</a></li>
                                        <li><a href="product-details.html">Blouses & Shirts</a></li>
                                        <li><a href="product-details.html">Hoodies & Sweatshirts</a></li>
                                        <li><a href="product-details.html">Women's Sets</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Men's Fashion</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">Jackets</a></li>
                                        <li><a href="product-details.html">Casual Faux Leather</a></li>
                                        <li><a href="product-details.html">Genuine Leather</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Technology</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">Gaming Laptops</a></li>
                                        <li><a href="product-details.html">Ultraslim Laptops</a></li>
                                        <li><a href="product-details.html">Tablets</a></li>
                                        <li><a href="product-details.html">Laptop Accessories</a></li>
                                        <li><a href="product-details.html">Tablet Accessories</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                href="blog.html">Blog</a></li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                href="#">Language</a>
                            <ul class="dropdown">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap mobile-header-border">
                <div class="single-mobile-header-info mt-30">
                    <a href="contact.html"> Our location </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="login.html">Log In </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="register.html">Sign Up</a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="#">(+1) 0000-000-000 </a>
                </div>
            </div>
            <div class="mobile-social-icon">
                <h5 class="mb-15 text-grey-4">Follow Us</h5>
                <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
            </div>
        </div>
    </div>
</div>
