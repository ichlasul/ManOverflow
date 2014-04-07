<!DOCTYPE html>
<html lang="en">

  <?php $this->load->view('templates/head'); ?>

  <body>
    <?php $this->load->view('templates/header'); ?>
    
    <div class="container">
      <div class="jumbotron">
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="namaKaryawan3" class="col-md-2 control-label">Nama Karyawan</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="nama-karyawan">
            </div>
          </div>
          <div class="form-group">
            <label for="alamat3" class="col-md-2 control-label">Alamat</label>
            <div class="col-md-9">
              <textarea class="form-control" rows="3" id="alamat"> </textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="namaKaryawan3" class="col-md-2 control-label">Tempat Lahir</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="tempat-lahir">
            </div>
          </div>
          <div class="form-group">
            <label for="namaKaryawan3" class="col-md-2 control-label">Tanggal Lahir</label>
            <div class="col-md-9">
              <input type="date" class="form-control" id="tanggal-lahir">
            </div>
          </div>
          <div class="form-group">
            <label for="namaKaryawan3" class="col-md-2 control-label">Divisi</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="divisi">
            </div>
          </div>
          <div class="form-group">
            <label for="namaKaryawan3" class="col-md-2 control-label">Jabatan</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="jabatan">
            </div>
          </div>
          <div class="form-group">
            <label for="namaKaryawan3" class="col-md-2 control-label">Tanggal Diterima</label>
            <div class="col-md-9">
              <input type="date" class="form-control" id="tanggal-diterima">
            </div>
          </div>
          <div class="form-group">
            <label for="namaKaryawan3" class="col-md-2 control-label">File Input</label>
            <div class="col-md-9">
              <input type="file" id="file-foto">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-offset-2 col-md-9">
              <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <?php $this->load->view('templates/footer'); ?>
  </body>
</html>