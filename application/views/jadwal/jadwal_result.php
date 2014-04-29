<?php

echo isset($info) ? '<div class="alert alert-success">' . $info . '</div>' : '';

if (is_null($result))
{
    echo '<div class="alert alert-danger">Tidak ada proyek yang ditemukan.</div>';
}
else
{
    foreach($result as $row)
    {
?>
    	<div class="col-md-6">
	    	<div class="thumbnail">
		      	<!-- <img class="img-responsive" data-src="" alt="Foto"> -->
		      	<div class="caption">
		      		<h3><?php echo $row->judul; ?></h3>			        
			        <h5><b><?php echo $row->tanggal_mulai; ?> </b>s.d. <b><?php echo $row->tanggal_selesai; ?></b></h5>
			        <h6>Pemimpin Proyek : <?php echo $row->pemimpin_proyek; ?></h6>
			        <p>
			        	<a href="<?php echo site_url('jadwal/detail/'. $row->nomor); ?>" class="btn btn-primary" role="button">Lihat Jadwal</a>
			        	<a href="<?php echo site_url('jadwal/edit/'. $row->nomor); ?>" class="btn btn-warning" role="button">Edit</a>
			        	<a href="" class="text-danger" role="button" data-toggle="modal" data-target="#modal-delete-<?php echo $row->nomor; ?>">Hapus</a>
		        	</p>

		        	<!-- Modal -->
					<div class="modal fade" id="modal-delete-<?php echo $row->nomor; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-label-<?php echo $row->nomor; ?>" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					        <h3 class="modal-title" id="modal-label-<?php echo $row->nomor; ?>">Yakin Menghapus?</h3>
					      </div>
					      <div class="modal-body">
					        <h3>Proyek <?php echo $row->nomor . ' : '. $row->judul; ?></h3>
			       			<h5>Tanggal Mulai : <?php echo $row->tanggal_mulai; ?></h5>
			       			<h5>Tanggal Selesai : <?php echo $row->tanggal_selesai; ?></h5>
			       			<h5>Pemimpin Proyek : <?php echo $row->pemimpin_proyek; ?></h5>
					      </div>
					      <div class="modal-footer">
					        <a role="button" class="btn btn-default" data-dismiss="modal">Batal</a>
					        <a href="<?php echo site_url('jadwal/hapus/'.$row->nomor); ?>" role="button" class="btn btn-danger">Hapus Jadwal</a>
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
