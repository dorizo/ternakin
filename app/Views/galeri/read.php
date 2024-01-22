<main class="main-content site-wrapper-reveal">
<section class="page-title-area bg-img" data-bg-img="<?=base_url("template")?>/assets/img/photos/bg-page1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content">
               </div>
          </div>
        </div>
      </div>
    </section>
    <!--== Start Page Title Area ==-->
    <div class="page-title-area page-title-area2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content content-style-2">
              <div class="bread-crumbs">
                <?php
               $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
                foreach ($crumbs as $segment) {
                  ?>
                  
                  <a href="index.html"><?=urldecode($segment);?><span class="breadcrumb-sep">></span></a>
                <?php
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
    <!--== End Page Title Area ==-->

    <!--== Start Shop Area ==-->
    <section class="product-area shop-single-product">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="single-product-slider">
              <div class="product-dec-slider-right">
                <div class="single-product-thumb">
                  <div class="single-product-thumb-slider">
                    <div class="zoom zoom-hover">
                      <div class="thumb-item">
                        <a class="lightbox-image" data-fancybox="gallery" href="<?=base_url("assets/upload/image/".$galeri["gambar"])?>">
                          <img src="<?=base_url("assets/upload/image/".$galeri["gambar"])?>" alt="Image-HasTech">
                        </a>
                      </div>
                    </div>
                    <?php foreach ($detail as $key => $value) {
                      # code...
                   ?>
                    <div class="zoom zoom-hover">
                      <div class="thumb-item">
                        <a class="lightbox-image" data-fancybox="gallery" href="<?=base_url("assets/upload/image/".$galeri["gambar"])?>">
                          <img src="<?=base_url("assets/upload/image/".$value["gambar"])?>" alt="Image-HasTech">
                        </a>
                      </div>
                    </div>
                    <?php
                     }
                    ?>
                   
                  </div>
                  
                </div>
              </div>
              <div class="product-dec-slider-left">
                <div class="single-product-nav">
                  <div class="single-product-nav-slider">
                    <div class="nav-item">
                      <img src="<?=base_url("assets/upload/image/thumbs/".$galeri["gambar"])?>" alt="Image-HasTech">
                    </div>
                    <?php foreach ($detail as $key => $value) {
                      # code...
                   ?>
                    <div class="nav-item">
                      <img src="<?=base_url("assets/upload/image/thumbs/".$value["gambar"])?>" alt="Image-HasTech">
                    </div>
                    <?php
                     }
                    ?>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="single-product-info">
              <h4 class="title"><?=$galeri["judul_galeri"]?><?php //print_r($galeri)?></h4>
              <div class="product-rating">
                <!-- <div class="ratting-icons">
                  <i class="lastudioicon-star-rate-1"></i>
                  <i class="lastudioicon-star-rate-1"></i>
                  <i class="lastudioicon-star-rate-1"></i>
                  <i class="lastudioicon-star-rate-1"></i>
                  <i class="lastudioicon-star-rate-1"></i>
                </div>
                <div class="review">
                  <a href="#/"></a>
                  <p><span></span>k</p>
                </div> -->
              </div>
              <div class="prices">
                <span class="price"><?=$galeri["website"]?></span>
              </div>
              <?=$galeri["isi"]?>
              <div class="quick-product-action">
                <div class="action-top">
                 
                  <a class="btn-theme btn-black" href="shop-cart.html">WHATSAPP</a>
                </div>
                
              </div>
              <!-- <div class="product-ratting">
                <div class="product-sku">
                  SKU: <span>REF. LA-276</span>
                </div>
              </div> -->
              <!-- <div class="product-categorys">
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
                </div> -->
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
    </section>
    <!--== End Shop Area ==-->

    <!--== Start Shop Tab Area ==-->
    <!-- <section class="product-area product-description-review-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="product-description-review">
              <ul class="nav nav-tabs product-description-tab-menu" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="product-desc-tab" data-bs-toggle="tab" data-bs-target="#productDesc" type="button" role="tab" aria-controls="productDesc" aria-selected="true">Description</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="product-review-tab" data-bs-toggle="tab" data-bs-target="#productReview" type="button" role="tab" aria-controls="productReview" aria-selected="false">Reviews (1)</button>
                </li>
              </ul>
              <div class="tab-content product-description-tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="productDesc" role="tabpanel" aria-labelledby="product-desc-tab">
                  <div class="product-desc">
                    <div class="product-desc-row">
                      <div class="product-thumb">
                        <img src="assets/img/shop/93.jpg" alt="Moren-Shop">
                      </div>
                      <div class="product-content">
                        <h4>Made with love</h4>
                        <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at.</p>
                        <p>Duis efficitur gravida tincidunt. Nam sodales vel odio at sollicitudin. Vestibulum sed rutrum nisl. Nulla diam arcu, facilisis nec blandit non, interdum et orci. Nam aliquam lorem vitae risus molestie convallis.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="productReview" role="tabpanel" aria-labelledby="product-review-tab">
                  <div class="product-review">
                    <div class="product-review-comments">
                      <h4 class="title">1 review for <span>Product Simple</span></h4>
                      <div class="comment-item">
                        <div class="thumb">
                          <img src="assets/img/icons/s1.jpg" alt="Moren-Shop">
                        </div>
                        <div class="content">
                          <div class="rating">
                            <span class="lastudioicon-star-rate-1"></span>
                            <span class="lastudioicon-star-rate-1"></span>
                            <span class="lastudioicon-star-rate-1"></span>
                            <span class="lastudioicon-star-rate-1"></span>
                            <span class="lastudioicon-star-rate-1"></span>
                          </div>
                          <h5 class="meta"><span>Agnes Wilson </span> – December 24, 2020</h5>
                          <span class="review">There are no reviews yet.</span>
                        </div>
                      </div>
                    </div>
                    <div class="product-review-form">
                      <h3 class="title">Add a review</h3>
                      <div class="rating">
                        <span class="rating-title">Your rating *</span>
                        <span class="lastudioicon-star-rate-2"></span>
                        <span class="lastudioicon-star-rate-2"></span>
                        <span class="lastudioicon-star-rate-2"></span>
                        <span class="lastudioicon-star-rate-2"></span>
                        <span class="lastudioicon-star-rate-2"></span>
                      </div>
                      <form action="#" method="post">
                        <div class="review-form-content">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="reviewFormTextarea">Your review *</label>
                                <textarea class="form-control" id="reviewFormTextarea" name="comment" rows="7" required></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <button class="btn btn-theme btn-black" type="submit">Submit</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--== End Shop Tab Area ==-->

    <!--== Start Products Area Wrapper ==-->
    <section class="product-area related-products-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 m-auto">
            <div class="section-title text-center">
              <h2 class="title">Related Products</h2>
            
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="swiper-container product4-slider-container">
             
            <div class="swiper-wrapper">
                <?php foreach ($kategori as $key => $value) { ?>
                  <div class="swiper-slide">
                  <!-- Start Product Item -->
                  <div class="product-item">
                    <div class="product-thumb">
                    <a href="<?=base_url("galeri/read/".$value["id_galeri"]."/".$value["judul_galeri"])?>">
                        <img src="<?=base_url("assets/upload/image/thumbs/".$value["gambar"])?>" alt="Moren-Shop">
                        <span class="bg-thumb" data-bg-img="<?=base_url("assets/upload/image/thumbs/".$value["gambar"])?>" style="background-image: url(_assets/img/shop/d2-2.html);"></span>
                        <span class="thumb-overlay"></span>
                      </a>
                      <div class="product-action action-style3">
                        <a class="action-cart ht-tooltip" data-tippy-content="Add to cart" href="shop-cart.html" title="Add to cart">
                          <i class="lastudioicon-shopping-cart-3"></i>
                        </a>
                        <a class="action-quick-view ht-tooltip" data-tippy-content="Quick View" href="javascript:void(0);" title="Wishlist">
                          <i class="lastudioicon-search-zoom-in"></i>
                        </a>
                        <a class="action-wishlist ht-tooltip" data-tippy-content="Add to wishlist" href="shop-wishlist.html" title="Add to wishlist">
                          <i class="lastudioicon-heart-2"></i>
                        </a>
                        <a class="action-compare ht-tooltip" data-tippy-content="Add to compare" href="shop-compare.html" title="Add to compare">
                          <i class="lastudioicon-compare"></i>
                        </a>
                      </div>
                    </div>
                    <div class="product-info info-style3">
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
                # code...
              };
              ?>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Products Area Wrapper ==-->
  </main>
