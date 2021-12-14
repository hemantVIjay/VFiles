<link href="<?= base_url(); ?>assets/plugins/rangeSlider/ion.rangeSlider.min.css" rel="stylesheet">
<div class="container">
   <div class="row justify-content-center mt-4 mb-4">
      <!--<div class="col-xl-3 col-md-4 col-sm-6">
         <div class="card pveq-card border-0 shadow">
         	<div class="p-4">
         		<h4 class="cmn-title mb-3">Applied Filters</h4>
         	</div>
         </div>
         </div>-->
      <div class="col-xl-11 col-md-11 col-sm-12">
         <div class="text-end mb-1">
            <button class="btnReset"><i class="bi bi-arrow-counterclockwise me-1"></i>Reset</button>
         </div>
         <div class="pvFltrBar megamenu">
            <div class="row bdra align-items-center">
               <div class="col-xl-2 dropdown spdropdown">
                  <a href="javascript:;" class="pvfbxb d-flex justify-content-between dropdown-toggle" id="ptypeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="pvfbx">
                  Property Type
                  </span>
                  </a>
                  <ul class="dropdown-menu ddm" aria-labelledby="ptypeDropdown">
                     <?php if(isset($_GET['type'])){ echo _checkCategories($_GET['type']); }else{ echo _checkCategories('');} ?>
                  </ul>
               </div>
               <div class="col-xl-2 dropdown spdropdown">
                  <a href="javascript:;" class="pvfbxb d-flex justify-content-between dropdown-toggle" id="bhkteDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="pvfbx">
                  BHK Type
                  </span>
                  </a>
                  <ul class="dropdown-menu ddm" aria-labelledby="bhkteDropdown">
                     <li>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="pv1BHK">
                           <label class="form-check-label" for="pv1BHK">
                           1 BHK
                           </label>
                        </div>
                     </li>
                     <li>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="pv2BHK">
                           <label class="form-check-label" for="pv2BHK">
                           2 BHK
                           </label>
                        </div>
                     </li>
                     <li>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="pv3BHK">
                           <label class="form-check-label" for="pv3BHK">
                           3 BHK
                           </label>
                        </div>
                     </li>
                     <li>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="pv3plusBHK">
                           <label class="form-check-label" for="pv3plusBHK">
                           3+ BHK
                           </label>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="col-xl-2 dropdown spdropdown">
                  <a href="javascript:;" class="pvfbxb d-flex justify-content-between dropdown-toggle" id="bhkteDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="pvfbx">
                  Budget
                  </span>
                  </a>
                  <div class="dropdown-menu ddm mnwd" aria-labelledby="bhkteDropdown">
                     <div class="rngSldr">
                        <input type="text" id="example_id" name="example_name" value="" />
                     </div>
                  </div>
               </div>
               <!--<div class="col-xl-2 dropdown spdropdown">
                  <a href="javascript:;" class="pvfbxb d-flex justify-content-between dropdown-toggle" id="bhkteDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="pvfbx">
                  Project Status
                  </span>
                  </a>
                  <ul class="dropdown-menu ddm" aria-labelledby="bhkteDropdown">
                     <li>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="pvLSoon">
                           <label class="form-check-label" for="pvLSoon">
                           Launching Soon
                           </label>
                        </div>
                     </li>
                     <li>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="pvNLaunch">
                           <label class="form-check-label" for="pvNLaunch">
                           New Launch
                           </label>
                        </div>
                     </li>
                     <li>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="pvUConst">
                           <label class="form-check-label" for="pvUConst">
                           Under Construction
                           </label>
                        </div>
                     </li>
                     <li>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="pvRtMove">
                           <label class="form-check-label" for="pvRtMove">
                           Ready to Move In
                           </label>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="col-xl-2 dropdown spdropdown">
                  <a href="javascript:;" class="pvfbxb d-flex justify-content-between dropdown-toggle" id="bhkteDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="pvfbx">
                  Localities
                  </span>
                  </a>
                  <ul class="dropdown-menu ddm" aria-labelledby="bhkteDropdown">
                     <li>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="pvLNoida">
                           <label class="form-check-label" for="pvLNoida">
                           Noida
                           </label>
                        </div>
                     </li>
                     <li>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="pvLGNoida">
                           <label class="form-check-label" for="pvLGNoida">
                           Gr. Noida
                           </label>
                        </div>
                     </li>
                     <li>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="pvYExpress">
                           <label class="form-check-label" for="pvYExpress">
                           Yamuna Expressway
                           </label>
                        </div>
                     </li>
                     <li>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="pvGhaziabad">
                           <label class="form-check-label" for="pvGhaziabad">
                           Ghaziabad
                           </label>
                        </div>
                     </li>
                     <li>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="pvDelhi">
                           <label class="form-check-label" for="pvDelhi">
                           Delhi
                           </label>
                        </div>
                     </li>
                     <li>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="pvGurgaon">
                           <label class="form-check-label" for="pvGurgaon">
                           Gurgaon
                           </label>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="col-xl-2 dropdown spdropdown">
                  <a href="javascript:;" class="pvfbxb d-flex justify-content-between dropdown-toggle" id="bhkteDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="pvfbx">
                  Possession Status
                  </span>
                  </a>
                  <ul class="dropdown-menu ddm" aria-labelledby="bhkteDropdown">
                     <li>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="pv3Month">
                           <label class="form-check-label" for="pv3Month">
                           In 3 months
                           </label>
                        </div>
                     </li>
                     <li>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="pv6Month">
                           <label class="form-check-label" for="pv6Month">
                           In 6 months
                           </label>
                        </div>
                     </li>
                     <li>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="pv1Yr">
                           <label class="form-check-label" for="pv1Yr">
                           In 1 year
                           </label>
                        </div>
                     </li>
                     <li>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="pv2Yr">
                           <label class="form-check-label" for="pv2Yr">
                           In 2 years
                           </label>
                        </div>
                     </li>
                     <li>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="pv2PYr">
                           <label class="form-check-label" for="pv2PYr">
                           In 2+ years
                           </label>
                        </div>
                     </li>
                  </ul>
               </div>-->
			   <div class="col-xl-6" style="text-align:right;">
			   <button type="button" class="btn btn-primary" onclick="search_properties();">Search</button>
			   </div>
            </div>
         </div>
         <div class="pv-breadcrumb mt-3">
            <a href="javascript:;">Home</a>
            <a href="javascript:;">Property in <?= ucfirst($city); ?></a>
            <?php if(isset($s_content['location'])){ ?>
			<a href="javascript:;" class="current">Property in <?= ucfirst($s_content['location']); ?></a>
			<?php } ?>
         </div>
		 <?php if(!empty($listings)){ $lcount = count($listings); }else{ $lcount = 0; } ?>
         <?php if(!empty($listings)){ if(isset($s_content['location'])){?><h3 class="pvSrchTitle">Properties in <?= ucfirst($s_content['location']); ?> <span>(<?= $lcount; ?> Properties)</span></h3><?php } }?>
         <div class="pvpts-list">
            <?php if(!empty($listings)){ foreach($listings as $listing){ ?>
			<div class="card mb-3">
               <div class="row g-0">
                  <div class="col-md-4">
                     <div class="card-inner">
                        <div class="card-img rounded-top-right-0">
                           <img src="<?= base_url(); ?>assets/images/cities/ghaziabad.jpg" class="img-fluid">
                        </div>
                        <a href="javascript:;" class="card-img-overlay">
                        <span class="aprvl-badge"><i class="bi bi-check-circle-fill"></i>RERA Approved</span>
                        <span class="prop-snfc">Posted : 7 Sep. 2021</span>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="card-body">
                        <h5 class="pv-ptttl mb-1"><a href="javascript:;"><?= $listing->property_name; ?></a></h5>
                        <?php if($listing->builder_id!=''&& $listing->builder_id!='0'){ $builder = _builderDetails($listing->builder_id); print_r($builder); ?>
			            <h6 class="pvpd-py">By<span> <?=$builder->builder_name;?></span></h6><?php } ?>
                        <h6 class="pvpd-locate mb-3"><?= $listing->property_address; ?></h6>
                        <div class="row mb-3">
                           <div class="col-xl-3 col-4">
                              <h5 class="pv-lprc">₹ <?= no_to_words($listing->cost); ?></h5>
                              <?php $rate = ($listing->cost/$listing->builtup_area); ?>
							  <div class="pv-lprc-sml">₹ <?php echo number_format($rate); ?> per sq.ft.</div>
                           </div>
                           <div class="col-xl-3 col-4">
                              <h5 class="pv-lprc dropdown">
                                 <?= round($listing->builtup_area); ?><span class="ms-1 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">sq.ft.</span><!--
                                 <ul class="dropdown-menu dmbody shadow" aria-labelledby="navbarDropdown">
                                    <li>72 Sq. Meters</li>
                                    <li>90 Sq. Yards</li>
                                    <li>0.06 Acres</li>
                                    <li>0.09 Bigha</li>
                                    <li>0.045 Hectares</li>
                                 </ul>-->
                              </h5>
                              <div class="pv-lprc-sml">Super built-up Area</div>
                           </div>
                           <div class="col-xl-3 col-4">
                              <h5 class="pv-lprc"><?= $listing->bd_name; ?></h5>
                              <div class="pv-lprc-sml"><?= $listing->bt_name; ?> Bath, <?= $listing->bl_name; ?> R Balcony</div>
                           </div>
                        </div>
                        <div class="mb-4">
                           <span class="badge badge-secondary"><?= $listing->cs_name; ?></span>
                           <span class="badge badge-secondary ms-1"><?= $listing->lt_name; ?></span>
                        </div>
                        <a href="<?php echo base_url();?>properties-details/<?= $listing->slug; ?>---<?= $listing->id; ?>" class="rmLink" target="_blank">Read More<i class="bi bi-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="spcr-bds"></div>
               <div class="py-2 px-3">
                  <div class="row align-items-center">
                     <div class="col-6">
                        <span class="pvrrrg"><i class="bi bi-check-circle-fill me-2"></i>RERA ID : UPRERAPRJ5112</span>
                     </div>
                     <div class="col-6 text-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pvGetCallback">Get Current Offers</button>
                     </div>
                  </div>
               </div>
            </div>
			<?php } }else{ ?>
			<h3 class="pvSrchTitle text-center"><span>No Properties in Greater Noida Extension</span></h3>
			<?php } ?>
         </div>
      </div>
   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="pvGetCallback" tabindex="-1" aria-labelledby="pvGetCallbackLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
         <div class="row g-0">
            <div class="col-md-7">
               <img src="<?= base_url(); ?>assets/images/offer-banner.jpg" class="img-fluid rounded-start">
            </div>
            <div class="col-md-5">
               <div class="p-4">
                  <div class="d-flex justify-content-between">
                     <h4 class="cmn-title mb-4">Contact with us</h4>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="mb-3">
                     <label class="required">Full Name</label>
                     <input type="text" class="form-control" placeholder="Enter your name">
                  </div>
                  <div class="mb-3">
                     <label class="required">Phone Number</label>
                     <input type="text" class="form-control" placeholder="Enter your phone no.">
                  </div>
                  <div class="mb-3">
                     <label class="required">Email ID</label>
                     <input type="text" class="form-control" placeholder="Enter email id">
                  </div>
                  <div class="mb-3 d-flex">
                     <input type="checkbox" class="cks" checked="">
                     <span class="pvsml ms-2">I Agree to Propvenue's <a href="javascript:;">Terms of Use</a></span>
                  </div>
                  <div class="mb-3 d-flex">
                     <input type="checkbox" class="cks">
                     <span class="pvsml ms-2">I am interested in Home Loans</span>
                  </div>
                  <div class="d-grid gap-2">
                     <button class="btn btn-primary" type="button">Get Call Back</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="<?= base_url(); ?>assets/plugins/rangeslider/ion.rangeSlider.min.js"></script>
<script>
var baseUrl=$('base').attr("href");
   $('.dropdown.spdropdown .dropdown-menu').click(function(e) {
       e.stopPropagation();
   });   
   	var custom_values = [1000, 10000, 100000, 1000000, 10000000];
       
       // be careful! FROM and TO should be index of values array
       var my_from = custom_values.indexOf(1000);
       var my_to = custom_values.indexOf(1000000);
       
       $("#example_id").ionRangeSlider({
           type: "double",
           grid: true,
           from: my_from,
           to: my_to,
           values: custom_values,
   		   prefix: "₹",
   		   step: 1000,
           prettify_enabled: true,
           prettify_separator: ","
       });
       
      function search_properties(){
	   var slider = $("#example_id").data("ionRangeSlider");
	   var from = slider.result.from;
	   var to = slider.result.to;
	   return false;
	   var main = $('select[name="cities"]').val();
	   var type = $('input[name="type"]:checked').val();
	   var location = $('input[name="search"]').val();
	   var content = $('input[name="content"]').val();
	   if(type==undefined){
		 type = '';
	   }if(location==undefined){
		 location = '';
	   }if(content==undefined){
		 content = '';
	   }
       window.location.href = baseUrl + 'search/properties/'+main+'?location='+location+'&type='+type+'&content='+content;
   }
</script>