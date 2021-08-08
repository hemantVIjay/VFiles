<link href="<?= base_url(); ?>assets/plugins/datepicker/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">

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
		<div class="row">
			<div class="col-md-6 mb-3">
				<label class="required">Property Type</label>
				<select class="form-select">
					<option>Flat</option>
					<option>Plot</option>
				</select>
			</div>
		</div>
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
		
		<div class="row">
			<div class="col-sm-12 mb-3">
				<div class="grid-x grid-padding-x">
  <div class="small-10 small-offset-1 medium-8 medium-offset-2 cell">

        <label for="upload_imgs">Add Elevation Images</label>
		<div>
        <input class="show-for-sr" type="file" id="upload_imgs" name="upload_imgs[]" multiple/>
		</div>
		<div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview" aria-live="polite"></div>

  </div>
</div>
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