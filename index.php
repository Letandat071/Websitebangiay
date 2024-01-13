<?php
include("auth.php"); ?>


<!DOCTYPE html>
<html lang="vn">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>TRANG CHỦ</title>

    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">

   
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.min.css">

</head>

<body>
    <!-- Start Header Area -->
    <header class="header-section d-none d-xl-block">
        <div class="header-wrapper">
            <div class="header-bottom header-bottom-color--golden section-fluid sticky-header sticky-color--golden">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center justify-content-between">
                            <!-- Start Header Logo -->
                            <div class="header-logo">
                                <div class="logo">
                                    <a href="index.php"><img src="assets/images/logo/logo_black.png" alt=""></a>
                                </div>
                            </div>
                            <!-- End Header Logo -->

                            <!-- Start Header Main Menu -->
                            <div class="main-menu menu-color--black menu-hover-color--golden">
                                <nav>
                                    <ul>
                                        <li class="has-dropdown">
                                            <a class="active main-menu-link" href="index.php">TRANG CHỦ</a></li>
                                        
                                        <li>
                                            <a href="shop-grid-sidebar-left.php">CỬA HÀNG</a>
                                        </li>
                                        <li>
                                            <a href="contact-us.php">LIÊN HỆ</a>
                                        </li>
                                        <li>
                                            <a href="about-us.php">GIỚI THIỆU</a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a class="active main-menu-link" href="#"><?php echo $_SESSION['username']; ?><i
                                                    class="fa fa-angle-down"></i></a>
                                            <!-- Sub Menu -->
                                            <ul class="sub-menu">
                                                <li><a href="logout.php">Đăng xuất</a></li>
                                                <li><a href="upload.php">Đăng sản phẩm</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- End Header Main Menu Start -->

                            <!-- Start Header Action Link -->
                            <ul class="header-action-link action-color--black action-hover-color--golden">
                                <li>
                                    <a href="wishlist.php">
                                        <i class="icon-heart"></i>
                                        <span class="item-count">3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="cart.php">
                                        <i class="icon-bag"></i>
                                        <span class="item-count">3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#search">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#offcanvas-about" class="offacnvas offside-about offcanvas-toggle">
                                        <i class="icon-menu"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Header Action Link -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Start Header Area -->

    <!-- Start Mobile Header -->
    <div class="mobile-header mobile-header-bg-color--golden section-fluid d-lg-block d-xl-none">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-between">
                    <!-- Start Mobile Left Side -->
                    <div class="mobile-header-left">
                        <ul class="mobile-menu-logo">
                            <li>
                                <a href="index.php">
                                    <div class="logo">
                                        <img src="assets/images/logo/logo_black.png" alt="">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Mobile Left Side -->

                    <!-- Start Mobile Right Side -->
                    <div class="mobile-right-side">
                        <ul class="header-action-link action-color--black action-hover-color--golden">
                            <li>
                                <a href="#search">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </li>
                            <li>
                                <a href="wishlist.php" class="offcanvas-toggle">
                                    <i class="icon-heart"></i>
                                    <span class="item-count">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="cart.php" class="offcanvas-toggle">
                                    <i class="icon-bag"></i>
                                    <span class="item-count">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#mobile-menu-offcanvas" class="offcanvas-toggle offside-menu">
                                    <i class="icon-menu"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Mobile Right Side -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile Header -->

    <!--  Start Offcanvas Mobile Menu Section -->
    <div id="mobile-menu-offcanvas" class="offcanvas offcanvas-rightside offcanvas-mobile-menu-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-mobile-menu-wrapper">
            <!-- Start Mobile Menu  -->
            <div class="mobile-menu-bottom">
                <!-- Start Mobile Menu Nav -->
                <div class="offcanvas-menu">
                    <ul>
                        <li>
                            <a href="index.php"><span>TRANG CHỦ</span></a>
                        <li>
                            <a href="shop-grid-sidebar-left.php"><span>CỬA HÀNG</span></a>
                            
                            
                        </li>
                        <li><a href="about-us.php">GIỚI THIỆU</a></li>
                        <li><a href="contact-us.php">LIÊN HỆ</a></li>
                        <li>
                            <a href="#"><span><?php echo $_SESSION['username']; ?></span></a>
                            <ul class="mobile-sub-menu">
                                <li><a href="logout.php">Đăng xuất</a></li>
                                <li><a href="upload.php">Đăng sản phẩm</a></li>
                            </ul>
                        </li>
                    </ul>
                </div> <!-- End Mobile Menu Nav -->
            </div> <!-- End Mobile Menu -->

            <!-- Start Mobile contact Info -->
            <div class="mobile-contact-info">
                <div class="logo">
                    <a href="index.php"><img src="assets/images/logo/logo_white.png" alt=""></a>
                </div>

                <address class="address">
                    <span>Phonenumber: 0123456789 </span>
                    <span>Email: dat.2174802010071@example.com</span>
                </address>

                <ul class="social-link">
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-square-instagram"></i></a></li>
                </ul>

                <ul class="user-link">
                    <li><a href="wishlist.php">Yêu thích</a></li>
                    <li><a href="cart.php">Giỏ hàng</a></li>

                </ul>
            </div>
            <!-- End Mobile contact Info -->

        </div> <!-- End Offcanvas Mobile Menu Wrapper -->
    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- Start Offcanvas Mobile Menu Section -->
    <div id="offcanvas-about" class="offcanvas offcanvas-rightside offcanvas-mobile-about-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <!-- Start Mobile contact Info -->
        <div class="mobile-contact-info">
            <div class="logo">
                <a href="index.php"><img src="assets/images/logo/logo_white.png" alt=""></a>
            </div>

            <address class="address">
                <span>Phonenumber: 0123456789 </span>
                <span>Email: dat.2174802010071@example.com</span>
            </address>

            <ul class="social-link">
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-square-instagram"></i></a></li>
            
            </ul>

            <ul class="user-link">
                <li><a href="wishlist.php">Yêu thích</a></li>
                <li><a href="cart.php">Giỏ hàng</a></li>
             
            </ul>
        </div>
        <!-- End Mobile contact Info -->
    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- Start Offcanvas Addcart Section -->
    <div id="offcanvas-add-cart" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->

        <!-- Start  Offcanvas Addcart Wrapper -->
        <div class="offcanvas-add-cart-wrapper">
            <h4 class="offcanvas-title">Shopping Cart</h4>
            <ul class="offcanvas-cart">
                <li class="offcanvas-cart-item-single">
                    <div class="offcanvas-cart-item-block">
                        <a href="#" class="offcanvas-cart-item-image-link">
                            <img src="assets/images/product/default/home-1/default-1.jpg" alt=""
                                class="offcanvas-cart-image">
                        </a>
                        <div class="offcanvas-cart-item-content">
                            <a href="#" class="offcanvas-cart-item-link">Car Wheel</a>
                            <div class="offcanvas-cart-item-details">
                                <span class="offcanvas-cart-item-details-quantity">1 x </span>
                                <span class="offcanvas-cart-item-details-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-cart-item-delete text-right">
                        <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-cart-item-single">
                    <div class="offcanvas-cart-item-block">
                        <a href="#" class="offcanvas-cart-item-image-link">
                            <img src="assets/images/product/default/home-2/default-1.jpg" alt=""
                                class="offcanvas-cart-image">
                        </a>
                        <div class="offcanvas-cart-item-content">
                            <a href="#" class="offcanvas-cart-item-link">Car Vails</a>
                            <div class="offcanvas-cart-item-details">
                                <span class="offcanvas-cart-item-details-quantity">3 x </span>
                                <span class="offcanvas-cart-item-details-price">$500.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-cart-item-delete text-right">
                        <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-cart-item-single">
                    <div class="offcanvas-cart-item-block">
                        <a href="#" class="offcanvas-cart-item-image-link">
                            <img src="assets/images/product/default/home-3/default-1.jpg" alt=""
                                class="offcanvas-cart-image">
                        </a>
                        <div class="offcanvas-cart-item-content">
                            <a href="#" class="offcanvas-cart-item-link">Shock Absorber</a>
                            <div class="offcanvas-cart-item-details">
                                <span class="offcanvas-cart-item-details-quantity">1 x </span>
                                <span class="offcanvas-cart-item-details-price">$350.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-cart-item-delete text-right">
                        <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
            </ul>
            <div class="offcanvas-cart-total-price">
                <span class="offcanvas-cart-total-price-text">Subtotal:</span>
                <span class="offcanvas-cart-total-price-value">$170.00</span>
            </div>
            <ul class="offcanvas-cart-action-button">
                <li><a href="cart.php" class="btn btn-block btn-golden">View Cart</a></li>
            
            </ul>
        </div> <!-- End  Offcanvas Addcart Wrapper -->

    </div> <!-- End  Offcanvas Addcart Section -->

    <!-- Start Offcanvas Mobile Menu Section -->
    <div id="offcanvas-wishlish" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- ENd Offcanvas Header -->

        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-wishlist-wrapper">
            <h4 class="offcanvas-title">Wishlist</h4>
            <ul class="offcanvas-wishlist">
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/product/default/home-1/default-1.jpg" alt=""
                                class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Car Wheel</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/product/default/home-2/default-1.jpg" alt=""
                                class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Car Vails</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">3 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$500.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/product/default/home-3/default-1.jpg" alt=""
                                class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Shock Absorber</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$350.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
            </ul>
            <ul class="offcanvas-wishlist-action-button">
                <li><a href="#" class="btn btn-block btn-golden">View wishlist</a></li>
            </ul>
        </div> <!-- End Offcanvas Mobile Menu Wrapper -->

    </div> <!-- End Offcanvas Mobile Menu Section -->

    <!-- Start Offcanvas Search Bar Section -->
    <div id="search" class="search-modal">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" placeholder="NHẬP TỪ KHÓA BẠN CẦN TÌM" />
            <button type="submit" class="btn btn-lg btn-golden">Search</button>
        </form>
    </div>
    <!-- End Offcanvas Search Bar Section -->

    <!-- Offcanvas Overlay -->
    <div class="offcanvas-overlay"></div>

    <!-- Start Hero Slider Section-->
    <div class="hero-slider-section">
        <!-- Slider main container -->
        <div class="hero-slider-active swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Start Hero Single Slider Item -->
                <div class="hero-single-slider-item swiper-slide">
                    <!-- Hero Slider Image -->
                    <div class="hero-slider-bg">
                        <img src="assets/images/hero-slider/home-1/baner1.jpg" alt="">
                    </div>
                    <!-- Hero Slider Content -->
                    <div class="hero-slider-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="hero-slider-content">
                                        <h4 class="subtitle">SẢN PHẨM MỚI</h4>
                                        <h2 class="title">MẠNH MẼ<br> PHONG CÁCH </h2>
                                        <a href="shop-grid-sidebar-left.php"
                                            class="btn btn-lg btn-outline-golden">ĐẶT NGAY </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Single Slider Item -->
                <!-- Start Hero Single Slider Item -->
                <div class="hero-single-slider-item swiper-slide">
                    <!-- Hero Slider Image -->
                    <div class="hero-slider-bg">
                        <img src="assets/images/hero-slider/home-1/baner2.jpg" alt="">
                    </div>
                    <!-- Hero Slider Content -->
                    <div class="hero-slider-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="hero-slider-content">
                                        <h4 class="subtitle">SẢN PHẨM MỚI</h4>
                                        <h2 class="title">ĐỘT PHÁ MỚI  <br> TRONG THIẾT KẾ </h2>
                                        <a href="shop-grid-sidebar-left.php"
                                            class="btn btn-lg btn-outline-golden">ĐẶT MUA NGAY </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Single Slider Item -->
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination active-color-golden"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev d-none d-lg-block"></div>
            <div class="swiper-button-next d-none d-lg-block"></div>
        </div>
    </div>
    <!-- End Hero Slider Section-->
    <br><br>
    <!-- Start Service Section -->
    <div class="">
        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="0">
            <div class="content">
                <h2 class="title"><b>DỊCH VỤ TẬN TÂM</b></h2>
            </div>
        </div>
    </div>
    <div class="service-promo-section section-top-gap-100">
        <div class="service-wrapper">
            <div class="container">
                <div class="row">
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="0">
                            <div class="image">
                                <img src="assets/images/icons/service-promo-1.png" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">MIỄN PHÍ VẬN CHUYỂN</h6>
                                <p>Hoàn 10% tiền mặt, giao hàng miễn phí và hơn thế nữa tại hơn 1000 nhà bán lẻ hàng đầu!</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="image">
                                <img src="assets/images/icons/service-promo-2.png" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">30 NGÀY HOÀN TIỀN</h6>
                                <p>Đảm bảo hài lòng 100% hoặc nhận lại tiền trong vòng 30 ngày!</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="image">
                                <img src="assets/images/icons/service-promo-3.png" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">THANH TOÁN AN TOÀN</h6>
                                <p>Thanh toán bằng các phương thức thanh toán an toàn nhanh chóng</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="600">
                            <div class="image">
                                <img src="assets/images/icons/service-promo-4.png" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">KHÁCH HÀNG THÂN THIẾT</h6>
                                <p>Thẻ cho 30% giao dịch mua còn lại của họ với tỷ lệ hoàn tiền 1%.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Section -->
    <div class="blog-default-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content" style="text-align: center;">
                                <h3 class="section-title" style="text-align: center;">GHÉ CỬA HÀNG</h3>
                                <p>Hãy đến với cửa hàng của chúng tôi, hàng ngàn sản phẩm đang chờ bạn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Banner Section -->
    <div class="banner-section section-top-gap-100 section-fluid">
        <div class="banner-wrapper">
            <div class="container-fluid">
                <div class="row mb-n6">

                    <div class="col-lg-6 col-12 mb-6">
                        <!-- Start Banner Single Item -->
                        <div class="banner-single-item banner-style-1 banner-animation img-responsive"
                            data-aos="fade-up" data-aos-delay="0">
                            <div class="image">
                                <img src="assets/images/banner/banner-style-1-img-1.jpg" alt="">
                            </div>
                            <div class="content">
                                <h4 class="titlee" style="color: aliceblue;">ĐỒNG HAY CÙNG BẠN</h4>
                                <h5 class="sub-titlee" style="color: aliceblue;">Trên những chặng đường</h5>
                                <a href="shop-grid-sidebar-left.php" style="color: aliceblue;"
                                    class="btn btn-lg btn-outline-golden icon-space-left"><span
                                        class="d-flex align-items-center">Khám phá ngay<i
                                            class="ion-ios-arrow-thin-right"></i></span></a>
                            </div>
                        </div>
                        <!-- End Banner Single Item -->
                    </div>

                    <div class="col-lg-6 col-12 mb-6">
                        <div class="row mb-n6">
                            <!-- Start Banner Single Item -->
                            <div class="col-lg-6 col-sm-6 mb-6">
                                <div class="banner-single-item banner-style-2 banner-animation img-responsive"
                                    data-aos="fade-up" data-aos-delay="0">
                                    <div class="image">
                                        <img src="assets/images/banner/banner-style-2-img-1.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="titlee" >GIÀY ĐỆM <br>
                                            Mẫu mới</h4>
                                        <a href="shop-grid-sidebar-left.php" class="link-text"><span>Xem chi tiết</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Banner Single Item -->
                            <!-- Start Banner Single Item -->
                            <div class="col-lg-6 col-sm-6 mb-6">
                                <div class="banner-single-item banner-style-2 banner-animation img-responsive"
                                    data-aos="fade-up" data-aos-delay="200">
                                    <div class="image">
                                        <img src="assets/images/banner/banner-style-2-img-2.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="titlee">Giày đệm<br>
                                            mẫu mới</h4>
                                        <a href="shop-grid-sidebar-left.php" class="link-text"><span>Xem chi tiết</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Banner Single Item -->
                            <!-- Start Banner Single Item -->
                            <div class="col-lg-6 col-sm-6 mb-6">
                                <div class="banner-single-item banner-style-2 banner-animation img-responsive"
                                    data-aos="fade-up" data-aos-delay="0">
                                    <div class="image">
                                        <img src="assets/images/banner/banner-style-2-img-3.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="titlee">Phong cách thể thao<br>
                                            cho nữ</h4>
                                        <a href="shop-grid-sidebar-left.php" class="link-text"><span>Xem chi tiết</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Banner Single Item -->
                            <!-- Start Banner Single Item -->
                            <div class="col-lg-6 col-sm-6 mb-6">
                                <div class="banner-single-item banner-style-2 banner-animation img-responsive"
                                    data-aos="fade-up" data-aos-delay="200">
                                    <div class="image">
                                        <img src="assets/images/banner/banner-style-2-img-4.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="titlee">Giày đệm thể thao <br>
                                            cho nữ</h4>
                                        <a href="shop-grid-sidebar-left.php"><span class="link-text">Xem chi tiết</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Banner Single Item -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Banner Section -->

    <!-- Start Product Default Slider Section -->
    <div class="product-default-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title">SẢN PHẨM NỔI BẬC</h3>
                                <p>Mua ngay để nhận ngay các ưu đãi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider-default-2rows default-slider-nav-arrow">
                            <!-- Slider main container -->
                            <div class="swiper-container product-default-slider-4grid-2row">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                <?php
require("conn.php");

// Kiểm tra xem có tồn tại giá trị trong biến $_POST["ketqua"] hay không
if (isset($_POST["ketqua"])) {
    $key = $_POST['key'];
    $lenh = "SELECT * FROM `product` WHERE tensp LIKE '%$key%' OR giasp LIKE '%$key%' OR hangsp LIKE '%$key%' OR motasp LIKE '%$key%'";
    $result = mysqli_query($conn, $lenh);
    $n = mysqli_num_rows($result);
} else {
    $lenh = "SELECT * FROM `product` LIMIT 8";
    $result = mysqli_query($conn, $lenh);
    $n = mysqli_num_rows($result);
}
?>

<!-- Hiển thị kết quả truy vấn -->
<?php
if ($n > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
                                   <!-- Start Product Default Single Item -->
<div class="product-default-single-item product-color--golden swiper-slide">
    <div class="image-box">
        <a href="productdetail.php?id=<?= $row["id"] ?>" class="image-link">
            <img class="img" src="images/<?= $row["hinhanhsp"] ?>">
        </a>
        <div class="tag">
            <span>Hot</span>
        </div>
        <div class="action-link">
            <div class="action-link-left">
                <a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#modalAddcart"
                    data-id="<?= $row["id"] ?>">Thêm Vào giỏ hàng</a>
            </div>
            <div class="action-link-right">
                <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i
                        class="icon-magnifier"></i></a>
                <a href="wishlist.php"><i class="icon-heart"></i></a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="content-left">
            <h6 class="title"><a href="productdetail.php?id=<?= $row["id"] ?>"><?= $row["tensp"] ?></a></h6>
            <ul class="review-star">
                <li class="fill"><i class="ion-android-star"></i></li>
                <li class="fill"><i class="ion-android-star"></i></li>
                <li class="fill"><i class="ion-android-star"></i></li>
                <li class="fill"><i class="ion-android-star"></i></li>
                <li class="empty"><i class="ion-android-star"></i></li>
            </ul>
        </div>
        <div class="content-right">
            <span class="price"><?= $row["giasp"] ?></span>
        </div>
    </div>
</div>
<!-- End Product Default Single Item -->

                                    <?php
    }
} else {
    echo "Không có dữ liệu.";
}

// Đóng kết nối cơ sở dữ liệu
mysqli_close($conn);
?>
                                    <!-- End Product Default Single Item -->
                                    
                                    <!-- End Product Default Single Item -->
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <!-- <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Default Slider Section -->

    <!-- Start Banner Section -->
   
    <!-- End Banner Section -->

    <!-- Start Product Default Slider Section -->
    <div class="product-default-slider-section section-top-gap-100 section-fluid section-inner-bg">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title">Bán Chạy Nhất</h3>
                                <p>Sản phẩn hot nhất tuần</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="product-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider-default-1row default-slider-nav-arrow">
                            <!-- Slider main container -->
                            <div class="swiper-container product-default-slider-4grid-1row">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- End Product Default Single Item -->
                                    <?php
require("conn.php");

// Kiểm tra xem có tồn tại giá trị trong biến $_POST["ketqua"] hay không
if (isset($_POST["ketqua"])) {
    $key = $_POST['key'];
    $lenh = "SELECT * FROM `product` WHERE tensp LIKE '%$key%' OR giasp LIKE '%$key%' OR hangsp LIKE '%$key%' OR motasp LIKE '%$key%'";
    $result = mysqli_query($conn, $lenh);
    $n = mysqli_num_rows($result);
} else {
    $lenh = "SELECT * FROM `product` LIMIT 4";
    $result = mysqli_query($conn, $lenh);
    $n = mysqli_num_rows($result);
}
?>

<!-- Hiển thị kết quả truy vấn -->
<?php
if ($n > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
    <div class="image-box">
        <a href="productdetail.php?id=<?= $row["id"] ?>" class="image-link">
            <img class="img" src="images/<?= $row["hinhanhsp"] ?>">
        </a>
        <div class="tag">
            <span>Hot</span>
        </div>
        <div class="action-link">
            <div class="action-link-left">
                <a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#modalAddcart"
                    data-id="<?= $row["id"] ?>">Thêm Vào giỏ hàng</a>
            </div>
            <div class="action-link-right">
                <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i
                        class="icon-magnifier"></i></a>
                <a href="wishlist.php"><i class="icon-heart"></i></a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="content-left">
            <h6 class="title"><a href="productdetail.php?id=<?= $row["id"] ?>"><?= $row["tensp"] ?></a></h6>
            <ul class="review-star">
                <li class="fill"><i class="ion-android-star"></i></li>
                <li class="fill"><i class="ion-android-star"></i></li>
                <li class="fill"><i class="ion-android-star"></i></li>
                <li class="fill"><i class="ion-android-star"></i></li>
                <li class="empty"><i class="ion-android-star"></i></li>
            </ul>
        </div>
        <div class="content-right">
            <span class="price"><?= $row["giasp"] ?></span>
        </div>
    </div>
</div>
                                    <!-- End Product Default Single Item -->
                                    <?php
    }
} else {
    echo "Không có dữ liệu.";
}

// Đóng kết nối cơ sở dữ liệu
mysqli_close($conn);
?>
                                    <!-- Start Product Default Single Item -->
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <!-- <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Default Slider Section -->       

    <!-- Start Footer Section -->
    <footer class="footer-section footer-bg section-top-gap-100">
        <div class="footer-wrapper">
            <!-- Start Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row mb-n6">
                       
                        <div class="col-lg-3 col-sm-6 mb-6">
                            <!-- Start Footer Single Item -->
                            <div class="footer-widget-single-item footer-widget-color--golden mar" data-aos="fade-up"
                                data-aos-delay="200">
                                <h5 class="title">DANH MỤC</h5>
                                <ul class="footer-nav">
                                    <li><a href="wishlist.php">TRANG CHỦ</a></li>
                                    <li><a href="privacy-policy.php">CỬA HÀNG</a></li>
                                    <li><a href="faq.php">LIÊN HỆ</a></li>
                                    <li><a href="#">GIỚI THIỆU</a></li>
                                </ul>
                            </div>
                       </div>
                        <div class="col-lg-3 col-sm-6 mb-6">
                            <!-- Start Footer Single Item -->
                            <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
                                data-aos-delay="400">
                                <h5 class="title">TÀI KHOẢN</h5>
                                <ul class="footer-nav">
                                <li><a href="my-account.php"><?php echo $_SESSION['username']; ?></a></li>
                                    <li><a href="#">ĐĂNG XUẤT</a></li>
                                    <li><a href="#">GIỎ HÀNG</a></li>
                                    <li><a href="#">YÊU THÍCH</a></li>
                                   
                                </ul>
                            </div>
                            <!-- End Footer Single Item -->
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-6">
                            <!-- Start Footer Single Item -->
                            <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
                                data-aos-delay="0">
                                <h5 class="title">HOTLINE</h5>
                                <ul class="footer-nav">
                                    <li><a href="#"><i class="fa-solid fa-phone"></i> 0912345678</a></li>
                                    <li><a href="#"><i class="fa-solid fa-phone"></i> 0912345644</a></li>
                                    <li><a href="#"><i class="fa-solid fa-phone"></i> 0912345623</a></li>                                  
                                </ul>
                            </div>
                            <!-- End Footer Single Item -->
                        </div>
                        
                       <div class="col-lg-3 col-sm-6 mb-6">
                            <!-- Start Footer Single Item -->
                            <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
                                data-aos-delay="600">
                                <h5 class="title">ĐỊA CHỈ</h5>
                                <div class="footer-about">
                                <ul class="footer-nav">
                                    <li><a href="#"><i class="fa-sharp fa-solid fa-location-dot"></i>  45 Nguyễn Khắc Nhu, Phường Cô Giang, Quận 1, Thành phố Hồ Chí Minh</a></li>
                                    <li><a href="#"><i class="fa-sharp fa-solid fa-location-dot"></i>  233A Đ. Phan Văn Trị, Phường 11, Bình Thạnh, Thành phố Hồ Chí Minh</li>
                                    <li><a href="#"><i class="fa-sharp fa-solid fa-location-dot"></i>  69/68 Đ. Đặng Thuỳ Trâm, Phường 13, Bình Thạnh, Thành phố Hồ Chí Minh</a></li>                                  
                                </ul>
                                </div>
                            </div>
                            <!-- End Footer Single Item -->
                        </div>
                </div>
            </div>
            <!-- End Footer Top -->

            <!-- Start Footer Center -->
            <div class="footer-center">
                <div class="container">
                    <div class="row mb-n6">
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-6">
                            <div class="footer-social" data-aos="fade-up" data-aos-delay="0">
                                <h4 class="title">THEO DÕI CHÚNG TÔI</h4>
                                <ul class="footer-social-link">
                                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-square-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-6 mb-6">
                            <div class="footer-newsletter" data-aos="fade-up" data-aos-delay="200">
                                <h4 class="title">ĐỪNG BỎ NHỮNG TIN TỨC MỚI NHẤT</h4>
                                <div class="form-newsletter">
                                    <form action="#" method="post">
                                        <div class="form-fild-newsletter-single-item input-color--golden">
                                            <input type="email" placeholder="Your email address..." required>
                                            <button type="submit">SUBSCRIBE!</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Center -->

            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div
                        class="row justify-content-between align-items-center align-items-center flex-column flex-md-row mb-n6">
                        <div class="col-auto mb-6">
                            <div class="footer-copyright">
                                <p class="copyright-text">&copy; 2023 <a href="index.php"> Made with <i
                                        class="fa fa-heart text-danger"></i> by <a href=""
                                        target="_blank">NHÓM 1</a> </p>

                            </div>
                        </div>
                        <div class="col-auto mb-6">
                            <div class="footer-payment">
                                <div class="image">
                                    <img src="assets/images/company-logo/payment.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Bottom -->
        </div>
    </footer>
    <!-- End Footer Section -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
    <div class="modal fade" id="modalAddcart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close modal-close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="modal-add-cart-product-img">
                                            <img class="img-fluid"
                                                src="assets/images/product/default/home-1/default-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="modal-add-cart-info"><i class="fa fa-check-square"></i>Đã thêm vào giỏ hàng</div>
                                        <div class="modal-add-cart-product-cart-buttons">
                                            <a href="cart.php">Giỏ hàng</a>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 modal-border">
                                <ul class="modal-add-cart-product-shipping-info">
                                    <li> <strong><i class="icon-shopping-cart"></i> Có "" trong giỏ hàng của bạn</strong></li>
                                    <li> <strong>Tổng giá: </strong> <span>$187.00</span></li>
                                    <li class="modal-continue-button"><a href="#" data-bs-dismiss="modal">Tiếp tục mua sắm</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Add cart -->

    <!-- Start Modal Quickview cart -->
    <div class="modal fade" id="modalQuickview" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close modal-close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-details-gallery-area mb-7">
                                    <!-- Start Large Image -->
                                    <div class="product-large-image modal-product-image-large swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-1/default-1.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-1/default-2.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-1/default-3.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-1/default-4.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-1/default-5.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-1/default-6.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Large Image -->
                                    <!-- Start Thumbnail Image -->
                                    <div
                                        class="product-image-thumb modal-product-image-thumb swiper-container pos-relative mt-5">
                                        <div class="swiper-wrapper">
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-1.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-2.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-3.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-4.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-5.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-6.jpg" alt="">
                                            </div>
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class="gallery-thumb-arrow swiper-button-next"></div>
                                        <div class="gallery-thumb-arrow swiper-button-prev"></div>
                                    </div>
                                    <!-- End Thumbnail Image -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-product-details-content-area">
                                    <!-- Start  Product Details Text Area-->
                                    <div class="product-details-text">
                                        <h4 class="title">Nonstick Dishwasher PFOA</h4>
                                        <div class="price"><del>$70.00</del>$80.00</div>
                                    </div> <!-- End  Product Details Text Area-->
                                    <!-- Start Product Variable Area -->
                                    <div class="product-details-variable">
                                        <!-- Product Variable Single Item -->
                                        <div class="variable-single-item">
                                            <span>Color</span>
                                            <div class="product-variable-color">
                                                <label for="modal-product-color-red">
                                                    <input name="modal-product-color" id="modal-product-color-red"
                                                        class="color-select" type="radio" checked>
                                                    <span class="product-color-red"></span>
                                                </label>
                                                <label for="modal-product-color-tomato">
                                                    <input name="modal-product-color" id="modal-product-color-tomato"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-tomato"></span>
                                                </label>
                                                <label for="modal-product-color-green">
                                                    <input name="modal-product-color" id="modal-product-color-green"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-green"></span>
                                                </label>
                                                <label for="modal-product-color-light-green">
                                                    <input name="modal-product-color"
                                                        id="modal-product-color-light-green" class="color-select"
                                                        type="radio">
                                                    <span class="product-color-light-green"></span>
                                                </label>
                                                <label for="modal-product-color-blue">
                                                    <input name="modal-product-color" id="modal-product-color-blue"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-blue"></span>
                                                </label>
                                                <label for="modal-product-color-light-blue">
                                                    <input name="modal-product-color"
                                                        id="modal-product-color-light-blue" class="color-select"
                                                        type="radio">
                                                    <span class="product-color-light-blue"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Product Variable Single Item -->
                                        <div class="d-flex align-items-center flex-wrap">
                                            <div class="variable-single-item ">
                                                <span>Quantity</span>
                                                <div class="product-variable-quantity">
                                                    <input min="1" max="100" value="1" type="number">
                                                </div>
                                            </div>

                                            <div class="product-add-to-cart-btn">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div> <!-- End Product Variable Area -->
                                    <div class="modal-product-about-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                            laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                                            in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel
                                            recusandae</p>
                                    </div>
                                    <!-- Start  Product Details Social Area-->
                                    <div class="modal-product-details-social">
                                        <span class="title">SHARE THIS PRODUCT</span>
                                        <ul>
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>

                                    </div> <!-- End  Product Details Social Area-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Quickview cart -->

    <!-- ::::::::::::::All JS Files here :::::::::::::: -->
    <!-- Global Vendor, plugins JS -->
    <!-- <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>  -->

    <!--Plugins JS-->
    <!-- <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/material-scrolltop.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.js"></script>
    <script src="assets/js/plugins/jquery.lineProgressbar.js"></script>
    <script src="assets/js/plugins/aos.min.js"></script>
    <script src="assets/js/plugins/jquery.instagramFeed.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var addToCartBtns = document.querySelectorAll(".add-to-cart-btn");

        addToCartBtns.forEach(function(btn) {
            btn.addEventListener("click", function(e) {
                e.preventDefault();
                var productId = this.getAttribute("data-id");

                // Sử dụng AJAX để gửi yêu cầu lấy thông tin sản phẩm từ server
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "get_product_info.php?id=" + productId, true);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        var productInfo = JSON.parse(xhr.responseText);
                        updateModalContent(productInfo);
                    }
                };
                xhr.send();
            });
        });

        function updateModalContent(productInfo) {
            var modalImg = document.querySelector("#modalAddcart .modal-add-cart-product-img img");
            var modalInfo = document.querySelector("#modalAddcart .modal-add-cart-info");
            var modalCartButtons = document.querySelector("#modalAddcart .modal-add-cart-product-cart-buttons");
            var modalShippingInfo = document.querySelector("#modalAddcart .modal-add-cart-product-shipping-info");

            modalImg.src = productInfo.image;
            modalInfo.innerHTML = productInfo.message;
            modalCartButtons.innerHTML = productInfo.buttons;
            modalShippingInfo.innerHTML = productInfo.shippingInfo;
        }
    });
</script>
<style>
    .image-box {
    width: 250px;
    height: 250px;
    object-fit:cover;
}
.title a {
    display: block;
    width: 20ch;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.titlee {
    font-family: 'Roboto', sans-serif;
    color: #f0eded;
    text-shadow:2px 3px #323232;
    font-size:30px;
}

.mb-n6{
    display:flex;
    justify-content:space-between;
   
}

.link-text{
    color:white;
}

</style>
</body>



</html>