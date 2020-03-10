<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <a href="?halaman=tambah_paket" class="btn btn-success">Tambah Paket</a>
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Data Paket</h4>
            <p class="card-category">Data mengenai paket yang dapat diorder</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th>ID Paket</th>
                  <th>ID Outlet</th>
                  <th>Jenis</th>
                  <th>Nama Paket</th>
                  <th>Harga</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <?php
                  require 'db.php';
                  $db = new Database();
                  $paket = $db->getAll('paket');
                  foreach($paket as $p):
                  ?>
                  <tr>
                    <td><?= $p['id_paket']; ?></td>
                    <td><?= $p['id_outlet']; ?></td>
                    <td><?= $p['jenis']; ?></td>
                    <td><?= $p['nama_paket']; ?></td>
                    <td><?= $p['harga']; ?></td>
                    <td>
                      <a href="?halaman=ubah_paket&id=<?= $p['id_paket']; ?>" class="btn btn-primary">Update</a>
                      <a href="proses_hapus_paket.php?id=<?= $p['id_paket']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
