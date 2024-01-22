<?php use App\Models\Konfigurasi_model;

$konfigurasi = new Konfigurasi_model();
$site        = $konfigurasi->listing();
// Menu
use App\Models\Menu_model;

$menu         = new Menu_model();
$site         = $konfigurasi->listing();
$menu_berita  = $menu->berita();
$menu_profil  = $menu->profil();
$menu_layanan = $menu->layanan();
?>


  <!--== Start Footer Area Wrapper ==-->
  <footer class="footer-area footer-style1">
    
    <div class="footer-main">
      <div class="container">
        <div class="row row-gutter-0">
          <div class="col-sm-6 col-md-4">
            <div class="widget-item">
              <nav class="widget-menu-wrap">
                <ul class="nav-menu nav">
                  <li><a href="index.html">PRIVACY POLICY</a></li>
                  <li><a href="index.html">TERMS & CONDITIONS</a></li>
                  <li><a href="about.html">ABOUT</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget-item mt-xs-20">
              <nav class="widget-menu-wrap">
                <ul class="nav-menu nav">
                  <li><a href="index.html">SHIPPING INFO</a></li>
                  <li><a href="index.html">RETURNS / EXCHANGES</a></li>
                  <li><a href="contact.html">CONTACT</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-md-5">
            <div class="widget-item widget-social-item mt-sm-30 mt-xs-20">
              <span>ON SOCIAL NETWORKS</span>
              <div class="widget-social-icons">
                <a href="#/"><i class="lastudioicon lastudioicon-b-facebook"></i></a> 
                <a href="#/"><i class="lastudioicon lastudioicon-b-pinterest"></i></a> 
                <a href="#/"><i class="lastudioicon lastudioicon-b-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--== End Footer Area Wrapper ==-->
  
  <!--== Scroll Top Button ==-->
  <div class="scroll-to-top"><span class="icofont-arrow-up"></span></div>

  <!--== Start Product Quick View ==-->
  <aside class="product-quick-view-modal">
    <div class="product-quick-view-inner">
      <div class="product-quick-view-content">
        <button type="button" class="btn-close">
          <span class="close-icon"><i class="lastudioicon-e-remove"></i></span>
        </button>
        <div class="row row-gutter-0">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="thumb">
              <img src="assets/img/shop/quick-view1.jpg" alt="Moren-Shop">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="single-product-info">
              <h4 class="title">Product Simple</h4>
              <div class="product-rating">
                <div class="review">
                  <p><span></span>99 in stock</p>
                </div>
              </div>
              <div class="prices">
                <span class="price">£49.90</span>
              </div>
              <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla quis ipsum enim viverra. Enim in morbi tincidunt ante luctus tincidunt integer. Sed adipiscing vehicula.</p>
              <div class="quick-product-action">
                <div class="action-top">
                  <div class="pro-qty-area">
                    <div class="pro-qty">
                      <input type="text" id="quantity" title="Quantity" value="1">
                    <a href="#" class="inc qty-btn">+</a><a href="#" class="dec qty-btn">-</a></div>
                  </div>
                  <a class="btn-theme btn-black" href="shop-cart.html">Add to cart</a>
                </div>
                <div class="action-bottom">
                  <a class="btn-wishlist" href="shop-wishlist.html"><i class="labtn-icon labtn-icon-wishlist"></i>Add to wishlist</a>
                  <a class="btn-compare" href="shop-compare.html"><i class="labtn-icon labtn-icon-compare"></i>Add to compare</a>
                </div>
              </div>
              <div class="product-ratting">
                <div class="product-sku">
                  SKU: <span>REF. LA-276</span>
                </div>
              </div>
              <div class="product-categorys">
                <div class="product-category">
                  Category: <span>Uncategorized</span>
                </div>
              </div>
              <div class="widget">
                <h3 class="title">Tags:</h3>
                <div class="widget-tags">
                  <ul>
                    <li><a href="shop.html">Blazer,</a></li>
                    <li><a href="shop.html">Fashion,</a></li>
                    <li><a href="shop.html">wordpress,</a></li>
                  </ul>
                </div>
              </div>
              <div class="product-social-info">
                <a href="#"><span class="lastudioicon-b-facebook"></span></a>
                <a href="#"><span class="lastudioicon-b-twitter"></span></a>
                <a href="#"><span class="lastudioicon-b-linkedin"></span></a>
                <a href="#"><span class="lastudioicon-b-pinterest"></span></a>
              </div>
              <div class="product-nextprev">
                <a href="shop-single-product.html">
                  <i class="lastudioicon-arrow-left"></i>
                </a>
                <a href="shop-single-product.html">
                  <i class="lastudioicon-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="canvas-overlay"></div>
  </aside>
  <!--== End Product Quick View ==-->

  <!--== Start Aside Search Menu ==-->
  <div class="search-box-wrapper">
    <div class="search-box-content-inner">
      <div class="search-box-form-wrap">
        <div class="search-note">
          <p>Start typing and press Enter to search</p>
        </div>
        <form action="#" method="post">
          <div class="search-form position-relative">
            <label for="search-input" class="sr-only">Search</label>
            <input type="search" class="form-control" placeholder="Search" id="search-input">
            <button class="search-button"><i class="lastudioicon-zoom-1"></i></button>
          </div>
        </form>
      </div>
    </div>
    <!--== End Aside Search Menu ==-->
    <a href="javascript:;" class="search-close"><i class="lastudioicon-e-remove"></i></a>
  </div>
  <!--== End Aside Search Menu ==-->

  <!--== Start Sidebar Cart Menu ==-->
  <aside class="sidebar-cart-modal">
    <div class="sidebar-cart-inner">
      <div class="sidebar-cart-content">
        <a class="cart-close" href="javascript:void(0);"><i class="lastudioicon-e-remove"></i></a>
        <div class="sidebar-cart">
          <h4 class="sidebar-cart-title">Shopping Cart</h4>
          <div class="product-cart">
            <div class="product-cart-item">
              <div class="product-img">
                <a href="shop.html"><img src="assets/img/shop/cart/1.jpg" alt=""></a>
              </div>
              <div class="product-info">
                <h4 class="title"><a href="shop.html">I’m a Unicorn Earrings</a></h4>
                <span class="info">1 × £69.00</span>
              </div>
              <div class="product-delete"><a href="#/">×</a></div>
            </div>
            <div class="product-cart-item">
              <div class="product-img">
                <a href="shop.html"><img src="assets/img/shop/cart/2.jpg" alt=""></a>
              </div>
              <div class="product-info">
                <h4 class="title"><a href="shop.html">Knit cropped cardigan</a></h4>
                <span class="info">1 × £29.90</span>
              </div>
              <div class="product-delete"><a href="#/">×</a></div>
            </div>
          </div>
          <div class="cart-total">
            <h4>Subtotal: <span class="money">£98.90</span></h4>
          </div>
          <div class="shipping-info">
            <div class="loading-bar">
              <div class="load-percent"></div>
              <div class="label-free-shipping">
                <div class="free-shipping svg-icon-style">
                  <span class="svg-icon" id="svg-icon-shipping" data-svg-icon="assets/img/icons/shop1.svg"></span>
                </div>
                <p>Spend £101.10 to get Free Shipping</p>
              </div>
            </div>
          </div>
          <div class="cart-checkout-btn">
            <a class="btn-theme" href="shop-cart.html">View cart</a>
            <a class="btn-theme" href="shop-checkout.html">Checkout</a>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <div class="sidebar-cart-overlay"></div>
  <!--== End Sidebar Cart Menu ==-->

  <!--== Start Side Menu ==-->
  <aside class="off-canvas-wrapper">
    <div class="off-canvas-inner">
      <div class="off-canvas-overlay d-none"></div>
      <!-- Start Off Canvas Content Wrapper -->
      <div class="off-canvas-content">
        <!-- Off Canvas Header -->
        <div class="off-canvas-header">
          <div class="close-action">
            <button class="btn-close"><i class="icofont-close-line"></i></button>
          </div>
        </div>

        <div class="off-canvas-item">
          <!-- Start Mobile Menu Wrapper -->
          <div class="res-mobile-menu">
            <!-- Note Content Auto Generate By Jquery From Main Menu -->
          </div>
          <!-- End Mobile Menu Wrapper -->
        </div>
        <!-- Off Canvas Footer -->
        <div class="off-canvas-footer"></div>
      </div>
      <!-- End Off Canvas Content Wrapper -->
    </div>
  </aside>
  <!--== End Side Menu ==-->
</div>

<!-- ======= Footer ======= -->
  
<!--=======================Javascript============================-->

<!--=== Modernizr Min Js ===-->
<script src="<?= base_url() ?>/template/assets/js/modernizr.js"></script>
<!--=== jQuery Min Js ===-->
<script src="<?= base_url() ?>/template/assets/js/jquery-main.js"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="<?= base_url() ?>/template/assets/js/jquery-migrate.js"></script>
<!--=== Popper Min Js ===-->
<script src="<?= base_url() ?>/template/assets/js/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="<?= base_url() ?>/template/assets/js/bootstrap.min.js"></script>
<!--=== jquery Appear Js ===-->
<script src="<?= base_url() ?>/template/assets/js/jquery.appear.js"></script>
<!--=== jquery Swiper Min Js ===-->
<script src="<?= base_url() ?>/template/assets/js/swiper.min.js"></script>
<!--=== jquery Fancybox Min Js ===-->
<script src="<?= base_url() ?>/template/assets/js/fancybox.min.js"></script>
<!--=== jquery Aos Min Js ===-->
<script src="<?= base_url() ?>/template/assets/js/aos.min.js"></script>
<!--=== jquery Slicknav Js ===-->
<script src="<?= base_url() ?>/template/assets/js/jquery.slicknav.js"></script>
<!--=== jquery Countdown Js ===-->
<script src="<?= base_url() ?>/template/assets/js/jquery.countdown.min.js"></script>
<!--=== jquery Tippy Js ===-->
<script src="<?= base_url() ?>/template/assets/js/tippy.all.min.js"></script>
<!--=== Isotope Min Js ===-->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

<!--=== jquery Vivus Js ===-->
<script src="<?= base_url() ?>/template/assets/js/vivus.js"></script>
<!--=== Parallax Min Js ===-->
<script src="<?= base_url() ?>/template/assets/js/parallax.min.js"></script>
<!--=== Slick  Min Js ===-->
<script src="<?= base_url() ?>/template/assets/js/slick.min.js"></script>
<!--=== jquery Wow Min Js ===-->
<script src="<?= base_url() ?>/template/assets/js/wow.min.js"></script>
<!--=== jquery Zoom Min Js ===-->
<script src="<?= base_url() ?>/template/assets/js/jquery-zoom.min.js"></script>

<!--=== Custom Js ===-->
<script src="<?= base_url() ?>/template/assets/js/custom.js?v2"></script>

</body>
</html>