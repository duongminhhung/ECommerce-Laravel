
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
<title>Surfside Media</title>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="">
<meta property="og:type" content="">
<meta property="og:url" content="">
<meta property="og:image" content="">
<link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.ico">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/custom.css"></head>

<body>
    @include('includes.header')
           <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Trang chủ</a>
                    <span></span> Cửa hàng
                    <span></span> Sản phẩm yêu thích
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table shopping-summery text-center clean">
                                <thead>
                                    <tr class="main-heading">
                                        <th scope="col">Ảnh</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Giảm giá</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Thêm giỏ hàng</th>
                                        <th scope="col">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $total = 0.0 @endphp
                        @foreach((array) session('cart') as $id => $details)
                            @php $total += ($details['price']- ($details['sale'] * $details['price']) / 100) * $details['quantity'] @endphp
                        @endforeach
                                    @if(session('wishlist'))
                                    @foreach ( session('wishlist') as $id => $details )
                                    <tr>
                                        <td class="image product-thumbnail"><img src="assets/imgs/shop/{{ $details['pre_image'] }}.jpg" alt="#"></td>
                                        <td class="product-des product-name">
                                            <h5 class="product-name"><a href="{{ route('details',$details['id']) }}">{{ $details['name'] }}</a></h5>
                                            <p class="font-xs">Maboriosam in a tonto nesciung eget<br> distingy magndapibus.
                                            </p>
                                        </td>
                                        <td><span>{{ $details['sale'] }}%</span></td>
                                       
                                        <td class="text-center" data-title="Stock">
                                               
                                                <span class="qty-val">${{ ($details['price']- ($details['sale'] * $details['price']) / 100) * $details['quantity'] }}</span>
                                                
                                        </td>
                                        
                                        <td class="price" data-title=""><a style="margin:0 7px;" aria-label="Thêm giỏ hàng" class="action-btn hover-up"
                                            href="{{ route('AddtoCart', $details['id']) }}"><i class="fi-rs-shopping-bag-add"></i></a></td>
                                        <td class="action" data-title="Remove"><a href="{{ route('remove',$details['id']) }}" class="text-muted"><i class="fi-rs-trash"></i></a></td>
                                    </tr>
                                    
                                    
                                    @endforeach
                                    @endif
                                    
                                    <tr>
                                        <td colspan="6" class="text-end">
                                            <a href="{{ route('clearcart') }}" class="text-muted"> <i class="fi-rs-cross-small"></i> Xoá giỏ hàng</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- <script type="text/javascript">
  
                            $(".update-cart").change(function (e) {
                                e.preventDefault();
                          
                                var ele = $(this);
                          
                                $.ajax({
                                    url: '{{ route('update.cart') }}',
                                    method: "patch",
                                    data: {
                                        _token: '{{ csrf_token() }}', 
                                        id: ele.parents("tr").attr("data-id"), 
                                        quantity: ele.parents("tr").find(".quantity").val()
                                    },
                                    success: function (response) {
                                       window.location.reload();
                                    }
                                });
                            });
                          
                            
                          
                        </script> --}}
                        <div class="cart-action text-end">
                            <a href="#" class="btn  mr-10 mb-sm-15"><i class="fi-rs-shuffle mr-10"></i>Cập nhập giỏ hàng</a>
                            <a href="{{ route('shop') }}" class="btn "><i class="fi-rs-shopping-bag mr-10"></i>Tiếp tục mua hàng</a>
                        </div>
                        <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
    {{-- @include('includes.footer')    --}}
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
<script src="assets/js/shop.js?v=3.3"></script>    <!-- <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
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
    
    <script src="assets/js/main.js?v=3.3"></script>
    <script src="assets/js/shop.js?v=3.3"></script> -->
</body>

</html>