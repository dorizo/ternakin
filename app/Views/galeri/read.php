
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
            <?=$galeri["judul_galeri"]?>
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
        <h5 class="modal-title" id="staticBackdropLabel">INFO PERJANJIAN KERJASAMA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="font-size:12px;">
        <h5>PERJANJIAN KERJASAMA USAHA PENGGEMUKAN KAMBING<br />
“PROGRAM IDUL ADHA 2024”</h5>

No. <?=str_pad(rand(0,9999), 4, "0", STR_PAD_LEFT);?>/TAB/PKS-IA/I/2024<br/><br/>
<br />
<b>Penjelasan Mengenai Para Pihak Dalam Perjanjian Ini </b> <br />
Pihak Pertama : PT. Ternakin Amanah Bersama <br />
Pihak Kedua : Pengguna Jasa Ternakin Farm <br />
<br />
<b>Penjelasan Umum Kerjasama</b><br/>
1. Pihak Pertama dan Pihak Kedua sepakat untuk melakukan hubungan kerjasama berupa usaha
penggemukan kambing, yang akan dibiayai oleh Pihak Kedua dan dikelola dengan penuh
tanggung jawab oleh Pihak Pertama.<br/>
2. Usaha yang dilakukan adalah usaha penggemukan kambing dimana Pihak Pertama selaku
pengelola TERNAKIN FARM akan menyerahkan kambing hasil setelah program penggemukan
selesai atau saat Perjanjian ini berakhir kepada Pihak Kedua. <br />
<br />
<b>Penjelasan Khusus Kerjasama</b><br/>
Usaha penggemukan kambing yang disepakati adalah usaha pembesaran kambing/sapi terhitung mulai tanggal <?=tgl_indoku(date("Y-m-d"))?> hingga 15 Juni 2024.<br />
<br />
<b>Nilai dan Durasi Kerjasama</b><br/>
1. Biaya untuk pengadaan 5 (lima) ekor bibit kambing adalah sebesar <?=rupiah($galeri["website"])?> yang akan digunakan untuk pembelian 5 (lima) ekor bibit
dan dikelola sampai tanggal 15 Juni 2024 oleh Pihak Pertama.<br/>
2. Hasil penggemukan kambing yang telah diserahterimakan Pihak Pertama kepada Pihak Kedua
bisa diperjual belikan oleh Pihak Kedua baik kepada pasar bebas maupun dijual kembali kepada
Pihak Pertama.<br/>
3. Jika penjualan kambing dibeli kembali oleh Pihak Pertama maka harga minimal penjualan yang
disepakati adalah senilai Rp 3.500.000,- (tiga juta lima ratus ribu rupiah).<br/>
4. Seluruh hasil dari transaksi penjualan kambing akan diberikan seluruhnya untuk Pihak Kedua
setelah dipotong biaya yang muncul saat proses penjualan terjadi.<br/>
5. Pihak Kedua menyerahkan uang sebesar <?=rupiah($galeri["website"])?> yang akan digunakan oleh Pihak Pertama untuk pembelian bibit dan pembesaran terhitung
sejak tanggal <?=tgl_indoku(date("Y-m-d"))?> sampai dengan tanggal 15 Juni 2024.<br/>  <br />
<b>Hak & Kewajiban</b><br/>
1. Kambing yang diserahkan oleh Pihak Kedua akan dikelola di TERNAKIN FARM, yang berlokasi di
Blok Benda, Desa Warukawung, Kecamatan Depok, Kabupaten Cirebon, Jawa Barat oleh Pihak
Pertama yang memiliki tim yang telah berpengalaman di bidang penggemukan serta penjualan.<br/>
2. Pihak Pertama akan menyediakan tim yang telah berpengalaman dan terlatih secara profesional
dalam pembesaran kambing termasuk pemberian nutrisi agar kambing sehat/gemuk, menangani
penyakit kambing, dan hal-hal yang terkait usaha penggemukan kambing lainnya.
<br/>
3. Dalam hal terjadi ternak yang mati atau hilang dikarenakan kelalaian dalam pengelolaan, maka
Pihak Pertama wajib untuk mengganti dengan kambing lain yang sama sejumlah kambing yang
mati atau hilang.<br />
4. Penggantian kambing yang mati atau hilang akan menyesuaikan dengan kondisi fisik terakhir
kambing yang mengalami resiko baik mati atau hilang.<br/><br />
<b>Penutup</b><br/>
1. Perjanjian Kerjasama ini mulai berlaku dan mengikat Kedua Belah Pihak terhitung sejak ditanda
tangani oleh Kedua Belah Pihak, dan berakhir apabila keseluruhan modal yang diberikan oleh Pihak
Pertama telah dikembalikan oleh Pihak Kedua beserta bagi hasilnya/atau dinyatakan telah
dikembalikan secara tertulis dari Pihak Kedua<br/>
2. Apabila dalam kurun waktu penggemukan kambing hingga penjualan kambing terjadi hal-hal
yang belum diatur dalam Perjanjian Kerjasama Usaha Penggemukan Kambing ini, maka kiranya
Pihak Pertama dan Pihak Kedua dapat menyelesaikannya dengan mengutamakan musyawarah
dan kekeluargaan.<br/>
3. Surat Perjanjian Kerjasama ini dibuat rangkap 2 (dua), masing-masing bermaterai cukup dan
ditandatangani oleh kedua belah pihak, serta mempunyai kekuatan hukum yang sama. <br/>

      </div>
      <div class="modal-footer justify-content-between">
      <div class="float-left"><button type="button" class="btn btn-secondary"  style="width: 80px;"  data-dismiss="modal">Tutup</button> </div>
       <div class="float-right"><input type="checkbox" id="setuju" name="setuju" />
        <label for="scales" style="padding-right: 10px; font-size: 12px;">SAYA SETUJU </label>
        <button type="button" onclick="done()" style="width: 80px;" class="btn btn-primary">Beli</button>
      </div>

       
      </div>
    </div>
  </div>
</div>
  </main>
<script>
  function done(){
    if (document.getElementById('setuju').checked) {
            window.location.href="<?=base_url("galeri/beli/".$galeri["id_galeri"]);?>";
        } else {
            alert("ANDA BELUM MENYETUJI PERJANJIAN KERJASAMA");
        }
  }
</script>