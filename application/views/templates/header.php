<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url(); ?>home">Versatile</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url('karyawan/cari'); ?>">Cari Karyawan</a></li>
        <li><a href="<?php echo site_url('karyawan/add'); ?>">Tambah Karyawan</a></li>
        <li><a href="#">Track Record</a></li>
        <li><a href="#">Penjadwalan</a></li>
        <li><a href="#">Basis Pengetahuan</a></li>
        <li><a href="<?php echo site_url('login/logout'); ?>">Logout</a></li>

      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Cari Karyawan">
        </div>
        <button type="submit" class="btn btn-default">Cari</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>