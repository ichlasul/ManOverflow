<?php echo validation_errors() ? '<div class="alert alert-danger">' . validation_errors() . '</div>' : ''; ?>
<?php echo !empty($error) ? '<div class="alert alert-danger">' . $error . '</div>' : ''; ?>

<form class="form" role="form" method="post">
  <div class="form-group">            
    <label for="nama" class="control-label">Judul</label>
    <input type="text" class="form-control" id="judul" name="judul" value="<?php echo isset($result) ? $result->judul : set_value('judul'); ?>" required>
  </div>
  <div class="form-group">            
    <label for="alamat" class="control-label">Konten</label>
    <textarea class="form-control" rows="10" id="konten" name="konten" required><?php echo isset($result) ? $result->judul : set_value('alamat'); ?></textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg">Kirim</button>
  </div>
</form>