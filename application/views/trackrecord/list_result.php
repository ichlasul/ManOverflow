<?php
echo '<div class="col-md-12">';
echo isset($info) ? '<div class="alert alert-success">' . $info . '</div>' : '';

// if (count($result) <= 0)
// {
//     echo '<div class="alert alert-danger">Tidak ada proyek yang ditemukan.</div>';
// }

if ($list == null || !isset($list)) {
    echo '<div class="alert alert-danger">Kamu belum memiliki TrackRecord.</div>';
}

else
{	
	echo '<table cellspacing="1" cellpadding="3" class="tablehead" style="background:#CCC;">';
	echo '<thead>              
            <tr class="colhead" height=40>
              <th title="Id Code" align="center">Id Code</th>
              <th title="TrackRecord" align="center">TrackRecord</th>';
              if ($mode == 1)
              	echo '<th class="{sorter: false}" title="Aksi" align="center">Aksi</th>';
           echo '</tr>
          </thead>
          <tbody>';

    $counter = 1;
    $lists = explode(", ", $list);
    foreach($lists as $idCode)
    {
    	if ($idCode == "") continue;

    	$row = $this->TrackRecord_model->get_by_id($idCode);
    	if ($counter % 2 == 1)
    	{
    	   echo '<tr class="oddrow" height=35>';
    	}
    	else
    	{
    		echo '<tr class="evenrow" height=35>';              
    	}
    	echo '<td align="center">' . $row[0]->id . '</td>
              <td align="center"><a href="' . site_url('trackrecord/detail/'. $row[0]->id) . '" class="" role="button">' . $row[0]->nama . '</a></td>';             
	          	
			  if ($mode == 1)
			  	echo '<td align="center">
			  		<a href="' .  site_url('trackrecord/edit/'. $row[0]->id) . '" class="" role="button">
			  		<img class="btn-jadwal" src="' . base_url('assets/img/edit.png') . '" title="Edit TrackRecord" ></a>
			  		<a href="" class="text-danger" role="button" data-toggle="modal" data-target="#modal-delete-' . $row[0]->id . '">
			  		<img class="btn-jadwal" src="' . base_url('assets/img/hapus.png') . '" title="Hapus TrackRecord" ></a></td></tr>';
    	$counter++;
?>    	
	    	<!-- <div class="thumbnail">
		      	<img class="img-responsive" data-src="" alt="Foto">
		      	<div class="caption"> -->
		      		<!-- <h3><?php echo $row[0]->judul; ?></h3>			        
			        <h5><b><?php echo $row[0]->tanggal_mulai; ?> </b>s.d. <b><?php echo $row[0]->tanggal_selesai; ?></b></h5>
			        <h6>Pemimpin Proyek : <?php echo $row[0]->pemimpin_proyek; ?></h6>
			        <p>
			        	<a href="<?php echo site_url('jadwal/detail/'. $row[0]->nomor); ?>" class="btn btn-primary" role="button">Lihat Jadwal</a>
			        	<?php
			        	if ($mode == 1)
			        		echo '<a href="' .  site_url('jadwal/edit/'. $row[0]->nomor) . '" class="btn btn-warning" role="button">Edit</a><a href="" class="text-danger" role="button" data-toggle="modal" data-target="#modal-delete-' . $row[0]->nomor. '"> Hapus</a>';
			        	?>
		        	</p>	 -->	        	
		        	<!-- Modal -->
					<div class="modal fade" id="modal-delete-<?php echo $row[0]->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-label-<?php echo $row[0]->id; ?>" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					        <h3 class="modal-title" id="modal-label-<?php echo $row[0]->id; ?>">Yakin Menghapus?</h3>
					      </div>
					      <div class="modal-body">
					        <h3>TrackRecord <?php echo $row[0]->nama; ?></h3>
					      </div>
					      <div class="modal-footer">
					        <a role="button" class="btn btn-default" data-dismiss="modal">Batal</a>
					        <a href="<?php echo site_url('trackrecord/hapus/'.$row[0]->id); ?>" role="button" class="btn btn-danger">Hapus TrackRecord</a>
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
