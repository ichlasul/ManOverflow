<ul class="nav navbar-nav navbar-right">
  <li class="dropdown <?php echo $controller == 'karyawan' ? 'active' : ''; ?>">
    <a href="<?php echo site_url('karyawan'); ?>" class="dropdown-toggle" data-toggle="dropdown">Karyawan <b class="caret"></b></a>
    <ul class="dropdown-menu">
      <li><a href="<?php echo site_url('karyawan/tambah'); ?>">Tambah</a></li>
      <li><a href="<?php echo site_url('karyawan/cari'); ?>">Edit</a></li>
      <li><a href="<?php echo site_url('karyawan/cari'); ?>">Hapus</a></li>
      <li class="divider"></li>
      <li><a href="<?php echo site_url('karyawan/cari'); ?>">Cari</a></li>
    </ul>
  </li>
  <li class="dropdown ">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Track Record <b class="caret"></b></a>
    <ul class="dropdown-menu">
      <li><a href="<?php echo site_url('trackrecord/tambah'); ?>">Tambah</a></li>
      <li><a href="<?php echo site_url('trackrecord/edit'); ?>">Edit</a></li>
      <li><a href="<?php echo site_url('trackrecord/hapus'); ?>">Hapus</a></li>
      <li class="divider"></li>
      <li><a href="<?php echo site_url('trackrecord/cari'); ?>">Cari</a></li>      
    </ul>
  </li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Penjadwalan <b class="caret"></b></a>
    <ul class="dropdown-menu">
      <li><a href="<?php echo site_url('jadwal/tambah'); ?>">Tambah</a></li>
      <li><a href="<?php echo site_url('jadwal/edit'); ?>">Edit</a></li>
      <li><a href="<?php echo site_url('jadwal/hapus'); ?>">Hapus</a></li>
      <li class="divider"></li>      
      <li><a href="<?php echo site_url('jadwal/cari'); ?>">Cari</a></li>      
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