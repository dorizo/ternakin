<?php use App\Models\Menu_model;
 use App\Models\Konfigurasi_model;

$menu    = new Menu_model();
$berita  = $menu->berita();
$profil  = $menu->profil();
$layanan = $menu->layanan();
$galery = $menu->galery();
$video = $menu->video();
$bestsaller = $menu->bestsaller();
$newproduk = $menu->newproduk();
$konfigurasi  = new Konfigurasi_model();
$site         = $konfigurasi->listing();


?>

<main class="main-content">
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area slider-default">
      <div class="home-slider-content">
        <div class="swiper-container home-slider-container">
          <div class="swiper-wrapper">
            <?php
            
foreach ($slider as $slider) {  ?>
            <div class="swiper-slide">
              <!-- Start Slide Item -->
              <div class="home-slider-item">
                <div class="bg-thumb bg-overlay bg-img" data-bg-img="<?= base_url('assets/upload/image/' . $slider['gambar']) ?>"></div>
                <div class="slider-content-area">
                  <div class="container">
                    <div class="row align-items-center">
                      <div class="col-md-8 col-lg-5 m-auto">
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Slide Item -->
            </div>
            <?php } ?>
            
          </div>
          <!-- Add Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!--== End Hero Area Wrapper ==-->
    <!--== End Collection Slider Area Wrapper ==-->

    <!--== Start Products Area Wrapper ==-->
    <section class="product-area best-sellers-product-area">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-6 m-auto">
            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
              <h2 class="title">Best Sellers</h2>
              <h5 class="subtitle">COLLECTION 2022</h5>
            </div>
          </div>
        </div>
        <div class="row row-gutter-60" data-aos="fade-up" data-aos-duration="1000">

        <?php foreach ($bestsaller as $key => $value) {
          # code...
        ?>
          
          <div class="col-sm-6 col-lg-4">
            <!-- Start Product Item -->
            <div class="product-item">
              <div class="product-thumb">
                <a href="<?=base_url("galeri/read/".$value["id_galeri"]."/".$value["judul_galeri"])?>">
                  <img src="<?= base_url('assets/upload/image/' . $value['gambar']) ?>" alt="Moren-Shop">
                  <span class="bg-thumb" data-bg-img="<?= base_url('assets/upload/image/' . $value['gambar']) ?>"></span>
                  <span class="thumb-overlay"></span>
                </a>
              
              </div>
              <div class="product-info">
                <div class="content-inner">                  
                  <h4 class="title"><a href="shop-single-product.html"><?=$value["judul_galeri"]?></a></h4>
                  <div class="prices">
                    <span class="price"><?=$value["website"]?></span>
                  </div>
                </div>
                
              </div>
            </div>
            <!-- End Product Item -->
          </div>
          <?php 
            } 
            ?>
        </div>
      </div>
    </section>
    <!--== End Products Area Wrapper ==-->

    <!--== Start Category Area Wrapper ==-->
    <section class="category-area category-default-area">
      <div class="container-fluid xs-pr-15 xs-pl-15 p-0" data-aos="fade-up" data-aos-duration="1200">
        <div class="row row-gutter-6 masonry2-grid category-masonry2-style1">
          <div class="masonry2-item">
            <div class="category-item">
              <div class="thumb">
                <img src="<?=base_url("template")?>/assets/img/shop/categorys/g1.png" alt="Moren-Shop">
              </div>
              <div class="content">
                <div class="inner-content">
                  <h4 class="title">Scarves | plain</h4>
                  
                  <a href="<?=base_url("galeri/kategori/plain");?>" class="btn-theme btn-white btn-border btn-size-sm">View All</a>
                </div>
              </div>
            </div>
          </div>
          <div class="masonry2-item item-size2">
            <div class="category-item">
              <div class="thumb">
                <img src="<?=base_url("template")?>/assets/img/shop/categorys/g5.png" alt="Moren-Shop">
              </div>
              <div class="content">
                <div class="inner-content">
                  <h4 class="title">Scarves | Signature</h4>
                  <a href="<?=base_url("galeri/kategori/Signature");?>" class="btn-theme btn-white btn-border btn-size-sm">View All</a>
                </div>
              </div>
            </div>
          </div>
          <div class="masonry2-item item-size3">
            <div class="category-item">
              <div class="thumb">
                <img src="<?=base_url("template")?>/assets/img/shop/categorys/g3.png" alt="Moren-Shop">
              </div>
              <div class="content">
                <div class="inner-content">
                <h4 class="title">Prayer | Set</h4>
                  <a href="<?=base_url("galeri/kategori/Prayer-Set");?>" class="btn-theme btn-white btn-border btn-size-sm">View All</a>
                </div>
              </div>
            </div>
          </div>
          <div class="masonry2-item item-size3">
            <div class="category-item">
              <div class="thumb">
                <img src="<?=base_url("template")?>/assets/img/shop/categorys/g2.png" alt="Moren-Shop">
              </div>
              <div class="content">
                <div class="inner-content">
                  <h4 class="title">Clothing | Tunic</h4>
                  <a href="<?=base_url("galeri/kategori/Tunic");?>" class="btn-theme btn-white btn-border btn-size-sm">View All</a>
                 </div>
              </div>
            </div>
          </div>
          <div class="masonry2-item">
            <div class="category-item">
              <div class="thumb">
                <img src="<?=base_url("template")?>/assets/img/shop/categorys/g4.png" alt="Moren-Shop">
              </div>
              <div class="content">
                <div class="inner-content">
                  <h4 class="title">Clothing | Gamis</h4>
                  <a href="<?=base_url("galeri/kategori/Gamis");?>" class="btn-theme btn-white btn-border btn-size-sm">View All</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Category Area Wrapper ==-->

    <!--== Start Products Area Wrapper ==-->
    <section class="product-area new-product-area">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-6 m-auto">
            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
              <h2 class="title">New Products</h2>
              <h5 class="subtitle">COLLECTION</h5>
            </div>
          </div>
        </div>
        <div class="row row-gutter-60" data-aos="fade-up" data-aos-duration="1000">
        <?php foreach ($newproduk as $key => $value) {
          # code...
        ?>
          <div class="col-sm-6 col-lg-4">
            <!-- Start Product Item -->
            <div class="product-item">
              <div class="product-thumb">
                <a href="<?=base_url("galeri/read/".$value["id_galeri"]."/".$value["judul_galeri"])?>">
                  <img src="<?= base_url('assets/upload/image/' . $value['gambar']) ?>" alt="Moren-Shop">
                  <span class="thumb-overlay"></span>
                </a>
                
              </div>
              <div class="product-info">
                <div class="content-inner">                  
                  <h4 class="title"><a href="shop-single-product.html"><?php print_r($value["judul_galeri"]) ?></a></h4>
                  <div class="prices">
                    <span class="price"><?=$value["website"]?></span>
                  </div>
                </div>
                
              </div>
            </div>
            <!-- End Product Item -->
          </div>
          <?php } ?>
          
          <div class="col-md-12 text-center">
            <a href="<?=base_url("galeri")?>" class="btn-theme btn-black btn-border btn-padding mt-20">View more</a>
          </div>
        </div>
      </div>
    </section>
    <!--== End Products Area Wrapper ==-->

    <!--== Start Video Divider Area Wrapper ==-->
    <div class="divider-area divider-about-area">
      <div class="container-fluid xs-pr-15 xs-pl-15 p-0">
        <div class="row">
          <div class="col-md-12">
            <div class="divider-about-content">
              <div class="divider-content" data-aos="fade-up" data-aos-duration="1000">
                <span>Profile</span>
                <img class="logo-divider" src="<?=base_url("assets/upload/image/".$site["icon"])?>" alt="Logo">
                <p><?php print_r($site["singkatan"]);?></p>
                <a href="about.html" class="btn-theme btn-black btn-border">Read more</a>
              </div>
              <div class="video-content" data-aos="fade-up" data-aos-duration="1000">
                <div class="thumb">
                  <img src="template/assets/img/photos/video.png" alt="Moren-Image">
                  <a class="btn-play play-video-popup" href="https://www.youtube.com/watch?v=<?=$video['video']?>">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="110" height="110" fill="none" viewBox="0 0 110 110"><circle cx="55" cy="55" r="54" stroke="currentColor" stroke-width="2" fill="none"></circle><path stroke="currentColor" stroke-width="2" d="M43.5 35.081L78 55 43.5 74.919V35.08z" fill="none"></path></svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Video Divider Area Wrapper ==-->

    <!--== Start Featured Area Wrapper ==-->
    <!-- <section class="featured-area">
      <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="featured-item">
              <div class="content">
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="76" height="46" fill="none" viewBox="0 0 76 46"><path fill="currentColor" d="M74.757 45.702H1.243a1.08 1.08 0 0 1-1.08-1.08V33.593a1.081 1.081 0 0 1 .864-1.06 9.73 9.73 0 0 0 0-19.07 1.081 1.081 0 0 1-.865-1.059V1.378A1.081 1.081 0 0 1 1.243.297h73.514a1.08 1.08 0 0 1 1.08 1.081v11.027a1.082 1.082 0 0 1-.864 1.06 9.73 9.73 0 0 0 0 19.07 1.081 1.081 0 0 1 .865 1.06V44.62a1.08 1.08 0 0 1-1.081 1.081zM2.324 43.54h71.352v-9.097a11.892 11.892 0 0 1 0-22.887V2.46H2.324v9.097a11.892 11.892 0 0 1 0 22.887v9.097z"></path><path fill="currentColor" d="M54.216 6.39a1.081 1.081 0 0 1-1.08-1.081V1.378a1.081 1.081 0 0 1 2.161 0v3.93a1.081 1.081 0 0 1-1.08 1.082zm0 9.828a1.08 1.08 0 0 1-1.08-1.08v-3.932a1.081 1.081 0 0 1 2.161 0v3.931a1.081 1.081 0 0 1-1.08 1.081zm0 9.828a1.08 1.08 0 0 1-1.08-1.081v-3.93a1.081 1.081 0 0 1 2.161 0v3.931a1.081 1.081 0 0 1-1.08 1.08zm0 9.828a1.08 1.08 0 0 1-1.08-1.08v-3.931a1.082 1.082 0 0 1 2.161 0v3.93a1.081 1.081 0 0 1-1.08 1.081zm0 9.828a1.08 1.08 0 0 1-1.08-1.08V40.69a1.082 1.082 0 0 1 2.161 0v3.931a1.081 1.081 0 0 1-1.08 1.081zm-33.59-11.305a1.081 1.081 0 0 1-.764-1.846l20.034-20.045a1.082 1.082 0 1 1 1.529 1.529L21.39 34.08a1.082 1.082 0 0 1-.764.316zm16.704.516a4.993 4.993 0 1 1 4.994-4.994 5 5 0 0 1-4.993 4.994zm0-7.826a2.832 2.832 0 1 0 .001 5.663 2.832 2.832 0 0 0 0-5.663zm-13.796-6.079a4.994 4.994 0 1 1 4.994-4.995 5 5 0 0 1-4.994 4.995zm0-7.826a2.832 2.832 0 1 0 0 5.663 2.832 2.832 0 0 0 0-5.663z"></path></svg>       </span>
                <div class="inner-content">
                  <h4 class="title">NEW DISCOUNT</h4>
                  <p>Don't miss out on the opportunity to snag our special offers! Visit our discounts page and enjoy attractive prices and exclusive deals on a variety of selected products</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="featured-item mt-xs-30">
              <div class="content">
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="76" height="72" fill="none" viewBox="0 0 76 72"><path fill="currentColor" d="M64.733 71.123H11.267a4.432 4.432 0 0 1-4.422-4.42V31.614a1.081 1.081 0 0 1 1.081-1.08h60.147a1.081 1.081 0 0 1 1.082 1.08v35.089a4.432 4.432 0 0 1-4.422 4.42zM9.008 32.695v34.008a2.263 2.263 0 0 0 2.26 2.26h53.465a2.262 2.262 0 0 0 2.26-2.26V32.695H9.007z"></path><path fill="currentColor" d="M73.085 32.695H2.915a2.755 2.755 0 0 1-2.753-2.749v-8.357a2.755 2.755 0 0 1 2.753-2.751h70.17a2.755 2.755 0 0 1 2.753 2.751v8.357a2.755 2.755 0 0 1-2.753 2.75zM2.915 21a.59.59 0 0 0-.59.59v8.356a.59.59 0 0 0 .59.59h70.17a.59.59 0 0 0 .59-.59v-8.357a.59.59 0 0 0-.59-.589H2.915z"></path><path fill="currentColor" d="M40.23 21a1.081 1.081 0 0 1-1.032-1.404c1.336-4.276 3.732-10.054 7.554-13.333A7.946 7.946 0 0 1 57.08 18.34a17.38 17.38 0 0 1-4.117 2.558 1.082 1.082 0 0 1-1.267-1.718c.102-.104.224-.186.36-.242a15.29 15.29 0 0 0 3.614-2.235 5.782 5.782 0 1 0-7.507-8.796C44.55 11 42.29 16.963 41.265 20.242A1.081 1.081 0 0 1 40.23 21z"></path><path fill="currentColor" d="M40.23 21a1.08 1.08 0 0 1-1.031-.757c-1.281-4.094-4.108-11.54-8.636-15.42a7.433 7.433 0 0 0-9.66 11.3 19.242 19.242 0 0 0 4.55 2.816 1.08 1.08 0 1 1-.908 1.962 21.321 21.321 0 0 1-5.052-3.136A9.597 9.597 0 0 1 31.968 3.178c4.695 4.02 7.645 11.147 9.297 16.419A1.081 1.081 0 0 1 40.23 21zm3.932 50.123H31.838a1.081 1.081 0 0 1-1.081-1.08v-38.43a1.081 1.081 0 0 1 1.08-1.08h12.325a1.081 1.081 0 0 1 1.081 1.08v38.428a1.081 1.081 0 0 1-1.08 1.081zM32.92 68.961h10.16V32.695H32.92v36.266z"></path></svg></span>
                <div class="inner-content">
                  <h4 class="title">GUARANTEE</h4>
                  <p>Our Commitment to Quality: Each product is meticulously crafted with the highest standards to ensure durability, functionality, and your utmost satisfaction. Experience excellence in every detail</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="featured-item mt-sm-30">
              <div class="content">
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="76" height="74" fill="none" viewBox="0 0 76 74"><path fill="currentColor" d="M74.757 73.649H1.243a1.08 1.08 0 0 1-1.08-1.081V20.4a1.081 1.081 0 0 1 1.08-1.081h73.514a1.08 1.08 0 0 1 1.08 1.081v52.168a1.08 1.08 0 0 1-1.08 1.08zM2.324 71.487h71.352V21.48H2.324v50.006z"></path><path fill="currentColor" d="M74.757 21.481H1.243a1.08 1.08 0 0 1-.865-1.73L14.607.785a1.081 1.081 0 0 1 .864-.432H60.53a1.081 1.081 0 0 1 .865.432l14.228 18.968a1.081 1.081 0 0 1-.865 1.73zM3.405 19.32h69.19L59.988 2.514H16.012L3.405 19.319z"></path><path fill="currentColor" d="M47.19 21.481H28.81a1.082 1.082 0 0 1-1.059-1.297l3.784-18.968a1.08 1.08 0 0 1 1.06-.864h10.81a1.08 1.08 0 0 1 1.06.864l3.784 18.971a1.08 1.08 0 0 1-1.06 1.297v-.003zM30.128 19.32H45.87L42.52 2.514h-9.038L30.13 19.319z"></path><path fill="currentColor" d="M47.19 41.848a1.08 1.08 0 0 1-.685-.245L38 34.653l-8.505 6.95a1.08 1.08 0 0 1-1.765-.836V20.4a1.08 1.08 0 0 1 1.08-1.081h18.38a1.08 1.08 0 0 1 1.08 1.081v20.367a1.08 1.08 0 0 1-1.08 1.08zM38 32.176c.25 0 .491.087.684.245l7.424 6.066V21.48H29.892v17.006l7.424-6.067a1.08 1.08 0 0 1 .684-.244z"></path></svg></span>
                <div class="inner-content">
                  <h4 class="title">STYLE YOUR DAY</h4>
                  <p>Elevate your style with our exquisite fashion collection. Discover a curated selection of trend-setting pieces, designed to inspire confidence and leave a lasting impression. Unveil your true fashion identity with us.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--== End Featured Area Wrapper ==-->
  </main>