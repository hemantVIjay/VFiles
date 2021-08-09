<link href="<?= base_url(); ?>assets/plugins/datepicker/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">

<div class="pg-content mb-4">

<div class="row">
<div class="col-xl-8 col-md-7">
	<div class="cbx">
		<div class="row">
			<div class="col-md-12 mb-3">
				<label class="required">Choose Builder</label>
				<select class="form-select">
					<option>Amrapali</option>
					<option>Supertech</option>
				</select>
			</div>
			<div class="col-md-12 mb-3">
				<label class="required">Project Name</label>
				<input type="text" class="form-control" />
			</div>
			<div class="col-md-3 mb-3">
				<label class="required">State</label>
				<select class="form-select">
					<option>UP</option>
					<option>HP</option>
				</select>
			</div>
			<div class="col-md-3 mb-3">
				<label class="required">District</label>
				<select class="form-select">
					<option>GB Nagar</option>
					<option>GHB</option>
				</select>
			</div>
			<div class="col-md-3 mb-3">
				<label class="required">City</label>
				<select class="form-select">
					<option>Noida</option>
					<option>Gr. Noida</option>
				</select>
			</div>
			<div class="col-md-3 mb-3">
				<label class="required">Locality</label>
				<select class="form-select">
					<option>Noida</option>
					<option>Gr. Noida</option>
				</select>
			</div>
			<div class="col-md-12 mb-3">
				<label class="required">Address</label>
				<input type="text" class="form-control" />
			</div>
		</div>
		<hr />
		<div class="cmnttl position-relative">Choose Property Type</div>
		<div class="row">
			<div class="col-md-6 mb-3">
				<label class="required">Property Type</label>
				<select class="form-select" id="choose_pty">
					<option value="pytflat">Flat</option>
					<option value="pytplot">Plot</option>
				</select>
			</div>
		</div>
		<div class="ptyp" id="pty_flat">
		<div class="row">
			<div class="col-md-4 mb-3">
				<label class="required">No. of Towers</label>
				<input type="text" class="form-control" />
			</div>
			<div class="col-md-4 mb-3">
				<label class="required">No. of Flats</label>
				<input type="text" class="form-control" />
			</div>
			<div class="col-md-4 mb-3">
				<label class="required">Total Area (In Acres)</label>
				<input type="text" class="form-control" />
			</div>
			<div class="col-md-4 mb-3">
				<label class="required">Project Phase</label>
				<select class="form-select">
					<option>On Going</option>
					<option>Pre-Launch</option>
					<option>Completed</option>
				</select>
			</div>
			<div class="col-md-4 mb-3">
				<label class="required">Architech Name</label>
				<input type="text" class="form-control" />
			</div>
			<div class="col-md-4 mb-3">
				<label class="required">Project Launch Date</label>
				<input type="text" class="form-control calicon" id="dtpicker" data-toggle="datetimepicker" data-target="#dtpicker" />
			</div>
			<div class="col-md-12 mb-3">
				<label class="required">Project Overview</label>
				<textarea class="form-control" rows="4"></textarea>
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
        <input class="show-for-sr" type="file" id="upload_imgs" name="upload_imgs[]" multiple/>
		</div>
		<div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview" aria-live="polite"></div>

  </div>
</div>
			</div>
		</div>
		
		<hr />
		<div class="cmnttl position-relative">Amenities</div>
		<div class="row">
			<div class="col-xl-3 col-md-4">
				<span class="form-check">
					<input class="form-check-input" type="checkbox" name="remember">
					<span class="form-check-label">Activity Deck</span>
				</span>
			</div>
			<div class="col-xl-3 col-md-4">
				<span class="form-check">
					<input class="form-check-input" type="checkbox" name="remember">
					<span class="form-check-label">Aerobics Room</span>
				</span>
			</div>
			<div class="col-xl-3 col-md-4">
				<span class="form-check">
					<input class="form-check-input" type="checkbox" name="remember">
					<span class="form-check-label">Air Conditioned</span>
				</span>
			</div>
			<div class="col-xl-3 col-md-4">
				<span class="form-check">
					<input class="form-check-input" type="checkbox" name="remember">
					<span class="form-check-label">Arts & CraftStudio</span>
				</span>
			</div>
			<div class="col-xl-3 col-md-4">
				<span class="form-check">
					<input class="form-check-input" type="checkbox" name="remember">
					<span class="form-check-label">Bank & ATM</span>
				</span>
			</div>
			<div class="col-xl-3 col-md-4">
				<span class="form-check">
					<input class="form-check-input" type="checkbox" name="remember">
					<span class="form-check-label">Banquet Hall</span>
				</span>
			</div>
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
        <tbody>
            <tr>
                <td>1</td>
                <td>
					<select class="form-select">
					<option>1 BHK</option>
					<option>1 BHK</option>
				</select>
				</td>
                <td><input type="text" class="form-control" /></td>
                <td><input type="file" class="form-control" /></td>
                <td><input type="text" class="form-control" /></td>
                <td><select class="form-select">
					<option>Yes</option>
					<option>No</option>
				</select></td>
				<td><input type="text" class="form-control" /></td>
            </tr>
			
			 </tbody>
			 </table>
			 </div>
			 <div class="addlt">
				<a href="javascript:;"><i class="bi bi-plus-circle-fill me-1"></i>Add Row</a>
				<a href="javascript:;" class="ms-2"><i class="bi bi-dash-circle-fill me-1"></i>Delete Row</a>
			 </div>
			 
			 <hr />
		<div class="cmnttl position-relative">Site Layout</div>
		<div class="row">
			<div class="col-md-12 mb-3">
				<label class="required">Upload Image</label>
				<input type="file" class="form-control" />
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
        <input class="show-for-sr" type="file" id="upload_imgs" name="upload_imgs[]" multiple/>
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
				<input type="file" class="form-control" />
			</div>
		</div>
	
	<hr />
	
		<div class="cmnttl position-relative">Bank Available</div>
		<div class="row">
			<div class="col-xl-3 col-md-4">
				<span class="form-check">
					<input class="form-check-input" type="checkbox" name="remember">
					<span class="form-check-label">HDFC Bank</span>
				</span>
			</div>
			<div class="col-xl-3 col-md-4">
				<span class="form-check">
					<input class="form-check-input" type="checkbox" name="remember">
					<span class="form-check-label">ICICI Bank</span>
				</span>
			</div>
			<div class="col-xl-3 col-md-4">
				<span class="form-check">
					<input class="form-check-input" type="checkbox" name="remember">
					<span class="form-check-label">SBI Bank</span>
				</span>
			</div>
			<div class="col-xl-3 col-md-4">
				<span class="form-check">
					<input class="form-check-input" type="checkbox" name="remember">
					<span class="form-check-label">Axis Bank</span>
				</span>
			</div>
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

	


<script src="<?= base_url(); ?>assets/js/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datepicker/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?= base_url(); ?>assets/js/custom.js"></script>

<script type="text/javascript">
            $(function () {
                $('#dtpicker').datetimepicker({
                    format: 'DD-MMM-YYYY'
                });
            });
        </script>