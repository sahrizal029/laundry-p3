<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <a href="?halaman=tambah_outlet" class="btn btn-success">Tambah Outlet</a>
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Data Outlet</h4>
            <p class="card-category">Data mengenai cabang yang tersedia</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th>ID Outlet</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Telp</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <?php
                  require 'db.php';
                  $db = new Database();
                  $outlet = $db->getAll('outlet');
                  foreach($outlet as $o):
                  ?>
                  <tr>
                    <td><?= $o['id_outlet']; ?></td>
                    <td><?= $o['nama']; ?></td>
                    <td><?= $o['alamat']; ?></td>
                    <td><?= $o['telp']; ?></td>
                    <td>
                      <a href="?halaman=ubah_outlet&id=<?= $o['id_outlet']; ?>" class="btn btn-primary">Update</a>
                      <a href="proses_hapus_outlet.php?id=<?= $o['id_outlet']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="btn btn-danger">Delete</a>
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
