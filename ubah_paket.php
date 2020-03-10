<?php
require 'db.php';
$id = $_GET['id'];
$db = new Database();
$paket = $db->getById('paket', ['id_paket' => $id]);
foreach($paket as $p):
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Form Ubah Paket</h4>
            <p class="card-category">Ubah data sesuai dengan kolom yang tersedia</p>
          </div>
          <div class="card-body">
            <form action="proses_ubah_paket.php" method="POST">
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating">ID Paket</label>
                        <input name="id" type="text" class="form-control" value="<?= $p['id_paket']; ?>" readonly>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">ID Outlet</label>
                        <select name="id_outlet" class="form-control">
                            <?php
                            $outlet = $db->getAll('outlet');
                            foreach($outlet as $o):
                            ?>
                            <option value="<?= $o['id_outlet']; ?>" class="form-control" <?php if($o['id_outlet'] == $p['id_outlet']){ echo "selected"; } ?>><?= $o['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Jenis</label>
                        <select name="jenis" class="form-control">
                            <option class="form-control" value="Kiloan"    <?php if( $p['jenis'] == 'Kiloan' ){ echo "selected"; } ?>>Kiloan</option>
                            <option class="form-control" value="Selimut"   <?php if( $p['jenis'] == 'Selimut' ){ echo "selected"; } ?>>Selimut</option>
                            <option class="form-control" value="Bed Cover" <?php if( $p['jenis'] == 'Bed Cover'){ echo "selected"; } ?>>Bed Cover</option>
                            <option class="form-control" value="Kaos"      <?php if( $p['jenis'] == 'Kaos' ){ echo "selected"; } ?>>Kaos</option>
                            <option class="form-control" value="Lain-Lain" <?php if( $p['jenis'] == 'Lain-Lain' ){ echo "selected"; } ?>>Lain-Lain</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Nama Paket</label>
                        <input name="nama_paket" type="text" class="form-control" value="<?= $p['nama_paket']; ?>">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Harga</label>
                        <input name="harga" type="text" class="form-control" value="<?= $p['harga']; ?>">
                    </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Ubah!</button>
                <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>