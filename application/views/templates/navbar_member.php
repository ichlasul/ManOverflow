<ul class="nav navbar-nav navbar-right">
  <li><a href="<?php echo site_url('karyawan/profil'); ?>">Profil</a></li>
  <li><a href="#">Track Record</a></li>
  <li><a href="#">Penjadwalan</a></li>
  <li class="dropdown">
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