<?php echo validation_errors() ? '<div class="alert alert-danger">' . validation_errors() . '</div>' : ''; ?>
<?php echo !empty($error) ? '<div class="alert alert-danger">' . $error . '</div>' : ''; ?>
<?php
  function isContain($karyawanInput, $pesertaProyek) {
    $listkaryawan = explode(", ", $pesertaProyek);
    foreach ($listkaryawan as $karyawan) {
      if ($karyawanInput == $karyawan)
        return true;
    }
    return false;
  }
?>
<form class="form-horizontal" role="form" method="post">
  <div class="form-group">            
    <label for="judulproyek" class="col-md-3 control-label">TrackRecord</label>
    <div class="col-md-8">
      <input type="text" class="form-control" id="nama" name="nama" value="<?php echo isset($result) ? $result->nama : set_value('nama'); ?>" required>
    </div>
  </div>
  <hr>
  <!-- <div class="form-group">            
    <label for="pemimpinproyek" class="col-md-3 control-label">Pemimpin Proyek</label>
    <div class="col-md-8">
      <input type="text" class="form-control tm-input1 typeahead input-medium tm-input-info" id="pemimpinproyek" name="pemimpinproyek" value="<?php echo isset($result) ? $result->pemimpin_proyek : set_value('pemimpinproyek'); ?>" required>
    </div>
  </div> -->
  <!-- <div class="form-group">            
    <label for="pemimpinproyek" class="col-md-3 control-label">Peserta Proyek</label>
    <div class="col-md-8">
      <input type="text" class="form-control tm-input typeahead input-medium tm-input-info" id="pesertaproyek" placeholder="Tambah peserta proyek" name="pesertaproyek" value="<?php echo isset($result) ? $result->peserta_proyek : set_value('pesertaproyek'); ?>" >
    </div>
  </div> -->
  <div class="form-group">            
    <label for="namakaryawan" class="col-md-3 control-label">Peserta Proyek</label>
    <div class="col-md-8">
      <select class="form-control selectpicker bla bla bli" id="namakaryawan" name="namakaryawan[]" multiple="multiple" data-live-search="true" >
        <?php 
          foreach ($resultkaryawan as $karyawan) {
            $option = $karyawan->NIP . ' ' . $karyawan->Nama;
            if ($result->NamaKaryawan != null) {
              echo '<option ';
              echo isContain($option, $result->NamaKaryawan) ? 'selected' : '';
              echo '>' . $option . '</option>';
            } else {
              echo '<option>' . $option . '</option>';
            }
          }
        ?>
        <select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-offset-3 col-md-8">
      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>
  </div>  
</form>