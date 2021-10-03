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
                <h2>Basic Info</h2>
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
                    <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac ligula elementum pellentesque. 
                        In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum 
                        dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien a diam adipiscing consectetur. 
                        In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis iaculis nec, malesuada a diam. 
                        Donec non pulvinar urna. Aliquam id velit lacus.</p>
                </section>

                <h2>Property Profile</h2>
                <section>
                    <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum dapibus. Fusce eros justo, 
                        pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat. 
                        Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris 
                        venenatis.</p>
                </section>

                <h2>Photo</h2>
                <section>
                    <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor. 
                        Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae. 
                        Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.</p>
                </section>
            </div>
	</div>
</div>
</div>
