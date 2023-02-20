<footer class="main">
    <section class="newsletter p-30 text-white wow fadeIn animated">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-md-3 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col flex-horizontal-center">
                            <img class="icon-email" src="assets/imgs/theme/icons/icon-email.svg" alt="">
                            <h4 class="font-size-20 mb-0 ml-3">Đăng nhập để liên hệ với chúng tôi</h4>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- Subscribe Form -->
                    <form class="form-subcriber d-flex wow fadeIn animated">
                        <input type="email" class="form-control bg-white font-small" placeholder="Nhập email của bạn">
                        <button class="btn bg-dark text-white" type="submit">Đăng ký</button>
                    </form>
                    <!-- End Subscribe Form -->
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding footer-mid">
        <div class="container pt-15 pb-20">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget-about font-md mb-md-5 mb-lg-0">
                        <div class="logo logo-width-1 wow fadeIn animated">
                            <a href="index.html"><img src="{{ asset('assets/imgs/logo/logo.png') }}" alt="logo"></a>
                        </div>
                        <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Liên hệ</h5>
                        <p class="wow fadeIn animated">
                            <strong>Địa chỉ: </strong>Đại Linh, Trung Văn, quận Nam Từ Liêm
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Điện thoại: </strong>0984786003
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Email: </strong>hung.duongminh.dev@gmail.com
                        </p>
                        <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                        <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                            <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                            <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                            <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                            <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                            <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <h5 class="widget-title wow fadeIn animated">Thông tin</h5>
                    <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                        <li><a href="#">Thông tin về chúng tôi</a></li>
                        <li><a href="#">Chính sách vận chuyển</a></li>
                        <li><a href="#">Chính sách bảo mật</a></li>
                        <li><a href="#">Điều khoản &amp; Điều kiện</a></li>
                        <li><a href="#">Liên hệ với chúng tôi</a></li>                            
                    </ul>
                </div>
                <div class="col-lg-2  col-md-3">
                    <h5 class="widget-title wow fadeIn animated">Tài khoản</h5>
                    <ul class="footer-list wow fadeIn animated">
                        <li><a href="my-account.html">Tài khoản của tôi</a></li>
                        <li><a href="{{ route('cart') }}">Giỏ hàng</a></li>
                        <li><a href="{{ route('wishlist') }}">Danh sách yêu thích</a></li>
                        <li><a href="#">Theo dõi đơn hàng</a></li>                            
                        <li><a href="{{ route('cart') }}">Đặt hàng</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mob-center">
                    <h5 class="widget-title wow fadeIn animated">Tải ứng dụng</h5>
                    <div class="row">
                        <div class="col-md-8 col-lg-12">
                            <p class="wow fadeIn animated"></p>
                            <div class="download-app wow fadeIn animated mob-app">
                                <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active" src="assets/imgs/theme/app-store.jpg" alt=""></a>
                                <a href="#" class="hover-up"><img src="assets/imgs/theme/google-play.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                            <p class="mb-20 wow fadeIn animated">Cổng phương thức thanh toán</p>
                            <img class="wow fadeIn animated" src="assets/imgs/theme/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container pb-20 wow fadeIn animated mob-center">
        <div class="row">
            <div class="col-12 mb-20">
                <div class="footer-bottom"></div>
            </div>
            <div class="col-lg-6">
                <p class="float-md-left font-sm text-muted mb-0">
                    <a href="privacy-policy.html">Chính sách bảo mật</a> | <a href="terms-conditions.html">Điều khoản &amp; Điều kiện</a>
                </p>
            </div>
            <div class="col-lg-6">
                <p class="text-lg-end text-start font-sm text-muted mb-0">
                    &copy; <strong class="text-brand">SurfsideMedia</strong> All rights reserved
                </p>
            </div>
        </div>
    </div>
</footer>    
<!-- Vendor JS-->
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="assets/js/plugins/slick.js"></script>
<script src="assets/js/plugins/jquery.syotimer.min.js"></script>
<script src="assets/js/plugins/wow.js"></script>
<script src="assets/js/plugins/jquery-ui.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.js"></script>
<script src="assets/js/plugins/magnific-popup.js"></script>
<script src="assets/js/plugins/select2.min.js"></script>
<script src="assets/js/plugins/waypoints.js"></script>
<script src="assets/js/plugins/counterup.js"></script>
<script src="assets/js/plugins/jquery.countdown.min.js"></script>
<script src="assets/js/plugins/images-loaded.js"></script>
<script src="assets/js/plugins/isotope.js"></script>
<script src="assets/js/plugins/scrollup.js"></script>
<script src="assets/js/plugins/jquery.vticker-min.js"></script>
<script src="assets/js/plugins/jquery.theia.sticky.js"></script>
<script src="assets/js/plugins/jquery.elevatezoom.js"></script>
<!-- Template  JS -->
<script src="assets/js/main.js?v=3.3"></script>
<script src="assets/js/shop.js?v=3.3"></script></body>
