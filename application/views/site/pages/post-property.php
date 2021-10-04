<link href="<?= base_url(); ?>assets/css/jquery.steps.css" rel="stylesheet">
<script src="<?= base_url(); ?>assets/js/jquery.steps.min.js"></script>

<script>
                $(function ()
                {
                    $("#wizard").steps({
                        headerTag: "h2",
                        bodyTag: "section",
                        transitionEffect: "slideLeft",
                        stepsOrientation: "vertical"
                    });
                });
            </script>

<div class="container">
<div class="row justify-content-center mt-4 mb-4">
	<div class="col-xl-10 col-lg-11 col-md-12">
		

            <div id="wizard">
                <h2>Property Profile</h2>
                <section>
					<div class="mb-4">
						<label class="required">I want to</label>
						<div class="d-flex flex-wrap bdgchkrdo">
							<span class="chkrdobtn">
								<input id="pvIWTSell" type="radio" name="pvIWT">
								<label for="pvIWTSell">Sell</label>
							</span>
							<span class="chkrdobtn">
								<input id="pvIWTRent" type="radio" name="pvIWT">
								<label for="pvIWTRent">Rent/ Lease</label>
							</span>
							<span class="chkrdobtn">
								<input id="pvIWTPG" type="radio" name="pvIWT">
								<label for="pvIWTPG">PG</label>
							</span>
						</div>
					</div>

					<div class="mb-4">
						<label class="required">Property Type</label>
						<div class="d-flex flex-wrap bdgchkrdo">
							<span class="chkrdobtn">
								<input id="pvAprt" type="radio" name="pvPTYP">
								<label for="pvAprt">Apartment</label>
							</span>
							<span class="chkrdobtn">
								<input id="pvIndHs" type="radio" name="pvPTYP">
								<label for="pvIndHs">Independent House</label>
							</span>
							<span class="chkrdobtn">
								<input id="pvIndFl" type="radio" name="pvPTYP">
								<label for="pvIndFl">Independent Floor</label>
							</span>
							<span class="chkrdobtn">
								<input id="pvVill" type="radio" name="pvPTYP">
								<label for="pvVill">Villa</label>
							</span>
							<span class="chkrdobtn">
								<input id="pvPlt" type="radio" name="pvPTYP">
								<label for="pvPlt">Plot</label>
							</span>
							<span class="chkrdobtn">
								<input id="pvPlt" type="radio" name="pvPTYP">
								<label for="pvPlt">Agricultural Land</label>
							</span>
						</div>
					</div>

					<div class="mb-4">
						<label class="required">Construction Status</label>
						<div class="d-flex flex-wrap bdgchkrdo">
							<span class="chkrdobtn">
								<input id="pvrtm" type="radio" name="pvCONSTS">
								<label for="pvrtm">Ready to Move</label>
							</span>
							<span class="chkrdobtn">
								<input id="pvucont" type="radio" name="pvCONSTS">
								<label for="pvucont">Under Construction</label>
							</span>
						</div>
					</div>

					<div class="mb-4">
						<label class="required">BHK</label>
						<div class="d-flex flex-wrap bdgchkrdo">
							<span class="chkrdobtn">
								<input id="pv1BHK" type="radio" name="pvBHK">
								<label for="pv1BHK">1 BHK</label>
							</span>
							<span class="chkrdobtn">
								<input id="pv2BHK" type="radio" name="pvBHK">
								<label for="pv2BHK">2 BHK</label>
							</span>
							<span class="chkrdobtn">
								<input id="pv3BHK" type="radio" name="pvBHK">
								<label for="pv3BHK">3 BHK</label>
							</span>
							<span class="chkrdobtn">
								<input id="pv3PBHK" type="radio" name="pvBHK">
								<label for="pv3PBHK">3+ BHK</label>
							</span>
						</div>
					</div>

					<div class="mb-4">
						<label class="required">Bathroom</label>
						<div class="d-flex flex-wrap bdgchkrdo">
							<span class="chkrdobtn">
								<input id="pv1bth" type="radio" name="pvBTH">
								<label for="pv1bth">1</label>
							</span>
							<span class="chkrdobtn">
								<input id="pv2bth" type="radio" name="pvBTH">
								<label for="pv2bth">2</label>
							</span>
							<span class="chkrdobtn">
								<input id="pv3bth" type="radio" name="pvBTH">
								<label for="pv3bth">3</label>
							</span>
							<span class="chkrdobtn">
								<input id="pv3pbth" type="radio" name="pvBTH">
								<label for="pv3pbth">3+</label>
							</span>
						</div>
					</div>

					<div class="mb-4">
						<label class="required">Balcony</label>
						<div class="d-flex flex-wrap bdgchkrdo">
							<span class="chkrdobtn">
								<input id="pv1blcn" type="radio" name="pvBLCNY">
								<label for="pv1blcn">1</label>
							</span>
							<span class="chkrdobtn">
								<input id="pv2blcn" type="radio" name="pvBLCNY">
								<label for="pv2blcn">2</label>
							</span>
							<span class="chkrdobtn">
								<input id="pv3blcn" type="radio" name="pvBLCNY">
								<label for="pv3blcn">3</label>
							</span>
							<span class="chkrdobtn">
								<input id="pv3pblcn" type="radio" name="pvBLCNY">
								<label for="pv3pblcn">3+</label>
							</span>
						</div>
					</div>

					<div class="mb-4">
						<label class="required">Furnish Type</label>
						<div class="d-flex flex-wrap bdgchkrdo">
							<span class="chkrdobtn">
								<input id="pvfllfrns" type="radio" name="pvFRNTYP">
								<label for="pvfllfrns">Fully Furnished</label>
							</span>
							<span class="chkrdobtn">
								<input id="pvsmifrns" type="radio" name="pvFRNTYP">
								<label for="pvsmifrns">Semi Furnished</label>
							</span>
							<span class="chkrdobtn">
								<input id="pvunfrns" type="radio" name="pvFRNTYP">
								<label for="pvunfrns">Unfurnished</label>
							</span>
						</div>
					</div>

					<div class="mb-4">
						<label class="required">Open Parking</label>
						<div class="d-flex flex-wrap bdgchkrdo">
							<span class="chkrdobtn">
								<input id="pv0opnprk" type="radio" name="pvOPNPRK">
								<label for="pv0opnprk">0</label>
							</span>
							<span class="chkrdobtn">
								<input id="pv1opnprk" type="radio" name="pvOPNPRK">
								<label for="pv1opnprk">1</label>
							</span>
							<span class="chkrdobtn">
								<input id="pv2opnprk" type="radio" name="pvOPNPRK">
								<label for="pv2opnprk">2</label>
							</span>
							<span class="chkrdobtn">
								<input id="pv3opnprk" type="radio" name="pvOPNPRK">
								<label for="pv3opnprk">3</label>
							</span>
							<span class="chkrdobtn">
								<input id="pv3popnprk" type="radio" name="pvOPNPRK">
								<label for="pv3popnprk">3+</label>
							</span>
						</div>
					</div>

					<div class="mb-4">
						<label class="required">Covered Parking</label>
						<div class="d-flex flex-wrap bdgchkrdo">
							<span class="chkrdobtn">
								<input id="pv0cvrprk" type="radio" name="pvCVRPRK">
								<label for="pv0cvrprk">0</label>
							</span>
							<span class="chkrdobtn">
								<input id="pv1cvrprk" type="radio" name="pvCVRPRK">
								<label for="pv1cvrprk">1</label>
							</span>
							<span class="chkrdobtn">
								<input id="pv2cvrprk" type="radio" name="pvCVRPRK">
								<label for="pv2cvrprk">2</label>
							</span>
							<span class="chkrdobtn">
								<input id="pv3cvrprk" type="radio" name="pvCVRPRK">
								<label for="pv3cvrprk">3</label>
							</span>
							<span class="chkrdobtn">
								<input id="pv3pcvrprk" type="radio" name="pvCVRPRK">
								<label for="pv3pcvrprk">3+</label>
							</span>
						</div>
					</div>
					<div class="row">
							<div class="col-6 mb-4">
								<div class="form-floating pfff">
								  <input type="text" class="form-control" id="floatingInput" placeholder="Cost">
								  <label for="floatingInput" class="required">Cost</label>
								</div>
							</div>
							<div class="col-6 mb-4">
								<div class="form-floating pfff">
								  <input type="text" class="form-control" id="floatingInput" placeholder="Maintenance Charges/ month">
								  <label for="floatingInput">Maintenance Charges/ month</label>
								</div>
							</div>
							<div class="col-6 mb-4">
								<div class="form-floating pfff">
								  <input type="text" class="form-control" id="floatingInput" placeholder="Built Up Area">
								  <label for="floatingInput" class="required">Built Up Area</label>
								</div>
							</div>
							<div class="col-6 mb-4">
								<div class="form-floating pfff">
								  <input type="text" class="form-control" id="floatingInput" placeholder="Carpet Area (Optional)">
								  <label for="floatingInput">Carpet Area (Optional)</label>
								</div>
							</div>
					</div>

                </section>

                <h2>Location</h2>
                <section>
							<label class="required">Upload Photo (Atleast 10 photo: Bedroom, Hall, Kitchen, Bathroom, Balcony etc.)</label>
								<div class="form-floating pfff mb-4">
								  <input type="text" class="form-control" id="floatingInput" placeholder="City">
								  <label for="floatingInput" class="required">City</label>
								</div>
								<div class="form-floating pfff mb-4">
								  <input type="text" class="form-control" id="floatingInput" placeholder="Maintenance Charges/ month">
								  <label for="floatingInput">Building/ Project/ Society (Optional)</label>
								</div>
								<div class="form-floating pfff mb-4">
								  <input type="text" class="form-control" id="floatingInput" placeholder="Built Up Area">
								  <label for="floatingInput" class="required">Locality</label>
								</div>
                </section>

                <h2>Photo</h2>
                <section>
                     <div class="addlt" style="text-align:right;"><a href="javascript:;" ><i class="bi bi-plus-circle-fill me-1"></i>Add Row</a>
               <a href="javascript:;" class="ms-2"><i class="bi bi-dash-circle-fill me-1"></i>Delete Row</a>
            </div>
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
                  <tbody id="gallery">
                     <tr>
                        <td><input type="checkbox"></td>
                        <td><input type="file" class="form-control" name=""/></td>
                        <td>
                           <select class="form-select" name="">
                              <option value="Elevation">Elevation</option>
                              <option value="Video">Video</option>
                              <option value="Construction Updates">Construction Updates</option>
                              <option value="Neighbourhood">Neighbourhood</option>
                           </select>
                        </td>
                        <td><input type="text" class="form-control" name=""/></td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
                </section>
            </div>
	</div>
</div>
</div>
