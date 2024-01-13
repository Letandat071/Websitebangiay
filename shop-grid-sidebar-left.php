<?php
include("auth.php"); ?>
<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>HONO - Multi Purpose HTML Template</title>

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">

    
    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
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
                                    <a href="wishlist.php" class="">
                                        <i class="icon-heart"></i>
                                        <span class="item-count">3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="cart.php" class="">
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
                            <a href="#"><span>TRANG CHỦ</span></a>
                        <li>
                            <a href="#"><span>CỬA HÀNG</span></a>
                            
                            
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
                <span>Address: Your address goes here.</span>
                <span>Call Us: 0123456789, 0123456789</span>
                <span>Email: demo@example.com</span>
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
            <input type="search" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-lg btn-golden">Search</button>
        </form>
    </div>
    <!-- End Offcanvas Search Bar Section -->

    <!-- Offcanvas Overlay -->
    <div class="offcanvas-overlay"></div>

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">CỬA HÀNG</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.php">Trang chủ</a></li>
                                    <li><a href="shop-grid-sidebar-left.php">Cửa hàng</a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Shop Section:::... -->
    <div class="shop-section">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <!-- Start Sidebar Area -->
                    <div class="siderbar-section" data-aos="fade-up" data-aos-delay="0">

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">Loại giày</h6>
                            <div class="sidebar-content">
                                <ul class="sidebar-menu">
                                    <li><a href="#">Giày thể thao</a></li>
                                    <li><a href="#"> Giày chạy</a></li>
                                    <li><a href="#"> Giày bóng đá</a></li>
                                    <li><a href="#"> Giày đi bộ</a></li>
                                    <li><a href="#">Giày dự tiệc</a></li>
                                    <li><a href="#"> Giày cao gót</a></li>
                                </ul>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">LỌC GIÁ</h6>
                            <div class="sidebar-content">
                                <div id="slider-range"></div>
                                <div class="filter-type-price">
                                    <label for="amount">Giá từ:</label>
                                    <input type="text" id="amount">
                                </div>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">Hãng</h6>
                            <div class="sidebar-content">
                                <div class="filter-type-select">
                                    <ul>
                                        <li>
                                            <label class="checkbox-default" for="brakeParts">
                                                <input type="checkbox" id="brakeParts">
                                                <span>Nike</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-default" for="accessories">
                                                <input type="checkbox" id="accessories">
                                                <span>Adidas</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-default" for="EngineParts">
                                                <input type="checkbox" id="EngineParts">
                                                <span>Puma</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-default" for="hermes">
                                                <input type="checkbox" id="hermes">
                                                <span>Vina Giày</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-default" for="tommyHilfiger">
                                                <input type="checkbox" id="tommyHilfiger">
                                                <span>Anta</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">Màu sắc</h6>
                            <div class="sidebar-content">
                                <div class="filter-type-select">
                                    <ul>
                                        <li>
                                            <label class="checkbox-default" for="black">
                                                <input type="checkbox" id="black">
                                                <span>Đen</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-default" for="blue">
                                                <input type="checkbox" id="blue">
                                                <span>Xanh dương</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-default" for="brown">
                                                <input type="checkbox" id="brown">
                                                <span>Nâu</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-default" for="Green">
                                                <input type="checkbox" id="Green">
                                                <span>Xanh lá</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-default" for="white">
                                                <input type="checkbox" id="white">
                                                <span>Trắng</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">Thẻ phổ biến</h6>
                            <div class="sidebar-content">
                                <div class="tag-link">
                                    <a href="#">Châu á</a>
                                    <a href="#">nâu</a>
                                    <a href="#">châu âu</a>
                                    <a href="#">thể thao</a>
                                    <a href="#">trẻ tuổi</a>
                                    <a href="#">sang trọng</a>
                                    <a href="#">phong cách</a>
                                    <a href="#">du lịch</a>
                                    <a href="#">trắng</a>
                                </div>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        

                    </div> <!-- End Sidebar Area -->
                </div>
                <div class="col-lg-9">
                    <!-- Start Shop Product Sorting Section -->
                    <div class="shop-sort-section">
                        <div class="container">
                            <div class="row">
                                <!-- Start Sort Wrapper Box -->
                                <div class="sort-box d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column"
                                    data-aos="fade-up" data-aos-delay="0">
                                    <!-- Start Sort tab Button -->
                                    <div class="sort-tablist d-flex align-items-center">
                                        <ul class="tablist nav sort-tab-btn">
                                            <li><a class="nav-link active" data-bs-toggle="tab"
                                                    href="#layout-3-grid"><img src="assets/images/icons/bkg_grid.png"
                                                        alt=""></a></li>
                                            <li><a class="nav-link" data-bs-toggle="tab" href="#layout-list"><img
                                                        src="assets/images/icons/bkg_list.png" alt=""></a></li>
                                        </ul>

                                        <!-- Start Page Amount -->
                                        <div class="page-amount ml-2">
                                            <span>Danh sách sản phẩm</span>
                                        </div> <!-- End Page Amount -->
                                    </div> <!-- End Sort tab Button -->

                                    <!-- Start Sort Select Option -->
                                    <div class="sort-select-list d-flex align-items-center">
                                        <label class="mr-2">Sắp xếp theo:</label>
                                        <form action="#">
                                            <fieldset>
                                                <select name="speed" id="speed">
                                                    <option>Đánh giá cao đến thấp</option>
                                                    <option>Đánh giá thấp đến cao</option>
                                                    <option selected="selected">Mới nhất</option>
                                                    <option>Giá cao đến thấp</option>
                                                    <option>Giá thấp đến cao</option>
                                                    <option>Từ A - Z</option>
                                                </select>
                                            </fieldset>
                                        </form>
                                    </div> <!-- End Sort Select Option -->



                                </div> <!-- Start Sort Wrapper Box -->
                            </div>
                        </div>
                    </div> <!-- End Section Content -->

                    <!-- Start Tab Wrapper -->
                    <div class="sort-product-tab-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content tab-animate-zoom">
                                        <!-- Start Grid View Product -->
                                        <div class="tab-pane active show sort-layout-single" id="layout-3-grid">
    <div class="row">
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
        
        // Hiển thị kết quả truy vấn
        if ($n > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-xl-4 col-sm-6 col-12">
                    <!-- Start Product Default Single Item -->
                    <div class="product-default-single-item product-color--golden"
                        data-aos="fade-up" data-aos-delay="0">
                        <div class="image-box">
                            <a href="productdetail.php?id=<?= $row["id"] ?>" class="image-link">
                                <img src="images/<?= $row["hinhanhsp"] ?>"
                                    alt="">
                            </a>
                            <div class="action-link">
                                <div class="action-link-left">
                                <a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#modalAddcart"
                    data-id="<?= $row["id"] ?>">Thêm Vào giỏ hàng</a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="content">
                            <div class="content-left">
                                <h6 class="title"><a
                                        href="productdetail.php?id=<?= $row["id"] ?>"><?= $row["tensp"] ?></a></h6>
                                <ul class="review-star">
                                    <li class="fill"><i class="ion-android-star"></i>
                                    </li>
                                    <li class="fill"><i class="ion-android-star"></i>
                                    </li>
                                    <li class="fill"><i class="ion-android-star"></i>
                                    </li>
                                    <li class="fill"><i class="ion-android-star"></i>
                                    </li>
                                    <li class="empty"><i class="ion-android-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-right">
                                <span class="price">$<?= $row["giasp"] ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Default Single Item -->
                </div>
                <?php
            }
        } else {
            echo "Không có dữ liệu.";
        }

        // Đóng kết nối cơ sở dữ liệu
        mysqli_close($conn);
        ?>
    </div>
</div>
 <!-- End Grid View Product -->
                                        <!-- Start List View Product -->
                                        <div class="tab-pane sort-layout-single" id="layout-list">
                                            <div class="row">
                                            <?php
    require("conn.php");

    if (isset($_POST["ketqua"])) {
        $key = $_POST['key'];
        $query = "SELECT * FROM `product` WHERE tensp LIKE '%$key%' OR giasp LIKE '%$key%' OR hangsp LIKE '%$key%' OR motasp LIKE '%$key%'";
    } else {
        $query = "SELECT * FROM `product` LIMIT 8";
    }

    $result = mysqli_query($conn, $query);
    $n = mysqli_num_rows($result);

    if ($n > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
?>
        <div class="col-12">
            <!-- Start Product Default Single -->
            <div class="product-list-single product-color--golden">
                <a href="productdetail.php?id=<?= $row["id"] ?>" class="product-list-img-link">
                    <img class="img-fluid" src="images/<?= $row["hinhanhsp"] ?>" alt="">
                </a>
                <div class="product-list-content">
                    <h5 class="product-list-link"><a href="productdetail.php?id=<?= $row["id"] ?>"><?= $row["tensp"] ?></a></h5>
                    <ul class="review-star">
                        <li class="fill"><i class="ion-android-star"></i></li>
                        <li class="fill"><i class="ion-android-star"></i></li>
                        <li class="fill"><i class="ion-android-star"></i></li>
                        <li class="fill"><i class="ion-android-star"></i></li>
                        <li class="empty"><i class="ion-android-star"></i></li>
                    </ul>
                    <span class="product-list-price"><?= $row["giasp"] ?> vnd</span>
                    <p><?= substr($row["motasp"], 0, 200) ?></p>
                    <div class="product-action-icon-link-list">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart" data-id="<?= $row["id"] ?>" class="btn btn-lg btn-black-default-hover add-to-cart-btn">Add to cart</a>
                        <a href="productdetail.php?id=<?= $row["id"] ?>"class="btn btn-lg btn-black-default-hover">Chi tiết</a>
                        <a href="wishlist.php" class="btn btn-lg btn-black-default-hover"><i class="icon-heart"></i></a>
                    </div>
                </div>
            </div> <!-- End Product Default Single -->
        </div>
<?php
        }
    } else {
        echo "Không có dữ liệu.";
    }

    mysqli_close($conn);
?>

                                            </div>
                                        </div> <!-- End List View Product -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Tab Wrapper -->

                    <!-- Start Pagination -->
                    <div class="page-pagination text-center" data-aos="fade-up" data-aos-delay="0">
                        <ul>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="ion-ios-skipforward"></i></a></li>
                        </ul>
                    </div> <!-- End Pagination -->
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Shop Section:::... -->

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


    </div>
</div>
 <!-- End Modal Quickview cart -->

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
    #amount{
        margin-right:20px;
    }
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
.product-list-img-link img{
    width: 450px;
    object-fit: cover;
    height: 165px;
}
.product-list-img {
  max-width: 200px; /* Kích thước cố định của hình ảnh */
  float: right; /* Căn phải hình ảnh */
}
</style>
</body>
</html>