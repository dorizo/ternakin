<?php use App\Models\Konfigurasi_model;

$konfigurasi = new Konfigurasi_model();
$site        = $konfigurasi->listing();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from htmldemo.net/moren/moren/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Aug 2023 15:33:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />



    <!--== Bootstrap CSS ==-->
  <title><?= $title ?></title>
  <meta content="<?= strip_tags($description) ?>" name="description">
  <meta content="<?= $keywords ?>, <?= keywords() ?>" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/upload/image/' . $site['icon']) ?>" rel="icon">
  <link href="<?= base_url('assets/upload/image/' . $site['icon']) ?>" rel="apple-touch-icon">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <!-- Vendor CSS Files -->
  
  <link href="<?= base_url() ?>/template/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!--== Font-awesome Icons CSS ==-->
    <link href="<?= base_url() ?>/template/assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!--== Icofont Min Icons CSS ==-->
    <link href="<?= base_url() ?>/template/assets/css/icofont.min.css" rel="stylesheet"/>
    <!--== lastudioIcons CSS ==-->
    <link href="<?= base_url() ?>/template/assets/css/lastudioIcons.css" rel="stylesheet"/>
    <!--== Animate CSS ==-->
    <link href="<?= base_url() ?>/template/assets/css/animate.css" rel="stylesheet"/>
    <!--== Aos CSS ==-->
    <link href="<?= base_url() ?>/template/assets/css/aos.css" rel="stylesheet"/>
    <!--== FancyBox CSS ==-->
    <link href="<?= base_url() ?>/template/assets/css/jquery.fancybox.min.css" rel="stylesheet"/>
    <!--== Slicknav CSS ==-->
    <link href="<?= base_url() ?>/template/assets/css/slicknav.css" rel="stylesheet"/>
    <!--== Swiper CSS ==-->
    <link href="<?= base_url() ?>/template/assets/css/swiper.min.css" rel="stylesheet"/>
    <!--== Slick CSS ==-->
    <link href="<?= base_url() ?>/template/assets/css/slick.css" rel="stylesheet"/>
    <!--== Main Style CSS ==-->
    <link href="<?= base_url() ?>/template/assets/css/style.css" rel="stylesheet" />
   
</head>

<body>
