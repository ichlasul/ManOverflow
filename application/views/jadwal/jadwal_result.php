<?php
echo '<div class="col-md-12">';
echo isset($info) ? '<div class="alert alert-success">' . $info . '</div>' : '';

if (count($result) <= 0)
{
    echo '<div class="alert alert-danger">Tidak ada proyek yang ditemukan.</div>';
}

else
{	
	echo '<table cellspacing="1" cellpadding="3" class="tablehead" style="background:#CCC;">';
	echo '<thead>              
            <tr class="colhead" height=40>
              <th title="Kode Proyek" align="center">Kode Proyek</th>
              <th title="Judul Proyel" align="center">Judul Proyek</th>
              <th title="Tanggal Mulai" align="center">Tanggal Mulai</th>
              <th title="Tanggal Selesai" align="center">Tanggal Selesai</th>
              <th title="Prioritas" align="center">Prioritas</th>
              <th title="Pemimpin Proyek" align="center">Pemimpin Proyek</th>';
              if ($mode == 1)
              	echo '<th class="{sorter: false}" title="Aksi" align="center">Aksi</th>';
           echo '</tr>
          </thead>
          <tbody>';

    $counter = 1;
    foreach($result as $row)    	
    {
    	if ($counter % 2 == 1)
    	{
    	   echo '<tr class="oddrow" height=35>';
    	}
    	else
    	{
    		echo '<tr class="evenrow" height=35>';              
    	}
    	echo '<td align="center">' . $row->nomor . '</td>
              <td align="center"><a href="' . site_url('jadwal/detail/'. $row->nomor) . '" class="" role="button">' . $row->judul . '</a></td>              
	          <td align="center">' . $row->tanggal_mulai . '</td>
	          <td align="center">' . $row->tanggal_selesai . '</td>
	          <td align="center">' . $row->prioritas . '</td>
	          <td align="center">' . $row->pemimpin_proyek . '</td>';	
			  if ($mode == 1)
			  	echo '<td align="center">
			  		<a href="' .  site_url('jadwal/edit/'. $row->nomor) . '" class="" role="button">
			  		<img class="btn-jadwal" src="' . base_url('assets/img/edit.png') . '" title="Edit Jadwal" ></a>
			  		<a href="" class="text-danger" role="button" data-toggle="modal" data-target="#modal-delete-' . $row->nomor . '">
			  		<img class="btn-jadwal" src="' . base_url('assets/img/hapus.png') . '" title="Hapus Jadwal" ></a></td></tr>';
    	$counter++;
?>    	
	    	<!-- <div class="thumbnail">
		      	<img class="img-responsive" data-src="" alt="Foto">
		      	<div class="caption"> -->
		      		<!-- <h3><?php echo $row->judul; ?></h3>			        
			        <h5><b><?php echo $row->tanggal_mulai; ?> </b>s.d. <b><?php echo $row->tanggal_selesai; ?></b></h5>
			        <h6>Pemimpin Proyek : <?php echo $row->pemimpin_proyek; ?></h6>
			        <p>
			        	<a href="<?php echo site_url('jadwal/detail/'. $row->nomor); ?>" class="btn btn-primary" role="button">Lihat Jadwal</a>
			        	<?php
			        	if ($mode == 1)
			        		echo '<a href="' .  site_url('jadwal/edit/'. $row->nomor) . '" class="btn btn-warning" role="button">Edit</a><a href="" class="text-danger" role="button" data-toggle="modal" data-target="#modal-delete-' . $row->nomor. '"> Hapus</a>';
			        	?>
		        	</p>	 -->	        	
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
			       			<h4>Tanggal Mulai : <?php echo $row->tanggal_mulai; ?></h4>
			       			<h4>Tanggal Selesai : <?php echo $row->tanggal_selesai; ?></h4>
			       			<h4>Pemimpin Proyek : <?php echo $row->pemimpin_proyek; ?></h4>
					      </div>
					      <div class="modal-footer">
					        <a role="button" class="btn btn-default" data-dismiss="modal">Batal</a>
					        <a href="<?php echo site_url('jadwal/hapus/'.$row->nomor); ?>" role="button" class="btn btn-danger">Hapus Jadwal</a>
					      </div>
					    </div>
					  </div>
					<!-- </div>
		      	</div> -->		      	
    		</div>    		
    	</div>
<?php
	}
}
