<ul class="nav navbar-nav navbar-right">
  <li class="dropdown">
    <a href="<?php echo site_url('karyawan'); ?>" class="dropdown-toggle" data-toggle="dropdown">Karyawan <b class="caret"></b></a>
    <ul class="dropdown-menu">
      <li><a href="<?php echo site_url('karyawan/tambah'); ?>">Tambah</a></li>
      <li><a href="<?php echo site_url('karyawan/cari'); ?>">Edit</a></li>
      <li><a href="<?php echo site_url('karyawan/cari'); ?>">Hapus</a></li>
      <li class="divider"></li>
      <li><a href="<?php echo site_url('karyawan/cari'); ?>">Cari</a></li>
    </ul>
  </li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Track Record <b class="caret"></b></a>
    <ul class="dropdown-menu">
      <li><a href="<?php echo site_url('karyawan/cari'); ?>">Cari</a></li>
      <li class="divider"></li>
      <li><a href="<?php echo site_url('karyawan/tambah'); ?>">Tambah</a></li>
      <li><a href="<?php echo site_url('karyawan/hapus'); ?>">Hapus</a></li>
    </ul>
  </li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Penjadwalan <b class="caret"></b></a>
    <ul class="dropdown-menu">
      <li><a href="<?php echo site_url('karyawan/cari'); ?>">Cari</a></li>
      <li class="divider"></li>
      <li><a href="<?php echo site_url('karyawan/tambah'); ?>">Tambah</a></li>
      <li><a href="<?php echo site_url('karyawan/hapus'); ?>">Hapus</a></li>
    </ul>
  </li>
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