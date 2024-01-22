<main class="main-content">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area bg-img" data-bg-img="<?=base_url("template")?>/assets/img/photos/bg-page1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content">
              <h2 class="title">Shop</h2>
              <div class="bread-crumbs"><a href="index.html">Home<span class="breadcrumb-sep">></span></a><span class="active">Shop</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- ======= Contact Section ======= -->
  <section class="contact-area">
      <div class="container">
        <div class="row">
          <h2><?= $title ?></h2>

        </div>

      </div>



      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Alamat Kami:</h3>
                  <p><?= nl2br($konfigurasi['alamat']) ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Kami:</h3>
                  <p><?= nl2br($konfigurasi['email']) ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Telepon Kami:</h3>
                  <p><?= nl2br($konfigurasi['telepon']) ?></p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <style type="text/css" media="screen">
              iframe {
                width: 100%;
                min-height: 400px;
              }
            </style>
            <?= $konfigurasi['google_map'] ?>
          </div>

        </div>
      </div>

    </section><!-- End Contact Section -->

</main><!-- End #main -->