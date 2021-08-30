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
				<th>Gallery</th>
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
				<td><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-plus-circle-fill me-1"></i>Gallery
                     </a></td>
                <td class="table-action">
                     <a href="javascript:;">
                        <i class="bi bi-pencil"></i>
                     </a>
                     <a class="ms-2" href="<?= base_url('admin/properties/delete_property/').$row->id; ?>">
                       <i class="bi bi-trash"></i>
                     </a>
                  </td>
            </tr>
			<?php $i++; } ?>
		</tbody>	
    </table>
	<div id="pagination" class="mt10"><?= $pagination; ?></div>
</div>

</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Gallery</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="tbl-resp">
                  <table class="table tbl-custom" style="width:100%">
                     <thead>
                        <tr>
                           <th width="50">SNo.</th>
						   <th width="250">Upload Image</th>
                           <th width="150">Category</th>
                           <th width="150">Caption</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td><input type="checkbox"></td>
                           <td><input type="file" class="form-control"/></td>
                           <td><select class="form-control"><option>Elevation</option><option>Video</option><option>Construction Updates</option><option>Neighbourhood</option></select></td>
                           <td><input type="text" class="form-control" /></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="addlt">
                  <a href="javascript:;" onclick="addRow('floor_plans');" ><i class="bi bi-plus-circle-fill me-1"></i>Add Row</a>
                  <a href="javascript:;" onclick="deleteRow('floor_plans');" class="ms-2"><i class="bi bi-dash-circle-fill me-1"></i>Delete Row</a>
               </div>
		<div class="mt-3">
        <button type="button" class="btn btn-primary">Submit</button>
		</div>
      </div>
    </div>
  </div>
</div>
