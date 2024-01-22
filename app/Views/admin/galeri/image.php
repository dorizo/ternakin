
<table class="table">
<?php foreach ($detailgaleri as $key => $value) {
    ?>
    <tr>
        <td>
        <img src="<?= base_url('assets/upload/image/thumbs/' . $value['gambar']) ?>" class="img img-thumbnail">
        </td>
        <td>
        <a href="<?= base_url('admin/galeri/deleteimage/' . $value['id_gellery_image']."/". $value['id_galeri']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
	  </td>
    </tr>
    <?php
        }
        ?> 
</table>


<form action="<?= base_url('admin/galeri/image/' . $galeri['id_galeri']) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?= csrf_field();
?>

<input type="hidden" name="id_galeri" value="<?=$galeri['id_galeri']?>" >
<div class="form-group row">
	<label class="col-md-2">Upload Gambar Galeri</label>
	<div class="col-md-10">
		<input type="file" name="gambar" class="form-control" >
	</div>
</div>


<div class="form-group row">
	<label class="col-md-2"></label>
	<div class="col-md-10">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
	</div>
</div>

<?= form_close(); ?>