<?php
require 'db.php';
require 'library.php';
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
            <form action="proses_transaksi.php" method="POST">
                <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                        <label class="bmd-label-floating">Nama Paket</label>
                        <input name="nama_paket" type="text" class="form-control" value="<?= $p['nama_paket']; ?>" readonly>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label class="bmd-label-floating">ID Paket</label>
                        <input name="nama_paket" type="text" class="form-control" value="<?= $p['id_paket']; ?>" readonly>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label class="bmd-label-floating">Harga</label>
                        <input name="harga" type="text" class="form-control" value="<?= $p['harga']; ?>" readonly>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">ID Outlet</label>
                        <input type="text" class="form-control" name="id_outlet" value="<?= $p['id_outlet'] ?>" readonly>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">ID User</label>
                        <input type="text" class="form-control" name="id_user" value="<?= $_SESSION['id_user'] ?>" readonly>
                    </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                        <label class="bmd-label-floating">Pilih Member</label>
                        <select name="id_member" class="form-control">
                          <?php
                          $member = $db->getAll('member');
                          foreach($member as $m):
                          ?>
                          <option value="<?= $m['id_member']; ?>" class="form-control"><?= $m['nama']; ?></option>
                          <?php endforeach; ?>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label class="bmd-label-floating">ID Transaksi</label>
                        <input name="id_transaksi" type="text" class="form-control" value="<?= generateKode($angka, 5); ?>" readonly>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label class="bmd-label-floating">Masukkan Jumlah Pesanan</label>
                        <input name="jumlah" type="text" class="form-control" >
                    </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                  <div class="form-group">
                      <label class="bmd-label-floating">Kode Invoice</label>
                      <input name="kode_invoice" type="text" class="form-control" value="<?= generateKode($kode, 8); ?>" readonly>
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                      <label class="bmd-label-floating">Biaya Tambahan</label>
                      <input name="biaya_tambahan" type="number" class="form-control" >
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                      <label class="bmd-label-floating">Diskon</label>
                      <input name="diskon" type="number" class="form-control" >
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                      <label class="bmd-label-floating">Pajak</label>
                      <input name="pajak" type="number" class="form-control" >
                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                  <div class="form-group">
                      <label class="bmd-label-floating">Tanggal</label>
                      <input name="tanggal" type="date" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                      <label class="bmd-label-floating">Batas Waktu</label>
                      <input name="batas_waktu" type="date" class="form-control" >
                  </div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                      <label class="bmd-label-floating">Tanggal Bayar</label>
                      <input name="tanggal_bayar" type="date" class="form-control" >
                  </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Status Pesanan</label>
                        <select name="status_pesanan" class="form-control">
                          <option value="Baru" class="form-control">Baru</option>
                          <option value="Proses" class="form-control">Proses</option>
                          <option value="Selesai" class="form-control">Selesai</option>
                          <option value="Diambil" class="form-control">Diambil</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Status Pembayaran</label>
                        <select name="status_pembayaran" class="form-control">
                          <option value="Belum Dibayar" class="form-control">Belum Dibayar</option>
                          <option value="Dibayar" class="form-control">Dibayar</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating">Keterangan</label>
                        <textarea name="keterangan" class="form-control"></textarea>
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
