<table class="table">
    <thead>
        <tr>
            <th>nama_lengkap</th>
            <th>telp</th>
            <th>alamat</th>
            <th>Tanggal Pengiriman</th>
            <th>Kurban</th>
            <th>Harga</th>
        </tr>
    </thead>
<?php
foreach ($kurbanlist as $key => $value) { ?>
<tr>
    <td><?=$value->nama_lengkap?></td>
    <td><?=$value->telp?></td>
    <td><?=$value->alamat?></td>
    <td><?=$value->konfirmasi?></td>
    <td><?=$value->judul_galeri?></td>
    <td><?=rupiah($value->website)?></td>
</tr>
 
<?php
}
?>
</table>