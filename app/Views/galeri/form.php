
<!-- content -->
<section class="py-5">
  <div class="container">
    <div class="row gx-5">
      
      <main class="col-lg-12">
        <div class="ps-lg-3">
          <h4 class="title text-dark">
          FORMULIR PEMESANAN
          </h4>
          <div class="mb-3 card p-3">
                <span class="ms-1">
              <?=$galeri["judul_galeri"]?>
              </span>
            <span class="small"><?=rupiah($galeri["website"])?></span>
            <span class="text-muted"> / per Ekor</span>
          </div>
        <hr />
       
            
            <?= session()->getFlashdata('error') ?>
            <form  method="post">
                <?= csrf_field() ?>
            <div class="form-group">
                <label for="no">NAMA</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                <small id="emailHelp" class="form-text text-muted">Nama Lengkap Sesuai KTP</small>
            </div>
            <div class="form-group">
                <label for="no">NO whatsapp</label>
                <input type="text" class="form-control" id="telp" name="telp">
                <small id="emailHelp" class="form-text text-muted">NO whatsapp wajib aktif karena di gaunakan untuk informasi penting</small>
            </div>
            <div class="form-group">
                <label for="no">ALAMAT PENGIRIMAN</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
                <small id="emailHelp" class="form-text text-muted">Sesuai alamat dikirim untuk Kurban</small>
            </div>
            
            <div class="form-group">
                <label for="no">TANGGAL PENGIRIMAN</label>
                <input type="date" class="form-control" id="konfirmasi" name="konfirmasi">
            </div>
           
           
          <button class="btn btn-warning shadow-0" data-toggle="modal" data-target="#staticBackdrop"> ORDER </button>
        </form>

          
           </div>
      </main>
    </div>
  </div>
</section>