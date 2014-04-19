<!DOCTYPE html>
<html lang="en">

  <?php $this->load->view('templates/head'); ?>

  <body>

    <?php $this->load->view('templates/header'); ?>
    
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default"> 

          <div class="panel-heading">
            <h3>Tambah Karyawan</h3>
          </div>

          <div class="panel-body">
            <form class="form-horizontal" role="form" method="post">
              <div class="form-group">            
                <label for="nip" class="col-md-3 control-label">NIP</label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="nip" name="nip" value="13511075" disabled  required>
                </div>
              </div>
              <div class="form-group">            
                <label for="password" class="col-md-3 control-label">Password</label>
                <div class="col-md-8">
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
              </div>
              <div class="form-group">            
                <label for="admin" class="col-md-3 control-label">Admin</label>
                <div class="col-md-8">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="yes" name="admin" id="admin">
                      Centang jika memiliki hak admin
                    </label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="form-group">            
                <label for="nama" class="col-md-3 control-label">Nama</label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
              </div>
              <div class="form-group">            
                <label for="alamat3" class="col-md-3 control-label">Alamat</label>
                <div class="col-md-8">
                  <textarea class="form-control" rows="3" id="alamat" name="alamat" required> </textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="tempatlahir" class="col-md-3 control-label">Tempat Lahir</label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" required>
                </div>
              </div>
              <div class="form-group">
                <label for="tanggallahir" class="col-md-3 control-label">Tanggal Lahir</label>
                <div class="col-md-8">
                  <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" required>
                </div>
              </div>
              <div class="form-group">
                <label for="filefoto" class="col-md-3 control-label">Pilih Foto</label>
                <div class="col-md-8">
                  <input type="file" id="filefoto" name="filefoto">
                </div>
              </div>
              <hr>
              <div class="form-group">
                <label for="divisi" class="col-md-3 control-label">Divisi</label>
                <div class="col-md-8">
                  <select class="form-control" required>
                    <option>Executive</option>
                    <option>Research and Development</option>
                    <option>Sales and Marketing</option>
                    <option>Finance</option>
                    <option>Other Support</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="jabatan" class="col-md-3 control-label">Jabatan</label>
                <div class="col-md-8">
                  <select class="form-control" required>
                    <option>Top Manager</option>
                    <option>Middle Manager</option>
                    <option>Staff</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="tanggalditerima" class="col-md-3 control-label">Tanggal Diterima</label>
                <div class="col-md-8">
                  <input type="date" class="form-control" id="tanggalditerima" name="tanggalditerima" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-offset-3 col-md-8">
                  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>

    <?php $this->load->view('templates/footer'); ?>

  </body>
</html>