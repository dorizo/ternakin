
<!-- content -->
<section class="py-5">
  <div class="container">
    <div class="row gx-5">
      <aside class="col-lg-6">
        <div class="border rounded-4 mb-3 d-flex justify-content-center">
          <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="<?=base_url("assets/upload/image/".$galeri["gambar"])?>">
            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="<?=base_url("assets/upload/image/".$galeri["gambar"])?>" />
            
          </a>
        </div>
        <div class="d-flex justify-content-center mb-3">
         
          <?php foreach ($detail as $key => $value) {
                      # code...
                   ?>
                    <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="<?=base_url("assets/upload/image/".$value["gambar"])?>" class="item-thumb">
                      <img width="60" height="60" class="rounded-2" src="<?=base_url("assets/upload/image/".$value["gambar"])?>" />
                    </a>
                  
                    <?php
                     }
                    ?>
        </div>
        <!-- thumbs-wrap.// -->
        <!-- gallery-wrap .end// -->
      </aside>
      <main class="col-lg-6">
        <div class="ps-lg-3">
          <h4 class="title text-dark">
            <?=$value["judul_galeri"]?>
          </h4>
          <div class="d-flex flex-row my-3">
            <div class="text-warning mb-1 me-2">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <span class="ms-1">
                
              </span>
            </div>
            <span class="text-success ms-2">In stock</span>
          </div>

          <div class="mb-3">
            <span class="h5"><?=rupiah($galeri["website"])?></span>
            <span class="text-muted"> / per Ekor</span>
          </div>

          <p>
          <?=$galeri["isi"]?>
          </p>

        

          <hr />

          
          <button href="#" class="btn btn-warning shadow-0" data-toggle="modal" data-target="#staticBackdrop"> BELI SEKARANG </button>
           </div>
      </main>
    </div>
  </div>
</section>
<!-- content -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>PERJANJIAN KERJASAMA USAHA PENGGEMUKAN KAMBING<br />
“PROGRAM IDUL ADHA 2024”</h5>

No. 001/TAB/PKS-IA/I/2024<br/><br/>
                    <b>PASAL 1</b><br/>
1. Pihak Pertama dan Pihak Kedua sepakat untuk melakukan hubungan kerjasama berupa usaha
penggemukan kambing, yang akan dibiayai oleh Pihak Kedua dan dikelola dengan penuh
tanggung jawab oleh Pihak Pertama.<br/>
2. Usaha yang dilakukan adalah usaha penggemukan kambing dimana Pihak Pertama selaku
pengelola TERNAKIN FARM akan menyerahkan kambing hasil setelah program penggemukan
selesai atau saat Perjanjian ini berakhir kepada Pihak Kedua.

<b>PASAL 2</b><br/>
Usaha penggemukan kambing yang disepakati adalah usaha pembesaran kambing selama empat
bulan terhitung mulai tanggal 1 Februari 2024 hingga 15 Juni 2024.

<b>PASAL 3</b><br/>
1. Biaya untuk pengadaan 5 (lima) ekor bibit kambing adalah sebesar Rp 14.750.000,- (empat belas
juta tujuh ratus lima puluh ribu rupiah) yang akan digunakan untuk pembelian 5 (lima) ekor bibit
dan dikelola sampai tanggal 15 Juni 2024 oleh Pihak Pertama.<br/>
2. Hasil penggemukan kambing yang telah diserahterimakan Pihak Pertama kepada Pihak Kedua
bisa diperjual belikan oleh Pihak Kedua baik kepada pasar bebas maupun dijual kembali kepada
Pihak Pertama.<br/>
3. Jika penjualan kambing dibeli kembali oleh Pihak Pertama maka harga minimal penjualan yang
disepakati adalah senilai Rp 3.500.000,- (tiga juta lima ratus ribu rupiah).
4. Seluruh hasil dari transaksi penjualan kambing akan diberikan seluruhnya untuk Pihak Kedua
setelah dipotong biaya yang muncul saat proses penjualan terjadi.<br/>
<b>PASAL 4</b><br/>
Pihak Kedua menyerahkan uang sebesar Rp 14.750.000 (empat belas juta tujuh ratus lima puluh ribu
rupiah) yang akan digunakan oleh Pihak Pertama untuk pembelian bibit dan pembesaran terhitung
sejak tanggal 1 Februari 2024 sampai dengan tanggal 15 Juni 2024.<br/>  
<b>PASAL 5</b><br/>
1. Kambing yang diserahkan oleh Pihak Kedua akan dikelola di TERNAKIN FARM, yang berlokasi di
Blok Benda, Desa Warukawung, Kecamatan Depok, Kabupaten Cirebon, Jawa Barat oleh Pihak
Pertama yang memiliki tim yang telah berpengalaman di bidang penggemukan serta penjualan.<br/>
2. Pihak Pertama akan menyediakan tim yang telah berpengalaman dan terlatih secara profesional
dalam pembesaran kambing termasuk pemberian nutrisi agar kambing sehat/gemuk, menangani
penyakit kambing, dan hal-hal yang terkait usaha penggemukan kambing lainnya.
<br/>
<b>PASAL 6</b><br/>
1. Dalam hal terjadi ternak yang mati atau hilang dikarenakan kelalaian dalam pengelolaan, maka
Pihak Pertama wajib untuk mengganti dengan kambing lain yang sama sejumlah kambing yang
mati atau hilang.<br />
2. Penggantian kambing yang mati atau hilang akan menyesuaikan dengan kondisi fisik terakhir
kambing yang mengalami resiko baik mati atau hilang.<br/>
<b>PASAL 7</b><br/>
Perjanjian Kerjasama ini mulai berlaku dan mengikat Kedua Belah Pihak terhitung sejak ditanda
tangani oleh Kedua Belah Pihak, dan berakhir apabila keseluruhan modal yang diberikan oleh Pihak
Pertama telah dikembalikan oleh Pihak Kedua beserta bagi hasilnya/atau dinyatakan telah
dikembalikan secara tertulis dari Pihak Kedua<br/>
<b>PASAL 8</b><br/>
1. Apabila dalam kurun waktu penggemukan kambing hingga penjualan kambing terjadi hal-hal
yang belum diatur dalam Perjanjian Kerjasama Usaha Penggemukan Kambing ini, maka kiranya
Pihak Pertama dan Pihak Kedua dapat menyelesaikannya dengan mengutamakan musyawarah
dan kekeluargaan.<br/>
2. Surat Perjanjian Kerjasama ini dibuat rangkap 2 (dua), masing-masing bermaterai cukup dan
ditandatangani oleh kedua belah pihak, serta mempunyai kekuatan hukum yang sama. <br/>

      </div>
      <div class="modal-footer">
      <div>
        <input type="checkbox" id="scales" name="scales"  />
        <label for="scales">SAYA SETUJU </label>
      </div>
        <button type="button" class="btn btn-primary">Beli</button>
      </div>
    </div>
  </div>
</div>
  </main>
