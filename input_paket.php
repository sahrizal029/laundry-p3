<?php
require 'db.php';
$id = $_GET['id'];
$db = new Database();
$paket = $db->getById('paket', ['id_outlet' => $id ]);
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Pilih Paket</h4>
            <p class="card-category">Pilihlah paket yang akan anda order</p>
          </div>
          <div class="card-body">
            <div class="row">
            <?php foreach($paket as $p): ?>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/city-profile.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold"><?= $p['nama_paket']; ?></h5>
                            <p class="card-text"><?= $p['jenis']; ?></p>
                            <p class="card-text font-weight-bold">Rp. <?= $p['harga']; ?></p>
                            <a href="?halaman=input_jumlah_paket&id=<?= $p['id_paket']; ?>" class="btn btn-primary">Pilih!</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
