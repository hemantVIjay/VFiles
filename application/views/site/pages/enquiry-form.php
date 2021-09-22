            <div class="card pveq-card border-0 shadow" id="eqbx">
               <form action="<?= base_url('pages/post_enquiry');?>" method="POST" name="call_back" id="call_back" onsubmit="return validate();">
			   <div class="p-4">
                  <h4 class="cmn-title mb-3">Contact with us</h4>
                  <div class="mb-3">
                     <label class="required">Full Name</label>
                     <input type="text" class="form-control" placeholder="Enter your name" name="full_name" id="full_name"/>
                  </div>
                  <div class="mb-3">
                     <label class="required">Phone Number</label>
                     <input type="text" class="form-control" placeholder="Enter your phone no." name="phone" id="phone"/>
                  </div>
                  <div class="mb-3">
                     <label class="required">Email ID</label>
                     <input type="text" class="form-control" placeholder="Enter email id" name="email" id="email"/>
                  </div>
                  <div class="mb-3 d-flex">
                     <input type="checkbox" class="cks" checked name="terms" id="terms" value="1" />
                     <span class="pvsml ms-2">I Agree to Propvenue's <a href="javascript:;">Terms of Use</a></span>
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