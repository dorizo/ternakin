<?php use App\Models\Konfigurasi_model;
use App\Models\Menu_model;

$konfigurasi  = new Konfigurasi_model();
$menu         = new Menu_model();
$site         = $konfigurasi->listing();
$menu_berita  = $menu->berita();
$menu_profil  = $menu->profil();
$menu_layanan = $menu->layanan();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#"><img src="<?=base_url("citmtemplate")?>/image/logo.png" width="140px" /></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="mr-auto"></div>
  <ul class="navbar-nav ">
        <li class="nav-item"><a  class="nav-link"  href="#">Home</a></li>
        <li  class="nav-item"><a  class="nav-link"  href="#">Domba</a></li>
        <li  class="nav-item"><a  class="nav-link"  href="#">Sapi</a></li>
        <li  class="nav-item"><a  class="nav-link"  href="#">Kurban</a></li>
        <li  class="nav-item"><a  class="nav-link"  href="#">Investasi saya</a></li>
       
      </ul>
  </div>
</nav>
