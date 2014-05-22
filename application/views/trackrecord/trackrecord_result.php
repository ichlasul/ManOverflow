<?php
echo '<div class="col-md-12">';
echo isset($info) ? '<div class="alert alert-success">' . $info . '</div>' : '';

if (count($result) <= 0)
{
    echo '<div class="alert alert-danger">Tidak ada TrackRecord yang ditemukan.</div>';
}

else
{	
	echo '<table cellspacing="1" cellpadding="3" class="tablehead" style="background:#CCC;">';
	echo '<thead>              
            <tr class="colhead" height=40>
              <th title="Id" align="center">Id Code</th>
              <th title="TrackRecord" align="center">TrackRecord</th>';
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
    	echo '<td align="center">' . $row->id . '</td>
              <td align="center"><a href="' . site_url('trackrecord/detail/'. $row->id) . '" class="" role="button">' . $row->nama . '</a></td>';             	
			  if ($mode == 1)
			  	echo '<td align="center">
			  		<a href="' .  site_url('trackrecord/edit/'. $row->id) . '" class="" role="button">
			  		<img class="btn-jadwal" src="' . base_url('assets/img/edit.png') . '" title="Edit TrackRecord" ></a>
			  		<a href="" class="text-danger" role="button" data-toggle="modal" data-target="#modal-delete-' . $row->id . '">
			  		<img class="btn-jadwal" src="' . base_url('assets/img/hapus.png') . '" title="Hapus TrackRecord" ></a></td></tr>';
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
					<div class="modal fade" id="modal-delete-<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-label-<?php echo $row->id; ?>" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					        <h3 class="modal-title" id="modal-label-<?php echo $row->id; ?>">Yakin Menghapus?</h3>
					      </div>
					      <div class="modal-body">
					        <h3>TrackRecord <?php echo $row->nama; ?></h3>
					      </div>
					      <div class="modal-footer">
					        <a role="button" class="btn btn-default" data-dismiss="modal">Batal</a>
					        <a href="<?php echo site_url('trackrecord/hapus/'.$row->id); ?>" role="button" class="btn btn-danger">Hapus TrackRecord</a>
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
