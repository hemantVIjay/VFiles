<style>
.page-loader {
    background:rgb(255 255 255 / 60%);
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: 99999;
}
.ripple-loader {
    position: absolute;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 43%;
    width: 64px;
    height: 64px;
}
.errors{
	color: #f00;
    font-weight: 900;
    font-style: italic;
    font-size: 10px;
}
</style>
<div class="card pveq-card border-0 shadow" id="eqbx">
			      <!-- *****PAGE LOADER*****  -->
      <div class="page-loader" id="page-loader" style="display:none;">
      <div class="ripple-loader">
	   <img src="<?= base_url('assets/images/loader.svg'); ?>">
      </div>
      </div>
               <form name="call_back" id="call_back" onsubmit="return save_enquiries(this);" method="POST">
			   <div class="p-4">
                  <h4 class="cmn-title mb-3">Contact with us</h4>
                  <div class="mb-3">
                     <label class="required">Full Name</label>
                     <input type="text" class="form-control" placeholder="Enter your name" name="full_name" id="full_name"/>
					 <span class="errors" id="e_full_name"></span>
                  </div>
                  <div class="mb-3">
                     <label class="required">Phone Number</label>
                     <input type="text" class="form-control" placeholder="Enter your phone no." name="phone" id="phone"/>
					 <span class="errors" id="e_phone"></span>
                  </div>
                  <div class="mb-3">
                     <label class="required">Email ID</label>
                     <input type="text" class="form-control" placeholder="Enter email id" name="email" id="email"/>
					 <span class="errors" id="e_email"></span>
                  </div>
                  <div class="mb-3 d-flex">
                     <input type="checkbox" class="cks" checked name="terms" id="terms" value="1" />
                     <span class="pvsml ms-2">I Agree to Propvenue's <a href="javascript:;">Terms of Use</a></span>
					 <span class="errors" id="e_terms"></span>
                  </div>
                  <div class="mb-3 d-flex">
                     <input type="checkbox" class="cks" name="loans" id="loans" value="1"/>
                     <span class="pvsml ms-2">I am interested in Home Loans</span>
                  </div>
                  <div class="d-grid gap-2">
                     <button class="btn btn-primary" type="submit" name="submit">Get Call Back</button>
                  </div>
               </div>
			   </form>
            </div>