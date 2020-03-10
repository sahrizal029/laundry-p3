<?php require 'db.php'; ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Form Tambah Paket</h4>
            <p class="card-category">Isi data sesuai dengan kolom yang tersedia</p>
          </div>
          <div class="card-body">
            <form action="proses_tambah_paket.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">ID Outlet</label>
                        <select name="id_outlet" class="form-control">
                            <?php
                                $db = new Database();
                                $outlet = $db->getAll('outlet');
                                foreach($outlet as $o):
                            ?> 
                                <option value="<?= $o['id_outlet']; ?>" class="form-control"><?= $o['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Jenis</label>
                        <select name="jenis" class="form-control">
                            <option class="form-control" value="Kiloan">Kiloan</option>
                            <option class="form-control" value="Selimut">Selimut</option>
                            <option class="form-control" value="Bed Cover">Bed Cover</option>
                            <option class="form-control" value="Kaos">Kaos</option>
                            <option class="form-control" value="Lain-Lain">Lain-Lain</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Nama Paket</label>
                        <input name="nama_paket" type="text" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Harga</label>
                        <input name="harga" class="form-control" type="number" class="form-control">
                    </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Tambah!</button>
                <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
