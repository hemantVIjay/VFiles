<div class="pg-content mb-4">

<div class="tbl-resp">
<table class="table tbl-custom" style="width:100%">
        <thead>
            <tr>
                <th>SNo.</th>
                <th>Code</th>
                <th>Name</th>
                <th>Property Type</th>
                <th>Locality</th>
                <th>Address</th>
                <th>Area</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; 
			   foreach($Properties as $key=>$row){ ?>
			<tr>
                <td><?= $i+1;?></td>
                <td><?= $row->code;?></td>
                <td><?= $row->property_name;?></td>
                <td><?= $row->property_name;?></td>
                <td><?= $row->property_name;?></td>
                <td><?= $row->property_address;?></td>
                <td><?= $row->total_area;?></td>
                <td><?= $row->property_name;?></td>
                <td class="table-action">
                     <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle">
                           <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                        </svg>
                     </a>
                     <a href="<?= base_url('admin/amenities/delete_amenities/').$row->id; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle">
                           <polyline points="3 6 5 6 21 6"></polyline>
                           <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg>
                     </a>
                  </td>
            </tr>
			<?php $i++; } ?>
		</tbody>	
    </table>
	<div id="pagination" class="mt10"><?= $pagination; ?></div>
</div>

</div>