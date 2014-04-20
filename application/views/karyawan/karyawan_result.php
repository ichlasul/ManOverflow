<?php

if (is_null($result))
{
    echo '<div class="alert alert-danger">Oh tidak, karyawan tidak ditemukan!</div>';

}
else
{
    foreach($result as $row)
    {
?>
    	<div class="col-md-6">
	    	<div class="thumbnail">
		      	<img class="img-responsive" data-src="" alt="Foto">
		      	<div class="caption">
			        <h3><?php echo $row->Nama; ?></h3>
			        <h4><?php echo $row->NIP; ?></h4>
			        <p>
			        	<a href="<?php echo site_url('karyawan/profil/'. $row->NIP); ?>" class="btn btn-primary" role="button">Lihat Profil</a>
			        	<a href="<?php echo site_url('karyawan/edit/'. $row->NIP); ?>" class="btn btn-warning" role="button">Edit</a>
			        	<a href="#" class="text-danger" role="button">Hapus</a>
		        	</p>
		      	</div>
    		</div>
    	</div>
<?php
	}
}
