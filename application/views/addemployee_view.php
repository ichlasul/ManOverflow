<!DOCTYPE html>
<html lang="en">

  <?php $this->load->view('templates/head'); ?>

  <body>
    <?php $this->load->view('templates/header'); ?>
    
    <div class="container">
      <div class="jumbotron">        
        <form class="form-horizontal" role="form" action="<?php echo base_url();?>karyawan/create" method="post">
          <div class="form-group">            
            <label for="namaKaryawan3" class="col-md-2 control-label">Password</label>
            <div class="col-md-9">
              <input type="password" class="form-control" id="password" name="password">
            </div>
          </div>
          <div class="form-group">            
            <label for="namaKaryawan3" class="col-md-2 control-label">Nama Karyawan</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
          </div>
          <div class="form-group">            
            <label for="alamat3" class="col-md-2 control-label">Alamat</label>
            <div class="col-md-9">
              <textarea class="form-control" rows="3" id="alamat" name="alamat"> </textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="namaKaryawan3" class="col-md-2 control-label">Tempat Lahir</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="tempatlahir" name="tempatlahir">
            </div>
          </div>
          <div class="form-group">
            <label for="namaKaryawan3" class="col-md-2 control-label">Tanggal Lahir</label>
            <div class="col-md-9">
              <input type="date" class="form-control" id="tanggallahir" name="tanggallahir">
            </div>
          </div>
          <div class="form-group">
            <label for="namaKaryawan3" class="col-md-2 control-label">Divisi</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="divisi" name="divisi">
            </div>
          </div>
          <div class="form-group">
            <label for="namaKaryawan3" class="col-md-2 control-label">Jabatan</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
          </div>
          <div class="form-group">
            <label for="namaKaryawan3" class="col-md-2 control-label">Tanggal Diterima</label>
            <div class="col-md-9">
              <input type="date" class="form-control" id="tanggalditerima" name="tanggalditerima">
            </div>
          </div>
          <div class="form-group">
            <label for="namaKaryawan3" class="col-md-2 control-label">File Input</label>
            <div class="col-md-9">
              <input type="file" id="filefoto" name="filefoto">
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