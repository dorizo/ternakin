
    <!--== Start Collection Slider Area Wrapper ==-->
    <section class="collection-slider-area">
      <div class="collection-slider-content">
        <div class="swiper-container collection-slider-container">
          <div class="swiper-wrapper">
          <?php foreach ($galery as $key => $value) { ?>
              
              <div class="swiper-slide">
                <!-- Start Slide Item -->
                <div class="slider-item">
                  <div class="thumb">
                    <div class="bg-thumb bg-overlay bg-img" data-bg-img="<?=base_url("assets/upload/image/".$value["gambar"])?>"></div>
                  </div>
                  <div class="slider-content-area">
                    <div class="content">
                      <div class="inner-content">
                        <a href="<?=base_url("galeri/read/".$value["id_galeri"]."/".$value["judul_galeri"])?>">
                        <span><?=$value["nama_kategori_galeri"]?></span>
                        <h2><?=$value["judul_galeri"]?></h2>
                        <p><?=substr($value["isi"] , 0 , 100)?>...</p>
                         </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Slide Item -->
              </div>
                  <?php
              }
              ?>

            <!-- <div class="swiper-slide"> -->
              <!-- Start Slide Item -->
              <!-- <div class="slider-item">
                <div class="thumb">
                  <div class="bg-thumb bg-overlay bg-img" data-bg-img="assets/img/slider/h1-s1.jpg"></div>
                </div>
                <div class="slider-content-area">
                  <div class="content">
                    <div class="inner-content">
                      <span>Collection 2022</span>
                      <h2>The spectacle before us was indeed sublime</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla quis ipsum enim viverra. Enim in morbi tincidunt ante luctus tincidunt integer. Sed adipiscing vehicula.</p>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- End Slide Item -->
            <!-- </div> -->
          </div>          
          <!-- Add Arrows -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </section>