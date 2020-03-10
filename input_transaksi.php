<?php
require 'db.php';
$db = new Database();
$outlet = $db->getAll('outlet');
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <a href="?halaman=tambah_outlet" class="btn btn-success">Tambah Outlet</a>
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Pilih Outlet</h4>
            <p class="card-category">Pilihlah outlet tempat anda melakukan transaksi/pemesanan laundry</p>
          </div>
          <div class="card-body">
            <div class="row">
            <?php foreach($outlet as $o): ?>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/profile_city.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $o['nama']; ?></h5>
                            <p class="card-text"><?= $o['alamat']; ?></p>
                            <a href="?halaman=input_paket&id=<?= $o['id_outlet']; ?>" class="btn btn-primary">Pilih!</a>
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
