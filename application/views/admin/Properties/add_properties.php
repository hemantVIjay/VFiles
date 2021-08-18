<link href="<?= base_url(); ?>assets/plugins/datepicker/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
<form method="POST" action="<?= base_url('admin/properties/create_property'); ?>" id="img-upload-form" enctype="multipart/form-data" accept-charset="utf-8">
   <div class="pg-content mb-4">
      <div class="row">
         <div class="col-xl-12 col-md-12">
            <div class="cbx">
               <div class="row">
                  <div class="col-md-12 mb-3">
                     <label class="required">Choose Builder</label>
                     <select class="form-select" name="builder">
                        <option value="">--Select--</option>
                        <?= _builders(''); ?>
                     </select>
                  </div>
                  <div class="col-md-12 mb-3">
                     <label class="required">Project Name</label>
                     <input type="text" class="form-control" name="project_name"/>
                  </div>
                  <div class="col-md-3 mb-3">
                     <label class="required">Locality</label>
                     <select class="form-select" name="location" onchange="location_details(this);">
                        <option value="">--Select--</option>
                        <?= _localities(''); ?>
                     </select>
                  </div>
                  <div class="col-md-3 mb-3">
                     <label class="required">City</label>
                     <select class="form-select" name="city" id="city">
                        <option value="">--Select--</option>
						<?= _cities(''); ?>
                     </select>
                  </div>
                  <div class="col-md-3 mb-3">
                     <label class="required">District</label>
                     <select class="form-select" name="district" id="district">
                        <option value="">--Select--</option>
                        <?= _districts(''); ?>
                     </select>
                  </div>
                  <div class="col-md-3 mb-3">
                     <label class="required">State</label>
                     <select class="form-select" name="state"  id="state">
                        <option value="">--Select--</option>
						<?= _states(''); ?>
                     </select>
                  </div>
                  <div class="col-md-12 mb-3">
                     <label class="required">Address</label>
                     <input type="text" class="form-control" name="address"/>
                  </div>
               </div>
               <hr />
               <div class="cmnttl position-relative">Choose Property Type</div>
               <div class="row">
                  <div class="col-md-6 mb-3">
                     <label class="required">Property Type</label>
                     <select class="form-select" id="choose_pty" name="p_type" >
                        <option value="">--Select--</option>
						<?= _propertyType(''); ?>
                     </select>
                  </div>
               </div>
               <div class="ptyp" id="pty_flat">
                  <div class="row">
                     <div class="col-md-4 mb-3">
                        <label class="required">No. of Towers</label>
                        <input type="text" class="form-control" name="no_of_towers"/>
                     </div>
                     <div class="col-md-4 mb-3">
                        <label class="required">No. of Flats</label>
                        <input type="text" class="form-control" name="no_of_flats"/>
                     </div>
                     <div class="col-md-4 mb-3">
                        <label class="required">Total Area (In Acres)</label>
                        <input type="text" class="form-control" name="total_area"/>
                     </div>
                     <div class="col-md-4 mb-3">
                        <label class="required">Project Phase</label>
                        <select class="form-select" name="project_phase">
                           <option value="On Going">On Going</option>
                           <option value="Pre-Launch">Pre-Launch</option>
                           <option value="Completed">Completed</option>
                        </select>
                     </div>
                     <div class="col-md-4 mb-3">
                        <label class="required">Architech Name</label>
                        <input type="text" class="form-control" name="architect_name"/>
                     </div>
                     <div class="col-md-4 mb-3">
                        <label class="required">Project Launch Date</label>
                        <input type="text" class="form-control calicon" id="dtpicker" data-toggle="datetimepicker" data-target="#dtpicker" name="project_start_date"/>
                     </div>
                     <div class="col-md-12 mb-3">
                        <label class="required">Project Overview</label>
                        <textarea class="form-control" rows="4" name="project_overview"></textarea>
                     </div>
                  </div>
                  <hr />
                  <div class="cmnttl position-relative">Add Specifications</div>
                  <div class="row">
                     <div class="col-md-3 mb-3"><strong>Doors</strong></div>
                     <div class="col-md-9">
                        <div class="row">
                           <div class="col-md-6 mb-3">
                              <label class="required">Internal</label>
                              <input type="text" class="form-control" />
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="required">External</label>
                              <input type="text" class="form-control" />
                           </div>
                        </div>
                     </div>
                  </div>
                  <hr />
                  <div class="row">
                     <div class="col-md-3 mb-3"><strong>Flooring</strong></div>
                     <div class="col-md-9">
                        <div class="row">
                           <div class="col-md-6 mb-3">
                              <label class="required">Balcony</label>
                              <input type="text" class="form-control" />
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="required">Kitchen</label>
                              <input type="text" class="form-control" />
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="required">Living/Dining</label>
                              <input type="text" class="form-control" />
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="required">Master Bedroom</label>
                              <input type="text" class="form-control" />
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="required">Other Bedroom</label>
                              <input type="text" class="form-control" />
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="required">Toilet</label>
                              <input type="text" class="form-control" />
                           </div>
                        </div>
                     </div>
                  </div>
                  <hr />
                  <div class="row">
                     <div class="col-md-3 mb-3"><strong>Walls</strong></div>
                     <div class="col-md-9">
                        <div class="row">
                           <div class="col-md-6 mb-3">
                              <label class="required">Interior</label>
                              <input type="text" class="form-control" />
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="required">Kitchen</label>
                              <input type="text" class="form-control" />
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="required">Toilet</label>
                              <input type="text" class="form-control" />
                           </div>
                        </div>
                     </div>
                  </div>
                  <hr />
                  <div class="row">
                     <div class="col-md-3 mb-3"><strong>Fittings</strong></div>
                     <div class="col-md-9">
                        <div class="row">
                           <div class="col-md-6 mb-3">
                              <label class="required">Kitchen</label>
                              <input type="text" class="form-control" />
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="required">Toilet</label>
                              <input type="text" class="form-control" />
                           </div>
                        </div>
                     </div>
                  </div>
                  <hr />
                  <div class="row">
                     <div class="col-md-3 mb-3"><strong>Others</strong></div>
                     <div class="col-md-9">
                        <div class="row">
                           <div class="col-md-6 mb-3">
                              <label class="required">Windows</label>
                              <input type="text" class="form-control" />
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="required">Frame Structure</label>
                              <input type="text" class="form-control" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr />
               <div class="row">
                  <div class="col-sm-12 mb-3">
                     <div class="cmnttl position-relative">Elevation Images</div>
                     <div class="grid-x grid-padding-x">
                        <div class="small-10 small-offset-1 medium-8 medium-offset-2 cell">
                           <label for="upload_imgs">Upload Multiple Images</label>
                           <div>
                              <input class="show-for-sr" type="file" id="upload_imgs" name="elevation_images[]" multiple/>
                           </div>
                           <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview" aria-live="polite"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr />
               <div class="cmnttl position-relative">Amenities</div>
               <div class="row">
			      <?php $amenities = _amenities(); foreach($amenities as $key=>$amenity){ ?>
                  <div class="col-xl-3 col-md-4">
                     <span class="form-check">
                     <input class="form-check-input" name="amenities[]" type="checkbox" name="remember" id="amenity_<?= $key+1;?>" value="<?= $amenity->id;?>">
                     <span class="form-check-label"><?= $amenity->name; ?></span>
                     </span>
                  </div>
				  <?php } ?>
               </div>				  
               <hr />
               <div class="cmnttl position-relative">Floor Plans</div>
               <div class="tbl-resp">
                  <table class="table tbl-custom" style="width:100%">
                     <thead>
                        <tr>
                           <th>SNo.</th>
                           <th>Flat in BHK</th>
                           <th>Size</th>
                           <th>Image</th>
                           <th>Price</th>
                           <th>Study</th>
                           <th>No. of Toilets</th>
                        </tr>
                     </thead>
                     <tbody id="floor_plans">
                        <tr>
                           <td><input type="checkbox" id="check_1"></td>
                           <td>
                              <select class="form-select" id="apartment_1">
                                 <option>1 BHK</option>
                              </select>
                           </td>
                           <td><input type="text" class="form-control" id="size_1" /></td>
                           <td><input type="file" class="form-control" id="file_1"/></td>
                           <td><input type="text" class="form-control" id="price_1"/></td>
                           <td>
                              <select class="form-select" id="study_1">
                                 <option>Yes</option>
                                 <option>No</option>
                              </select>
                           </td>
                           <td><input type="text" class="form-control" id="toilets_1"/></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="addlt">
                  <a href="javascript:;" onclick="addRow('floor_plans');" ><i class="bi bi-plus-circle-fill me-1"></i>Add Row</a>
                  <a href="javascript:;" onclick="deleteRow('floor_plans');" class="ms-2"><i class="bi bi-dash-circle-fill me-1"></i>Delete Row</a>
               </div>
               <hr />
               <div class="cmnttl position-relative">Site Layout</div>
               <div class="row">
                  <div class="col-md-12 mb-3">
                     <label class="required">Upload Image</label>
                     <input type="file" class="form-control" name="site_layout"/>
                  </div>
               </div>
               <hr />
               <div class="row">
                  <div class="col-sm-12 mb-3">
                     <div class="cmnttl position-relative">Construction Image</div>
                     <div class="grid-x grid-padding-x">
                        <div class="small-10 small-offset-1 medium-8 medium-offset-2 cell">
                           <label for="upload_imgs">Upload Multiple Images</label>
                           <div>
                              <input class="show-for-sr" type="file" id="upload_imgs" name="construction_images[]" multiple/>
                           </div>
                           <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview" aria-live="polite"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr />
               <div class="cmnttl position-relative">Payment Option</div>
               <div class="row">
                  <div class="col-xl-12 mb-3">
                     <input type="file" class="form-control" name="payment_option"/>
                  </div>
               </div>
               <hr />
               <div class="cmnttl position-relative">Bank Available</div>
               <div class="row">
			      <?php $banks = _banks(); foreach($banks as $key=>$bank){ ?>
                  <div class="col-xl-3 col-md-4">
                     <span class="form-check">
                     <input class="form-check-input" name="banks[]" type="checkbox" id="bank_<?= $key+1;?>" value="<?= $bank->id;?>">
                     <span class="form-check-label"><?= $bank->name; ?></span>
                     </span>
                  </div>
				  <?php } ?>
               </div>
               <hr />
               <div class="btngroup">
                  <button class="btn btn-primary">Submit</button>
                  <button class="btn btn-outline-secondary ms-2">Reset</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>
<script src="<?= base_url(); ?>assets/js/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datepicker/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?= base_url(); ?>assets/js/custom.js"></script>
<script type="text/javascript">
   $(function () {
       $('#dtpicker').datetimepicker({
           format: 'DD-MMM-YYYY'
       });
   });
   function addRow(tableID) {
   var table = document.getElementById(tableID);
   var rowCount = table.rows.length;
   var row = table.insertRow(rowCount);
   var colCount = table.rows[0].cells.length;
   for(var i=0; i<colCount; i++) {
   var newcell	= row.insertCell(i);
   newcell.innerHTML = table.rows[0].cells[i].innerHTML;
   switch(newcell.childNodes[0].type) {
   case "text":
   newcell.childNodes[0].value = "";
   break;
   case "checkbox":
   newcell.childNodes[0].checked = false;
   break;
   case "select-one":
   newcell.childNodes[0].selectedIndex = 0;
   break;
   }
   }
   }
   
   function deleteRow(tableID) {
   try {
   var table = document.getElementById(tableID);
   var rowCount = table.rows.length;
   for(var i=0; i<rowCount; i++) {
   var row = table.rows[i];
   var chkbox = row.cells[0].childNodes[0];
   if(null != chkbox && true == chkbox.checked) {
   if(rowCount <= 1) {
   alert("Cannot delete all the rows.");
   break;
   }
   table.deleteRow(i);
   rowCount--;
   i--;
   }
   }
   }catch(e) {
   alert(e);
   }
   }
   
   
function location_details(loc) {
	var baseUrl=$('base').attr("href");
	var id = $(loc).val();
	$.ajax({
		type: "POST",
		url: baseUrl + "admin/properties/location_details",
		data:{id:id},
		async: false,
		success: function (data) {
			  var mdata = JSON.parse(data);
			  $('#city').val(mdata['city']);
			  $('#district').val(mdata['district']);
			  $('#state').val(mdata['state']);
			  $('#country').val(mdata['country']);
		},
		error: function () {

		}
	});
}
   
</SCRIPT>