<link href="<?= base_url(); ?>assets/plugins/datepicker/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
<div class="row">
   <div class="col-md-8 col-sm-9">
      <div class="card">
         <div class="card-header">
            <h5 class="card-title">Update Builder Details</h5>
         </div>
         <div class="card-body">
            <form method="POST" action="<?= base_url();?>admin/builders/update_builder" enctype="multipart/form-data" accept-charset="utf-8">
               <div class="mb-3">
                  <label class="form-label">Builder Name</label>
                  <input name="builder_id" type="hidden" class="form-control" value="<?= $builder['id']; ?>" >
                  <input name="builder_name" type="text" class="form-control" placeholder="Enter builder name" value="<?= $builder['builder_name']; ?>" >
               </div>
               <div class="mb-3">
                  <label class="form-label">Builder Website</label>
                  <input name="builder_website" type="text" class="form-control" placeholder="Enter builder website" value="<?= $builder['builder_website']; ?>" >
               </div>
               <div class="mb-3">
                  <label class="form-label">Established Year</label>
                  <input name="builder_estabilished_year" type="text" class="form-control" placeholder="Enter estd. year" value="<?= $builder['builder_estabilished_year']; ?>" id="builder_estabilished_year" autocomplete="off">
               </div>
               <div class="mb-3">
                  <label class="form-label">About Builder</label>
                  <textarea id="description" name="builder_information" class="form-control" placeholder="Builder description here..." rows="3"><?= $builder['builder_information']; ?></textarea>
               </div>
               <div class="mb-3">
                  <label class="form-label">Builder Logo</label>
                  <input type="file" class="form-control" name="builder_logo" accept=".png,.jpg,.jpeg,.webp,.svg" >
                  <div class="text-muted">Note : .png, .jpg, .jpeg, .webp, .svg format accepted</div>
				  <img src="<?= base_url();?>uploads/builders/<?= $builder['builder_logo']; ?>">
               </div>
               <div class="mb-3">
                  <label class="form-label">Office Address</label>
                  <textarea name="builder_office_address" class="form-control" placeholder="Office address" rows="2"><?= $builder['builder_office_address']; ?></textarea>
               </div>
               <div class="mb-3">
                  <label class="form-label">Phone Number</label>
                  <input name="builder_phone" type="text" class="form-control" placeholder="Enter phone numbers" value="<?= $builder['builder_phone']; ?>">
               </div>
               <div class="mb-3">
                  <label class="form-label">Owner Name</label>
                  <input name="builder_owner_name" type="text" class="form-control" placeholder="Enter owner name" value="<?= $builder['builder_owner_name']; ?>">
               </div>
               <div class="card-header">
                  <h5 class="card-title">Contact Person Details</h5>
               </div>
               <div class="mb-1">
                  <a href="javascript:;" onclick="addRow('contact_persons');">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                     </svg>
                     Add Row
                  </a>
                  &nbsp; 
                  <a href="javascript:;" onclick="deleteRow('contact_persons');">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
                     </svg>
                     Delete Row
                  </a>
               </div>
               <table class="table">
                  <tr>
                     <th>SNo.</th>
                     <th>Name</th>
                     <th>Phone Number</th>
                     <th>Email ID</th>
                     <th></th>
                  </tr>
                  <tbody id="contact_persons">
                     <?php if(!empty($builder['contacts'])){ foreach($builder['contacts'] as $kk=>$contact){ ?>
					 <tr>
                        <td><input type="checkbox" id="checkbox_<?=$kk;?>"></td>
                        <td><input name="name[]" id="name_<?=$kk;?>" type="text" class="form-control form-control-sm" placeholder="Enter name" value="<?=$contact->contact_name;?>" ></td>
                        <td><input name="phone[]" id="phone_<?=$kk;?>" type="text" class="form-control form-control-sm" placeholder="Enter phone no." value="<?=$contact->contact_phone;?>"></td>
                        <td><input name="email[]" id="email_<?=$kk;?>" type="text" class="form-control form-control-sm" placeholder="Enter email id" value="<?=$contact->contact_email;?>"></td>
                     </tr>
					 <?php } }else{ ?>
					 <tr>
                        <td><input type="checkbox" id="checkbox_1"></td>
                        <td><input name="name[]" id="name_1" type="text" class="form-control form-control-sm" placeholder="Enter name"></td>
                        <td><input name="phone[]" id="phone_1" type="text" class="form-control form-control-sm" placeholder="Enter phone no."></td>
                        <td><input name="email[]" id="email_1" type="text" class="form-control form-control-sm" placeholder="Enter email id"></td>
                     </tr>
						 
					 <?php } ?>
                  </tbody>
               </table>
               <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
      </div>
   </div>
</div>
<script src="<?= base_url(); ?>assets/js/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datepicker/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="https://cdn.ckeditor.com/4.17.1/standard-all/ckeditor.js"></script>
<SCRIPT language="javascript">
// CKEditor
   CKEDITOR.replace('description', {
      fullPage: true,
      extraPlugins: 'docprops',
      // Disable content filtering because if you use full page mode, you probably
      // want to  freely enter any HTML content in source mode without any limitations.
      allowedContent: true,
      height: 120,
      removeButtons: 'PasteFromWord'
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
   
 $(function () {
                $('#builder_estabilished_year').datetimepicker({
                    format: 'DD-MMM-YYYY'
                });
            });
   
</SCRIPT>