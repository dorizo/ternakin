<?php use App\Models\Konfigurasi_model;
use App\Models\Menu_model;

$konfigurasi  = new Konfigurasi_model();
$menu         = new Menu_model();
$site         = $konfigurasi->listing();
$menu_berita  = $menu->berita();
$menu_profil  = $menu->profil();
$menu_layanan = $menu->layanan();
?>

<!--wrapper start-->
<div class="wrapper home-default-wrapper">

  <!--== Start Preloader Content ==-->
  <div class="preloader-wrap">
    <div class="preloader">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!--== End Preloader Content ==-->

  <!--== Start Header Wrapper ==-->
  <header class="header-area header-default header-style2 header-transparent sticky-header">
    <div class="container-fluid">
      <div class="row row-gutter-0 align-items-center">
        <div class="col-12">
          <div class="header-align">
            <div class="header-align-left">
              <div class="header-logo-area">
                <a href="<?=base_url("index.php")?>">
                  <img class="logo-main d-none d-sm-block" src="<?=base_url("template/assets/img/poethree.png")?>" alt="Logo" />
                  <img class="logo-main d-sm-none p-4" src="<?=base_url("template/assets/img/poethree.png")?>" alt="Logo" />
                  <img class="logo-light  d-sm-none" src="<?=base_url("template/assets/img/poethree.png")?>" alt="Logo" />
                </a>
              </div>
              <div class="header-navigation-area d-none d-xl-block">
                <ul class="main-menu nav justify-content-center position-relative">
                  <li class="active"><a href="<?=base_url("index.php")?>">HOME</a></li>
                  <li class="has-submenu"><a href="index.html">CATALOGUE</a>
                    <ul class="submenu-nav submenu-nav-mega">
                      <li class="mega-menu-item"><a class="srmenu-title" href="#">Hijab/Scarves</a>
                        <ul>
                          <li><a href="<?=base_url("galeri/kategori/plain")?>">Plain</a></li>
                          <li><a href="<?=base_url("galeri/kategori/Signature")?>">Signature</a></li>
                          <li><a href="<?=base_url("galeri/kategori/Pashmina")?>">Pashmina</a></li>
                        </ul>
                      </li>
                      <li class="mega-menu-item"><a class="srmenu-title" href="#">Clothing</a>
                        <ul>
                          <li><a href="<?=base_url("galeri/kategori/Blouse")?>">Blouse</a></li>
                          <li><a href="<?=base_url("galeri/kategori/Tunic")?>">Tunic</a></li>
                          <li><a href="<?=base_url("galeri/kategori/Gamis")?>">Gamis</a></li>
                          <li><a href="<?=base_url("galeri/kategori/Dress")?>">Dress</a></li>
                          <li><a href="<?=base_url("galeri/kategori/Oversized-Shirt")?>">Oversized Shirt</a></li>
                          <li><a href="<?=base_url("galeri/kategori/Skirt")?>">Skirt</a></li>
                          <li><a href="<?=base_url("galeri/kategori/Cullote")?>">Cullote</a></li>
                          <li><a href="<?=base_url("galeri/kategori/Pants")?>">Pants</a></li>
                          
                        </ul>
                      </li>
                      <li class="mega-menu-item"><a class="srmenu-title" href="#">Prayer Set</a>
                        <ul>
                          <li><a href="<?=base_url("galeri/kategori/Prayer-Set")?>">Prayer Set</a></li>
                        </ul>
                      </li>
                      <li class="mega-menu-item"><a class="srmenu-title" href="#">Accessories</a>
                        <ul>
                          <li><a href="<?=base_url("galeri/kategori/Accessories")?>">Accessories</a></li>
                        </ul>
                      </li>
                     
                    </ul>
                  </li>
                  
                  <li><a href="<?=base_url("galeri")?>">NEW SERIES</a></li>
                  
                  <li><a href="<?=base_url("kontak")?>">CONTACT</a></li>
                </ul>
              </div>
            </div>
            <div class="header-align-right">
              <div class="header-action-area">
                
                <button class="btn-menu d-xl-none">
                  <i class="lastudioicon-menu-3-1"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--== End Header Wrapper ==-->