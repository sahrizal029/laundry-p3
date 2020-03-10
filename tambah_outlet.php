<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Form Tambah Outlet</h4>
            <p class="card-category">Isi data sesuai dengan kolom yang tersedia</p>
          </div>
          <div class="card-body">
            <form action="proses_tambah_outlet.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Nama Outlet</label>
                        <input name="nama" type="text" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">No. Telp</label>
                        <input name="telp" type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label>Alamat</label>
                        <div class="form-group">
                        <label class="bmd-label-floating">Alamat lengkap outlet..</label>
                        <textarea name="alamat" class="form-control" rows="5"></textarea>
                        </div>
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
