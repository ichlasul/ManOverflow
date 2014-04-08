<!DOCTYPE html>
<html lang="en">

  <?php $this->load->view('templates/head'); ?>

  <body>
    <?php $this->load->view('templates/header'); ?>
    <h2 class="form-signin-heading text-center">Data Karyawan Berhasil Ditambahkan</h2>
    <div class="container">
      <div class="jumbotron">        
        <form class="form-horizontal" role="form" action="<?php echo base_url();?>karyawan/create" method="post">
          <div class="form-group">            
            <label for="namaKaryawan3" class="col-md-2 control-label">Nama Karyawan</label>
            <div class="col-md-9">
              <label for="namaKaryawan3" class="label label-default"><?php echo $data['nama']; ?></label>
            </div>
          </div>
          <div class="form-group">            
            <label for="alamat3" class="col-md-2 control-label">Alamat</label>
            <div class="col-md-9">
              <label for="namaKaryawan3" class="label label-default "><?php echo $data['alamat']; ?></label>
            </div>
          </div>
          <div class="form-group">
            <label for="namaKaryawan3" class="col-md-2 control-label">Tempat Lahir</label>
            <div class="col-md-9">
              <label for="namaKaryawan3" class="label label-default"><?php echo $data['tempatlahir']; ?></label>
            </div>
          </div>
          <div class="form-group">
            <label for="namaKaryawan3" class="col-md-2 control-label">Tanggal Lahir</label>
            <div class="col-md-9">
              <label for="namaKaryawan3" class="label label-default"><?php echo $data['tanggallahir']; ?></label>
            </div>
          </div>
          <div class="form-group">
            <label for="namaKaryawan3" class="col-md-2 control-label">Divisi</label>
            <div class="col-md-9">
              <label for="namaKaryawan3" class="label label-default"><?php echo $data['divisi']; ?></label>
            </div>
          </div>
          <div class="form-group">
            <label for="namaKaryawan3" class="col-md-2 control-label">Jabatan</label>
            <div class="col-md-9">
              <label for="namaKaryawan3" class="label label-default"><?php echo $data['jabatan']; ?></label>
            </div>
          </div>
          <div class="form-group">
            <label for="namaKaryawan3" class="col-md-2 control-label">Tanggal Diterima</label>
            <div class="col-md-9">
              <label for="namaKaryawan3" class="label label-default"><?php echo $data['tanggalditerima']; ?></label>
            </div>
          </div>
          <div class="form-group">
            <label for="namaKaryawan3" class="col-md-2 control-label">File Input</label>
            <div class="col-md-9">
              <label for="namaKaryawan3" class="label label-default"><?php echo $data['filefoto']; ?></label>
            </div>
          </div>          
        </form>        
      </div>
    </div>

    <?php $this->load->view('templates/footer'); ?>
  </body>
</html>