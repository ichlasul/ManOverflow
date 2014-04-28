<?php

echo isset($info) ? '<div class="alert alert-success">' . $info . '</div>' : '';

if (is_null($result))
{
    echo '<div class="alert alert-danger">Oh tidak, pengetahuan tidak ditemukan!</div>';
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
			        <h3><?php echo $row->judul; ?></h3>
			        <h4><?php echo $row->konten; ?></h4>
			        <p>
			        	<a href="<?php echo site_url('pengetahuan/lihat/'. $row->id); ?>" class="btn btn-primary" role="button">Lihat Profil</a>
			        	<a href="<?php echo site_url('pengetahuan/edit/'. $row->id); ?>" class="btn btn-warning" role="button">Edit</a>
			        	<a href="" class="text-danger" role="button" data-toggle="modal" data-target="#modal-delete-<?php echo $row->id; ?>">Hapus</a>
		        	</p>

		        	<!-- Modal -->
					<div class="modal fade" id="modal-delete-<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-label-<?php echo $row->id; ?>" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					        <h3 class="modal-title" id="modal-label-<?php echo $row->id; ?>">Yakin Menghapus?</h3>
					      </div>
					      <div class="modal-body">
					        <h4><?php echo $row->judul; ?></h4>
			       			<h5><?php //echo $row->konten; ?></h5>
					      </div>
					      <div class="modal-footer">
					        <a role="button" class="btn btn-default" data-dismiss="modal">Batal</a>
					        <a href="<?php echo site_url('pengetahuan/hapus/'.$row->id); ?>" role="button" class="btn btn-danger">Hapus Karyawan</a>
					      </div>
					    </div>
					  </div>
					</div>
		      	</div>
    		</div>
    	</div>
<?php
	}
}
