<?php use App\Models\Menu_model;
 use App\Models\Konfigurasi_model;

$menu    = new Menu_model();
$newproduk = $menu->kategori($slug);
$konfigurasi  = new Konfigurasi_model();
?>


<div class="container">
  <div class="row">
<?php
foreach ($newproduk as $key1 => $value1) {
?>

  <div class="col-6 mt-2 p-2">
    <div class="main">
    <div class="produk">
      <div class="center-cropped pl-4 pr-4">
        <img class="card-img-top" src="<?=base_url("assets/upload/image")."/".$value1["gambar"]?>"  class="img-responsive" alt="Card image cap">
      </div>
    </div>
    <!-- <h6 class="card-title"><?=$value1["judul_galeri"]?></h6> -->
    <hr />
    
    <small class="text-muted" style="font-size:10px"><?=rupiah($value1["website"])?></small>
    
<a href="<?=base_url("galeri/read/".$value1["id_galeri"])?>"  class="btn btn-outline-warning float-right" style="font-size: 10px;">DETAIL</a>
  </div>
    <!--
    <div class="card-body">
      <p class="card-text"><?=$value1["isi"]?></p>
    </div>
    <div class="card-footer">
    </div> -->
  </div>
<?php
}
?>
</div>

</div>

</div>
