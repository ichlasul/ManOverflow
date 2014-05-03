<?php echo validation_errors() ? '<div class="alert alert-danger">' . validation_errors() . '</div>' : ''; ?>
<?php echo !empty($error) ? '<div class="alert alert-danger">' . $error . '</div>' : ''; ?>

<form class="form-horizontal" role="form" method="post">

  <div class="form-group">            
    <label for="nomor" class="col-md-3 control-label">Kode Proyek</label>
    <div class="col-md-8">
      <input type="text" class="form-control" id="nomor" name="nomor" value="<?php echo $nomor; ?>" disabled  required>
    </div>
  </div>
  <div class="form-group">            
    <label for="judulproyek" class="col-md-3 control-label">Judul Proyek</label>
    <div class="col-md-8">
      <input type="text" class="form-control" id="judulproyek" name="judulproyek" value="<?php echo isset($result) ? $result->judul : set_value('judulproyek'); ?>" required>
    </div>
  </div>
<div class="form-group">            
    <label for="deskripsi" class="col-md-3 control-label">Deskripsi</label>
    <div class="col-md-8">
      <textarea class="form-control" rows="3" id="deskripsi" name="deskripsi" required><?php echo isset($result) ? $result->deskripsi : set_value('deskripsi'); ?></textarea>
    </div>
  </div>
  <hr>
  <div class="form-group">
    <label for="tanggalmulai" class="col-md-3 control-label">Tanggal Mulai</label>
    <div class="col-md-8">
      <input type="date" class="form-control" id="tanggalmulai" name="tanggalmulai" value="<?php echo isset($result) ? $result->tanggal_mulai : set_value('tanggalmulai'); ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="tanggalselesai" class="col-md-3 control-label">Tanggal Selesai</label>
    <div class="col-md-8">
      <input type="date" class="form-control" id="tanggalselesai" name="tanggalselesai" value="<?php echo isset($result) ? $result->tanggal_selesai : set_value('tanggalselesai'); ?>" required>
    </div>
  </div>
  <hr>
  <div class="form-group">
    <label for="prioritas" class="col-md-3 control-label">Prioritas</label>
    <div class="col-md-8">
      <select class="form-control selectpicker bla bla bli" id="prioritas" name="prioritas" required>
        <option>Sangat Tinggi</option>
        <option>Tinggi</option>
        <option>Normal</option>
        <option>Rendah</option>
        <option>Sangat Rendah</option>
      </select>
    </div>
  </div>
  <!-- <div class="form-group">            
    <label for="pemimpinproyek" class="col-md-3 control-label">Pemimpin Proyek</label>
    <div class="col-md-8">
      <input type="text" class="form-control tm-input1 typeahead input-medium tm-input-info" id="pemimpinproyek" name="pemimpinproyek" value="<?php echo isset($result) ? $result->pemimpin_proyek : set_value('pemimpinproyek'); ?>" required>
    </div>
  </div> -->
  <div class="form-group">            
    <label for="pemimpinproyek" class="col-md-3 control-label">Pemimpin Proyek</label>
    <div class="col-md-8">
      <select class="form-control selectpicker bla bla bli" id="pemimpinproyek" name="pemimpinproyek" data-live-search="true" required>
        <?php 
          foreach ($resultkaryawan as $karyawan) {
            echo '<option>' . $karyawan->NIP . ' - ' . $karyawan->Nama . '</option>';
          }
        ?>
        <select>
    </div>
  </div>
  <!-- <div class="form-group">            
    <label for="pemimpinproyek" class="col-md-3 control-label">Peserta Proyek</label>
    <div class="col-md-8">
      <input type="text" class="form-control tm-input typeahead input-medium tm-input-info" id="pesertaproyek" placeholder="Tambah peserta proyek" name="pesertaproyek" value="<?php echo isset($result) ? $result->peserta_proyek : set_value('pesertaproyek'); ?>" >
    </div>
  </div> -->
  <div class="form-group">            
    <label for="pesertaproyek" class="col-md-3 control-label">Peserta Proyek</label>
    <div class="col-md-8">
      <select class="form-control selectpicker bla bla bli" id="pesertaproyek" name="pesertaproyek" multiple data-live-search="true" required>
        <?php 
          foreach ($resultkaryawan as $karyawan) {
            echo '<option>' . $karyawan->NIP . ' - ' . $karyawan->Nama . '</option>';
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