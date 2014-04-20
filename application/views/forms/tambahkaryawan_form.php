<?php echo validation_errors() ? '<div class="alert alert-danger">' . validation_errors() . '</div>' : ''; ?>
<?php echo !empty($error) ? '<div class="alert alert-danger">' . $error . '</div>' : ''; ?>

<form class="form-horizontal" role="form" method="post">
  <div class="form-group">            
    <label for="nip" class="col-md-3 control-label">NIP</label>
    <div class="col-md-8">
      <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $nip; ?>" disabled  required>
    </div>
  </div>
<?php if (!isset($edit_mode)) { ?>
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
<?php  }?>
  <hr>
  <div class="form-group">            
    <label for="nama" class="col-md-3 control-label">Nama</label>
    <div class="col-md-8">
      <input type="text" class="form-control" id="nama" name="nama" value="<?php echo isset($result) ? $result->Nama : set_value('nama'); ?>" required>
    </div>
  </div>
  <div class="form-group">            
    <label for="alamat" class="col-md-3 control-label">Alamat</label>
    <div class="col-md-8">
      <textarea class="form-control" rows="3" id="alamat" name="alamat" required><?php echo isset($result) ? $result->Alamat : set_value('alamat'); ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="tempatlahir" class="col-md-3 control-label">Tempat Lahir</label>
    <div class="col-md-8">
      <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" value="<?php echo isset($result) ? $result->TempatLahir : set_value('tempatlahir'); ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="tanggallahir" class="col-md-3 control-label">Tanggal Lahir</label>
    <div class="col-md-8">
      <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" value="<?php echo isset($result) ? $result->TanggalLahir : set_value('tanggallahir'); ?>" required>
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
      <input type="date" class="form-control" id="tanggalditerima" name="tanggalditerima" value="<?php echo isset($result) ? $result->TanggalDiterima : set_value('tanggalditerima'); ?>" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-offset-3 col-md-8">
      <button type="submit" class="btn btn-primary btn-lg">Kirim</button>
    </div>
  </div>
</form>