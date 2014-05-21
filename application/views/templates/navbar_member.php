<ul class="nav navbar-nav navbar-right">
  <li class="<?php echo $controller == 'karyawan' ? 'active' : ''; ?>">
    <?php
        $param = $this->ion_auth->user()->result()[0]->username;
        $q = $this->Karyawan_model->get_by_nip($param);
        $nomor = $q[0]->CurrentProyek;
    ?>
    <a href="<?php echo site_url('karyawan/profil'); ?>">Profil <?php if ($nomor != 0) echo '  -  [' . $nomor . ']'; ?></a>
  </li>
  <li><a href="<?php echo site_url('trackrecord/lists'); ?>">My TrackRecord</a></li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Penjadwalan <b class="caret"></b></a>
    <ul class="dropdown-menu">
      <li><a href="<?php echo site_url('jadwal/cari'); ?>">Cari</a></li>      
      <li><a href="<?php echo site_url('jadwal/lists'); ?>">Jadwal Saya</a></li>      
    </ul>
  </li>
  <li class="dropdown <?php echo $controller == 'pengetahuan' ? 'active' : ''; ?>">
    <a href="<?php echo site_url('pengetahuan'); ?>" class="dropdown-toggle" data-toggle="dropdown">Basis Pengetahuan <b class="caret"></b></a>
    <ul class="dropdown-menu">
      <li><a href="<?php echo site_url('pengetahuan/tambah'); ?>">Tambah</a></li>
      <li><a href="<?php echo site_url('pengetahuan/cari'); ?>">Edit</a></li>
      <li><a href="<?php echo site_url('pengetahuan/cari'); ?>">Hapus</a></li>
      <li class="divider"></li>
      <li><a href="<?php echo site_url('pengetahuan/cari'); ?>">Cari</a></li>
    </ul>
  </li>
  <li><a href="<?php echo site_url('karyawan/logout'); ?>">Logout</a></li>
</ul>