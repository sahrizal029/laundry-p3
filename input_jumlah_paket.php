<?php
require 'db.php';
$id = $_GET['id'];
$db = new Database();
$paket = $db->getById('paket', ['id_paket' => $id ]);
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Input Jumlah Pesanan</h4>
            <p class="card-category">Berikut ini adalah detail dari paket yang anda pilih. Silahkan masukkan jumlah pesanan..</p>
          </div>
          <div class="card-body">
            <?php foreach($paket as $p): ?>
            <form action="proses_tambah_paket.php" method="POST">
                <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                        <label class="bmd-label-floating">Nama Paket</label>
                        <input name="nama_paket" type="text" class="form-control" value="<?= $p['nama_paket']; ?>" readonly>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label class="bmd-label-floating">Harga</label>
                        <input name="harga" type="text" class="form-control" value="<?= $p['harga']; ?>" readonly>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label class="bmd-label-floating">Masukkan Jumlah Pesanan</label>
                        <input name="jumlah" class="form-control" type="number" class="form-control">
                    </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Tambah!</button>
                <div class="clearfix"></div>
            </form>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
