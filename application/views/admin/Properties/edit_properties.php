<link href="<?= base_url(); ?>assets/plugins/datepicker/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
<style>
   .reraDetails{
   display:none;
   }
   #pty_flat,#pty_plot{
   display:none;
   }
</style>
<form method="POST" action="<?= base_url('admin/properties/create_property'); ?>" id="img-upload-form" enctype="multipart/form-data" accept-charset="utf-8">
   <div class="pg-content mb-4">
      <div class="row">
         <div class="col-xl-12 col-md-12">
            <div class="cbx">
               <div class="mb-4">
                  <label class="required">Property For</label>
                  <div class="d-flex flex-wrap bdgchkrdo">
                     <span class="chkrdobtn">
                     <input id="pvIWTSell" type="radio" name="pvIWT" value="Sell">
                     <label for="pvIWTSell">Sell</label>
                     </span>
                     <span class="chkrdobtn">
                     <input id="pvIWTRent" type="radio" name="pvIWT" value="Rent/Lease">
                     <label for="pvIWTRent">Rent/ Lease</label>
                     </span>
                     <span class="chkrdobtn">
                     <input id="pvIWTPG" type="radio" name="pvIWT" value="PG">
                     <label for="pvIWTPG">PG</label>
                     </span>
                  </div>
               </div>
               <div class="mb-4">
                  <label class="required">Property Type</label>
                  <div class="row">
                     <div class="col-xl-8 col-md-10 d-flex">
                        <div class="box2RB">
                           <span class="box2RBC">
                           <input type="radio" id="propResi" name="propertyType" checked  value="0"/>
                           <label for="propResi">Residential</label>
                           </span>
                           <span class="box2RBC">
                           <input type="radio" id="propComm" name="propertyType"  value="0"/>
                           <label for="propComm">Commercial</label>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="d-flex flex-wrap bdgchkrdo">
                     <span class="chkrdobtn">
                     <input id="pvAprt" type="radio" name="pvPTYP" value="0">
                     <label for="pvAprt">Apartment</label>
                     </span>
                     <span class="chkrdobtn">
                     <input id="pvIndHs" type="radio" name="pvPTYP" value="0">
                     <label for="pvIndHs">Independent House</label>
                     </span>
                     <span class="chkrdobtn">
                     <input id="pvIndFl" type="radio" name="pvPTYP" value="0">
                     <label for="pvIndFl">Independent Floor</label>
                     </span>
                     <span class="chkrdobtn">
                     <input id="pvVill" type="radio" name="pvPTYP" value="0">
                     <label for="pvVill">Villa</label>
                     </span>
                     <span class="chkrdobtn">
                     <input id="pvPlt" type="radio" name="pvPTYP" value="0">
                     <label for="pvPlt">Plot</label>
                     </span>
                     <span class="chkrdobtn">
                     <input id="pvAgLand" type="radio" name="pvPTYP" value="0">
                     <label for="pvAgLand">Agricultural Land</label>
                     </span>
                  </div>
               </div>
            </div>
            <div class="mb-4">
               <label class="required">Construction Status</label>
               <div class="d-flex flex-wrap bdgchkrdo">
                  <span class="chkrdobtn">
                  <input id="pvrtm" type="radio" name="pvCONSTS" value="0">
                  <label for="pvrtm">Ready to Move</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pvucont" type="radio" name="pvCONSTS" value="0">
                  <label for="pvucont">Under Construction</label>
                  </span>
               </div>
            </div>
            <div class="mb-4">
               <label class="required">BHK</label>
               <div class="d-flex flex-wrap bdgchkrdo">
                  <span class="chkrdobtn">
                  <input id="pv1BHK" type="radio" name="pvBHK" value="0">
                  <label for="pv1BHK">1 BHK</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pv2BHK" type="radio" name="pvBHK" value="0">
                  <label for="pv2BHK">2 BHK</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pv3BHK" type="radio" name="pvBHK" value="0">
                  <label for="pv3BHK">3 BHK</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pv3PBHK" type="radio" name="pvBHK" value="0">
                  <label for="pv3PBHK">3+ BHK</label>
                  </span>
               </div>
            </div>
            <div class="mb-4">
               <label class="required">Bathroom</label>
               <div class="d-flex flex-wrap bdgchkrdo">
                  <span class="chkrdobtn">
                  <input id="pv1bth" type="radio" name="pvBTH" value="0">
                  <label for="pv1bth">1</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pv2bth" type="radio" name="pvBTH" value="0">
                  <label for="pv2bth">2</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pv3bth" type="radio" name="pvBTH" value="0">
                  <label for="pv3bth">3</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pv3pbth" type="radio" name="pvBTH" value="0">
                  <label for="pv3pbth">3+</label>
                  </span>
               </div>
            </div>
            <div class="mb-4">
               <label class="required">Balcony</label>
               <div class="d-flex flex-wrap bdgchkrdo">
                  <span class="chkrdobtn">
                  <input id="pv1blcn" type="radio" name="pvBLCNY" value="0">
                  <label for="pv1blcn">1</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pv2blcn" type="radio" name="pvBLCNY" value="0">
                  <label for="pv2blcn">2</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pv3blcn" type="radio" name="pvBLCNY" value="0">
                  <label for="pv3blcn">3</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pv3pblcn" type="radio" name="pvBLCNY" value="0">
                  <label for="pv3pblcn">3+</label>
                  </span>
               </div>
            </div>
            <div class="mb-4">
               <label class="required">Furnish Type</label>
               <div class="d-flex flex-wrap bdgchkrdo">
                  <span class="chkrdobtn">
                  <input id="pvfllfrns" type="radio" name="pvFRNTYP" value="0">
                  <label for="pvfllfrns">Fully Furnished</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pvsmifrns" type="radio" name="pvFRNTYP" value="0">
                  <label for="pvsmifrns">Semi Furnished</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pvunfrns" type="radio" name="pvFRNTYP" value="0">
                  <label for="pvunfrns">Unfurnished</label>
                  </span>
               </div>
            </div>
            <div class="mb-4">
               <label class="required">Open Parking</label>
               <div class="d-flex flex-wrap bdgchkrdo">
                  <span class="chkrdobtn">
                  <input id="pv0opnprk" type="radio" name="pvOPNPRK" value="0">
                  <label for="pv0opnprk">0</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pv1opnprk" type="radio" name="pvOPNPRK" value="1">
                  <label for="pv1opnprk">1</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pv2opnprk" type="radio" name="pvOPNPRK" value="2">
                  <label for="pv2opnprk">2</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pv3opnprk" type="radio" name="pvOPNPRK" value="3">
                  <label for="pv3opnprk">3</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pv3popnprk" type="radio" name="pvOPNPRK" value="4">
                  <label for="pv3popnprk">3+</label>
                  </span>
               </div>
            </div>
            <div class="mb-4">
               <label class="required">Covered Parking</label>
               <div class="d-flex flex-wrap bdgchkrdo">
                  <span class="chkrdobtn">
                  <input id="pv0cvrprk" type="radio" name="pvCVRPRK" value="0">
                  <label for="pv0cvrprk">0</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pv1cvrprk" type="radio" name="pvCVRPRK" value="1">
                  <label for="pv1cvrprk">1</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pv2cvrprk" type="radio" name="pvCVRPRK" value="2">
                  <label for="pv2cvrprk">2</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pv3cvrprk" type="radio" name="pvCVRPRK" value="3">
                  <label for="pv3cvrprk">3</label>
                  </span>
                  <span class="chkrdobtn">
                  <input id="pv3pcvrprk" type="radio" name="pvCVRPRK" value="4">
                  <label for="pv3pcvrprk">3+</label>
                  </span>
               </div>
            </div>
            <div class="col-md-7 mb-3">
               <label class="required">Description/Details</label>
               <textarea type="text" class="form-control" name="project_name" autocomplete="Off"></textarea>
            </div>
            <div class="row">
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
                  <input type="hidden" name="country" id="country">
               </div>
            </div>
            <div class="row">
               <div class="col-6 mb-4">
                  <div class="form-floating pfff">
                     <input type="text" class="form-control" name="cost" id="cost" placeholder="Cost">
                     <label for="cost" class="required">Cost</label>
                  </div>
               </div>
               <div class="col-6 mb-4">
                  <div class="form-floating pfff">
                     <input type="text" class="form-control" name="maintenance_charges" id="maintenance_charges" placeholder="Maintenance Charges/ month">
                     <label for="maintenance_charges">Maintenance Charges/ month</label>
                  </div>
               </div>
               <div class="col-6 mb-4">
                  <div class="form-floating pfff">
                     <input type="text" class="form-control" name="builtup_area" id="builtup_area" placeholder="Built Up Area">
                     <label for="builtup_area" class="required">Built Up Area</label>
                  </div>
               </div>
               <div class="col-6 mb-4">
                  <div class="form-floating pfff">
                     <input type="text" class="form-control" name="carpet_area" id="carpet_area" placeholder="Carpet Area (Optional)">
                     <label for="carpet_area">Carpet Area (Optional)</label>
                  </div>
               </div>
            </div>
         </div>
         <div class="cmnttl position-relative">Amenities</div>
         <div class="row gx-3">
            <?php $amenities = _amenities(); foreach($amenities as $key=>$amenity){ ?>
            <div class="col-xl-2 col-md-2 mb-3">
               <div class="pv-amenits">
                  <input id="indoor_<?= $key+1;?>" type="checkbox" name="pvAMNTS[]" value="<?= $amenity->id; ?>">
                  <label for="indoor_<?= $key+1;?>">
                     <img src="<?= base_url('uploads/amenities/').$amenity->icon; ?>" class="img-fluid">
                     <div class="pv-amenitsn"><?= $amenity->name; ?></div>
                  </label>
               </div>
            </div>
            <?php } ?>
         </div>
      </div>
      <hr />
      <div class="cmnttl position-relative">Site Layout</div>
      <div class="col-6">
         <div class="col-md-12 mb-3">
            <label class="required">Upload Image</label>
            <input type="file" class="form-control" name="site_layout"/>
         </div>
      </div>
      <div class="cmnttl position-relative">Payment Option</div>
      <div class="col-6">
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
      <div class="cmnttl position-relative">Certifications</div>
      <div class="row">
         <div class="col-xl-3 col-md-4">
            <span class="form-check">
            <input class="form-check-input" name="rera_approved" type="checkbox" id="rera_approved" value="1">
            <span class="form-check-label">RERA Approved</span>
            </span>
         </div>
         <div class="col-xl-3 col-md-4 mb-3 reraDetails">
            <label class="required">RERA Registration Number</label>
            <input type="text" class="form-control" name="rera_registrationNumber" id="rera_registrationNumber"/>
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
</form>
<script src="<?= base_url(); ?>assets/js/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datepicker/js/tempusdominus-bootstrap-4.min.js"></script>
<!--<script src="<?= base_url(); ?>assets/js/custom.js"></script>-->
<script type="text/javascript">
   var dataURL = $('base').attr("href");
     $(function () {
         $('#dtpicker').datetimepicker({
             format: 'DD-MMM-YYYY'
         });
         $('#project_launch_date').datetimepicker({
             format: 'DD-MMM-YYYY'
         });
     });
     
     
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
     
     function isNumberKey(txt, evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode == 46) {
          //Check if the text already contains the . character
          if (txt.value.indexOf('.') === -1) {
            return true;
          } else {
            return false;
          }
        } else {
          if (charCode > 31 &&
            (charCode < 48 || charCode > 57))
            return false;
        }
        return true;
      }
     $('#rera_approved').change(function(){
     if ($(this).is(":checked")){
     $('.reraDetails').css('display','block');
      }else{
     $('.reraDetails').css('display','none');
     }
     });     
</SCRIPT>