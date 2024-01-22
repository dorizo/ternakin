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
  <!-- Vendor CSS Files -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="<?=base_url("citmtemplate")?>/css/bootstrap.min.css" >
  
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=base_url("citmtemplate")?>/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<style>
  body{
    font-family: 'Open Sans';
  }
   .navbar {
  min-height: 80px;
}
.
.navbar-brand {
  padding: 0 15px;
  height: 100px;
  line-height: 100px;
}

.navbar-toggle {
  /* (80px - button height 34px) / 2 = 23px */
  margin-top: 23px;
  padding: 9px 10px !important;
}

@media (min-width: 768px) {
  .navbar-nav > li > a {
    /* (80px - line-height of 27px) / 2 = 26.5px */
    padding-top: 26.5px;
    padding-bottom: 26.5px;
    line-height: 27px;
  }
}
div.center-cropped {
  height: 170px;
  overflow:hidden;
}
div.center-cropped img {
  object-fit: cover;
  height: 100%;
  min-width: 100%;
  left: 50%;
  position: relative;
  transform: translateX(-50%);
}
.main{
  margin: 0px 10px !important;
    border: 1px solid #c6da37;
    background: #f0f0f0;
    border-radius: 5px;
    padding: 0px 5px 30px 5px
}

.produk{
background:url("<?=base_url("citmtemplate/image/Product1.png")?>");
background-repeat: no-repeat;
background-size: 100%;
background-position: center center;
height:250px;
}

</style>
   
   
</head>

<body>
