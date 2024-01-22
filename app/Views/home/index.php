<?php use App\Models\Menu_model;
 use App\Models\Konfigurasi_model;

$menu    = new Menu_model();
$berita  = $menu->berita();
$profil  = $menu->profil();
$layanan = $menu->layanan();
$galery = $menu->galery();
$slide = $menu->slide();

$video = $menu->video();
$bestsaller = $menu->bestsaller();
$newproduk = $menu->newproduk();
$konfigurasi  = new Konfigurasi_model();
$site         = $konfigurasi->listing();
?>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php 
          $a =1;
          foreach ($slide as $key => $value) {
          $aktif="";
          if($a == 1){
            $aktif="active";
          }
          ?>
          <div class="carousel-item  <?=$aktif?>">
            <img class="d-block w-100" src="<?=base_url("assets/upload/image")."/".$value["gambar"]?>" alt="First slide">
          </div>
        <?php
        $a++;
        } 
      ?>
    </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<hr />

<div class="container">
  <div class="row">
<?php
foreach ($newproduk as $key1 => $value1) {
?>

  <div class="card col-6 mt-2 p-0">
    <div class="center-cropped">
    <img class="card-img-top" src="<?=base_url("assets/upload/image")."/".$value1["gambar"]?>"  class="img-responsive" alt="Card image cap">
    </div>
    <div class="card-body">
      <h5 class="card-title"><?=$value1["judul_galeri"]?></h5>
      <p class="card-text"><?=$value1["isi"]?></p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><?=rupiah($value1["website"])?></small>
    </div>
  </div>
<?php
}
?>
</div>

</div>

</div>
