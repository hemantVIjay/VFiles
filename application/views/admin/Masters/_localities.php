<div class="row">
   <div class="col-12 col-xl-4">
      <div class="card">
         <div class="card-header">
            <h5 class="card-title">Add Locations</h5>
         </div>
         <div class="card-body">
            <form method="POST" action="<?= base_url('admin/masters/add_localities'); ?>" enctype="multipart/form-data" accept-charset="utf-8">
			   <input type="hidden" name="id" value="<?php echo $record->id ?? '';?>">
               <div class="mb-3">
                  <label class="form-label">Location Name</label>
                  <input name="name" type="text" class="form-control" placeholder="Enter State here..." value="<?php echo $record->name ?? '';?>">
               </div>
			   <div class="mb-3">
                  <label class="form-label">City</label>
                  <select class="form-control" name="city" id="city_id">
				   <option value="">--Select City--</option>
				   <?php  echo _cities($record->city_id); ?>
			      </select>
               </div>
			   <!--<div class="mb-3">
                  <label class="form-label">District</label>
                  <select class="form-control" name="district" id="city_id">
				   <option value="">--Select District--</option>
				   <?= _districts(''); ?>
			      </select>
               </div>-->
			   <div class="mb-3">
                  <label class="form-label">State</label>
                  <select class="form-control" name="state" id="state_id">
				   <option value="">--Select State--</option>
				   <?php  echo _states($record->state_id); ?>
			    </select>
               </div>
			   <div class="mb-3">
                  <label class="form-label">Country</label>
                  <select class="form-control" name="country" id="country_id">
				   <option value="">--Select Country--</option>
				   <?php  echo _countries($record->country_id); ?>
			    </select>
               </div>
               <button type="submit" class="btn btn-primary">Save</button>
            </form>
         </div>
      </div>
   </div>
   <div class="col-12 col-xl-8">
      <div class="card">
         <div class="card-header">
            <h5 class="card-title">Locations Lists</h5>
         </div>
         <div style="overflow:auto;height:525px;">
		 <table class="table" style="width:100%;height:100%;">
            <thead>
               <tr>
                  <th style="width:10%;">Sr. No.</th>
                  <th style="width:30%;">Name</th>
                  <th style="width:15%;">City</th>
                  <th style="width:15%;">State</th>
                  <th class="d-none d-md-table-cell" style="width:15%">Country</th>
                  <th>Actions</th>
               </tr>
            </thead>
            <tbody>
               <?php $i=0; if(!empty($localities)){
			   foreach($localities as $key=>$row){ $cls = ($i % 2); ?>
			   <tr class="<?php if($cls==0){ ?>table-success<?php } ?>">
                  <td><?= $i+1; ?></td>
                  <td><?= $row->name; ?></td>
                  <td><?= $row->city_id; ?></td>
                  <td><?= $row->state_id; ?></td>
                  <td><?= $row->country_id; ?></td>
                  <td class="table-action">
                     <a href="<?= base_url('admin/masters/list_localities/').$row->id; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle">
                              <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                        </svg>
                     </a>
                     <a href="<?= base_url('admin/masters/delete_localities/').$row->id; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle">
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg>
                     </a>
                  </td>
               </tr>
			   <?php $i++; } }else{ ?>
			   <tr><td colspan="7" class="text-center">No Records Found.</td></tr>
			   <?php }?>
            </tbody>
         </table>
		 </div>
      </div>
   </div>
</div>
<script>
 var dataURL = $('base').attr("href");
 $(function ($) {
	     'use strict';
		  initCities('city_id');
		 });
		 function initCities(cid){			
			 $('#'+cid).select2({
					 placeholder: 'Select City',
					 ajax: {
						 url: dataURL+'admin/localities/search_cities',
						 dataType: 'json',
						 delay: 220,
						 processResults: function (data) {
						 return {
						  results: $.map(data, function (data) {
						   return {
							text: data.name,
							id: data.id
								  }
							 })
						   };
						 },
					 cache: true
				 }
			 }).on("select2:select", function (e) {
				var s_element = $(e.currentTarget);
				var s_val = s_element.val();
				fetchData(s_val);
			});			 
		 }
		 	function fetchData(s_val){
	    var mData, lData;
		var state = $('#state_id');
	    var country = $('#country_id');
		$.ajax({
			type: 'POST',
			url: dataURL + 'admin/localities/fetchCity_Details',
			data: {cid:s_val},
			async: false,
			success: function (res) {
				mData = atob(res).split("@@");
				state.html(mData[0]);
				country.html(mData[1]);
			},
			error: function () {
				
			}
		}); 
	}
</script>