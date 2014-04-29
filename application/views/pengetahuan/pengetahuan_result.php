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
    	<div class="col-md-12">
	    	<div class="thumbnail">
		      	<div class="caption">
			        <h4><?php echo $row->judul; ?></h4>
			        <h6>Oleh <?php echo $row->poster_nip; ?> pada <?php echo $row->waktu_dibuat; ?></h6>
			        <p><?php echo substr($row->konten, 0, 55 * (5 + 1)); ?>[...]</p>
			        <p>
			        	<a href="<?php echo site_url('pengetahuan/lihat/'. $row->id); ?>" class="btn btn-primary" role="button">Lihat Posting</a>
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
