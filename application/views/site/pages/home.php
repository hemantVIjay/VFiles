<link href="<?= base_url(); ?>assets/plugins/jqueryui/css/jquery-ui.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/plugins/owlcarousel/css/owl.carousel.min.css" rel="stylesheet">
<style>
.ui-menu .ui-menu-item-wrapper {
    padding: 10px 5px;
}
.suggests{
float: right;
font-size: 12px;
font-weight: 700;
color: #b5aeae;
position: relative;
bottom: -5px;
}
</style>
<section class="section top-area">
<div class="container text-center">    
  <div class="row justify-content-center">
    <div class="col-xl-8 col-lg-9 col-md-10 col-sm-11">
      <h1 class="tb-title">Beautiful spaces in the best places</h1>
	  <form name="search_properties" id="search_properties" method="POST" action="">
	  <div class="srch-box mt-5 mb-5">
		<div class="d-flex flex-wrap fltrRDO">
           <?php echo _categories(''); ?>                      
		</div>
		<div class="input-group input-group-lg mb-2">
			<select class="form-select form-select-lg mx-wd-150" id="inputGroupSelect01" name="cities">
                     <?php echo _topCities(''); ?>
                  </select>
                  <input type="text" class="form-control form-control-lg autocomplete" placeholder="Search your property here..." name="search">
                  <button class="btn btn-lg btn-primary" type="button" id="hmain_search">Search</button>
				  </div>
				  <input type="hidden" id="search" name="content">	  
				  </form>
		
	  </div>
    </div>
  </div>
</div>
</section>
<section class="section prop-loc-bys">
   <div class="container">
      <h2 class="cmn-title mb-3">Explore Property in India</h2>
      <div id="#cityCarousel" class="owl-carousel owl-theme expprty mb-4">
         <div class="item">
            <div class="card">
               <div class="card-img rounded">
                  <img src="<?= base_url(); ?>assets/images/explore-property/flats.jpg" class="img-fluid rounded">
               </div>
               <a href="javascript:;" class="card-img-overlay"><span class="ct-title"><span class="xplpcnt">2750</span><br />Flats</span></a>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-img rounded">
                  <img src="<?= base_url(); ?>assets/images/explore-property/plots.jpg" class="img-fluid rounded">
               </div>
               <a href="javascript:;" class="card-img-overlay"><span class="ct-title"><span class="xplpcnt">1230</span><br />Residential Plots</span></a>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-img rounded">
                  <img src="<?= base_url(); ?>assets/images/explore-property/villas.jpg" class="img-fluid rounded">
               </div>
               <a href="javascript:;" class="card-img-overlay"><span class="ct-title"><span class="xplpcnt">1250</span><br />House & Villas</span></a>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-img rounded">
                  <img src="<?= base_url(); ?>assets/images/explore-property/builder-floor.jpg" class="img-fluid rounded">
               </div>
               <a href="javascript:;" class="card-img-overlay"><span class="ct-title"><span class="xplpcnt">540</span><br />Builder Floor</span></a>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-img rounded">
                  <img src="<?= base_url(); ?>assets/images/explore-property/farm-house.jpg" class="img-fluid rounded">
               </div>
               <a href="javascript:;" class="card-img-overlay"><span class="ct-title"><span class="xplpcnt">80</span><br />Farm House</span></a>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-img rounded">
                  <img src="<?= base_url(); ?>assets/images/explore-property/penthouse.jpg" class="img-fluid rounded">
               </div>
               <div class="card-img-overlay">
                  <div class="ct-title"><span class="xplpcnt">42</span><br />Penthouse</div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-img rounded">
                  <img src="<?= base_url(); ?>assets/images/explore-property/studio-apartment.jpg" class="img-fluid rounded">
               </div>
               <div class="card-img-overlay">
                  <div class="ct-title"><span class="xplpcnt">10</span><br />Studio Apartment</div>
               </div>
            </div>
         </div>
		 <div class="item">
            <div class="card">
               <div class="card-img rounded">
                  <img src="<?= base_url(); ?>assets/images/explore-property/office-space.jpg" class="img-fluid rounded">
               </div>
               <a href="javascript:;" class="card-img-overlay"><span class="ct-title"><span class="xplpcnt">750</span><br />Office Spaces</span></a>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-img rounded">
                  <img src="<?= base_url(); ?>assets/images/explore-property/commercial-shop.jpg" class="img-fluid rounded">
               </div>
               <a href="javascript:;" class="card-img-overlay"><span class="ct-title"><span class="xplpcnt">230</span><br />Commercial Shops</span></a>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-img rounded">
                  <img src="<?= base_url(); ?>assets/images/explore-property/commercial-land.jpg" class="img-fluid rounded">
               </div>
               <a href="javascript:;" class="card-img-overlay"><span class="ct-title"><span class="xplpcnt">310</span><br />Commercial Land</span></a>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-img rounded">
                  <img src="<?= base_url(); ?>assets/images/explore-property/factory.jpg" class="img-fluid rounded">
               </div>
               <a href="javascript:;" class="card-img-overlay"><span class="ct-title"><span class="xplpcnt">40</span><br />Factory</span></a>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-img rounded">
                  <img src="<?= base_url(); ?>assets/images/explore-property/industrial-land.jpg" class="img-fluid rounded">
               </div>
               <a href="javascript:;" class="card-img-overlay"><span class="ct-title"><span class="xplpcnt">73</span><br />Industrial Land</span></a>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-img rounded">
                  <img src="<?= base_url(); ?>assets/images/explore-property/business-center.jpg" class="img-fluid rounded">
               </div>
               <div class="card-img-overlay">
                  <div class="ct-title"><span class="xplpcnt">42</span><br />Business Center</div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-img rounded">
                  <img src="<?= base_url(); ?>assets/images/explore-property/showroom.jpg" class="img-fluid rounded">
               </div>
               <div class="card-img-overlay">
                  <div class="ct-title"><span class="xplpcnt">10</span><br />Showrooms</div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-img rounded">
                  <img src="<?= base_url(); ?>assets/images/explore-property/hotel.jpg" class="img-fluid rounded">
               </div>
               <div class="card-img-overlay">
                  <div class="ct-title"><span class="xplpcnt">10</span><br />Hotels</div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-img rounded">
                  <img src="<?= base_url(); ?>assets/images/explore-property/warehouse.jpg" class="img-fluid rounded">
               </div>
               <div class="card-img-overlay">
                  <div class="ct-title"><span class="xplpcnt">10</span><br />Warehouse</div>
               </div>
            </div>
         </div>
      </div>
      
   </div>
</section>
<section class="section fndhm">
   <div class="container">
      <div class="row justify-content-center mt-3 mb-3">
         <div class="col-xl-6 col-lg-7 col-md-8 text-center">
            <h2 class="pg-title-big">Find your home with <span class="text-primary">Propvenues!</span></h2>
            <p class="text-hdln">Just regist to be our member, let us know your full information and then buy your
               home to the most profitable budget!
            </p>
         </div>
      </div>
   </div>
</section>
<section class="section prop-loc-bys">
   <div class="container">
      <h2 class="cmn-title mb-3">Popular Residential Projects</h2>
      <div id="flatCarousel" class="owl-carousel owl-theme">
         <div class="item">
            <div class="card">
               <div class="card-inner">
                  <div class="card-img">
                     <img src="<?= base_url(); ?>assets/images/plots/greater-noida-west.jpg" class="img-fluid">
                  </div>
                  <div class="card-img-overlay">
                     <span class="aprvl-badge"><i class="bi bi-check-circle-fill"></i>RERA</span>
                     <div class="prop-snfc">Possession from Mar 2024</div>
                  </div>
               </div>
               <div class="card-body">
                  <h5 class="pvpr-name">Godrej Nurture Phase 1</h5>
                  <div class="bldr-name mb-1">by Prateek Group</div>
                  <div class="pvpr-loc mb-2">Sector- 151, Noida</div>
                  <div class="d-flex justify-content-between">
                     <div class="pvpr-bhk">2,3,4 BHK Flats</div>
                     <div class="pvpr-prc">₹ 1.88 - 5.08 Cr.</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-inner">
                  <div class="card-img">
                     <img src="<?= base_url(); ?>assets/images/cities/greater-noida.jpg" class="img-fluid">
                  </div>
                  <div class="card-img-overlay">
                     <span class="aprvl-badge"><i class="bi bi-check-circle-fill"></i>RERA</span>
                     <div class="prop-snfc">Possession from Mar 2024</div>
                  </div>
               </div>
               <div class="card-body">
                  <h5 class="pvpr-name">Godrej Nurture Phase 1</h5>
                  <div class="bldr-name mb-1">by Prateek Group</div>
                  <div class="pvpr-loc mb-2">Sector- 151, Noida</div>
                  <div class="d-flex justify-content-between">
                     <div class="pvpr-bhk">2,3,4 BHK Flats</div>
                     <div class="pvpr-prc">₹ 1.88 - 5.08 Cr.</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-inner">
                  <div class="card-img">
                     <img src="<?= base_url(); ?>assets/images/cities/ghaziabad.jpg" class="img-fluid">
                  </div>
                  <div class="card-img-overlay">
                     <span class="aprvl-badge"><i class="bi bi-check-circle-fill"></i>RERA</span>
                     <div class="prop-snfc">Possession from Mar 2024</div>
                  </div>
               </div>
               <div class="card-body">
                  <h5 class="pvpr-name">Godrej Nurture Phase 1</h5>
                  <div class="bldr-name mb-1">by Prateek Group</div>
                  <div class="pvpr-loc mb-2">Sector- 151, Noida</div>
                  <div class="d-flex justify-content-between">
                     <div class="pvpr-bhk">2,3,4 BHK Flats</div>
                     <div class="pvpr-prc">₹ 1.88 - 5.08 Cr.</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-inner">
                  <div class="card-img">
                     <img src="<?= base_url(); ?>assets/images/cities/delhi.jpg" class="img-fluid">
                  </div>
                  <div class="card-img-overlay">
                     <span class="aprvl-badge"><i class="bi bi-check-circle-fill"></i>RERA</span>
                     <div class="prop-snfc">Possession from Mar 2024</div>
                  </div>
               </div>
               <div class="card-body">
                  <h5 class="pvpr-name">Godrej Nurture Phase 1</h5>
                  <div class="bldr-name mb-1">by Prateek Group</div>
                  <div class="pvpr-loc mb-2">Sector- 151, Noida</div>
                  <div class="d-flex justify-content-between">
                     <div class="pvpr-bhk">2,3,4 BHK Flats</div>
                     <div class="pvpr-prc">₹ 1.88 - 5.08 Cr.</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-inner">
                  <div class="card-img">
                     <img src="<?= base_url(); ?>assets/images/cities/gurgaon.jpg" class="img-fluid">
                  </div>
                  <div class="card-img-overlay">
                     <span class="aprvl-badge"><i class="bi bi-check-circle-fill"></i>RERA</span>
                     <div class="prop-snfc">Possession from Mar 2024</div>
                  </div>
               </div>
               <div class="card-body">
                  <h5 class="pvpr-name">Godrej Nurture Phase 1</h5>
                  <div class="bldr-name mb-1">by Prateek Group</div>
                  <div class="pvpr-loc mb-2">Sector- 151, Noida</div>
                  <div class="d-flex justify-content-between">
                     <div class="pvpr-bhk">2,3,4 BHK Flats</div>
                     <div class="pvpr-prc">₹ 1.88 - 5.08 Cr.</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-inner">
                  <div class="card-img">
                     <img src="<?= base_url(); ?>assets/images/cities/faridabad.jpg" class="img-fluid">
                  </div>
                  <div class="card-img-overlay">
                     <span class="aprvl-badge"><i class="bi bi-check-circle-fill"></i>RERA</span>
                     <div class="prop-snfc">Possession from Mar 2024</div>
                  </div>
               </div>
               <div class="card-body">
                  <h5 class="pvpr-name">Godrej Nurture Phase 1</h5>
                  <div class="bldr-name mb-1">by Prateek Group</div>
                  <div class="pvpr-loc mb-2">Sector- 151, Noida</div>
                  <div class="d-flex justify-content-between">
                     <div class="pvpr-bhk">2,3,4 BHK Flats</div>
                     <div class="pvpr-prc">₹ 1.88 - 5.08 Cr.</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
 
	  </div>
	 </section>
	  
	  <section class="section bdrsec">
   <div class="container">
      <div class="row justify-content-center mt-3 mb-4">
         <div class="col-xl-6 col-lg-7 col-md-8 text-center">
            <h2 class="pg-title-big">Popular  <span class="text-primary">builders!</span></h2>
         </div>
      </div>
	  
	  <div class="row justify-content-center">
         <div class="col-xl-10 col-lg-11 col-md-12">
			
			<div id="#builderCarausel" class="owl-carousel owl-theme bldrc mb-4">
				 
				 <div class="item">
					<div class="card bldc mb-3">
						<div class="card-body d-flex">
							<div class="bldpic">
								<img src="<?= base_url(); ?>assets/images/builders/Jaypee-Group-Logo.png" />
							</div>
							<div>
								<a class="bldnme" href="javascript:;">Jaypee Greens</a>
								<div class="d-flex blddth">
									<span class="me-3">Exp: <strong>21 Years</strong></span>  |  <span class="me-3 ms-3">Total Projects: <strong>72</strong></span>
								</div>
							</div>
						</div>
					</div>
					<div class="card bldc">
						<div class="card-body d-flex">
							<div class="bldpic">
								<img src="<?= base_url(); ?>assets/images/builders/ats-Logo.png" />
							</div>
							<div>
								<a class="bldnme" href="javascript:;">ATS Group</a>
								<div class="d-flex blddth">
									<span class="me-3">Exp: <strong>21 Years</strong></span>  |  <span class="me-3 ms-3">Total Projects: <strong>72</strong></span>
								</div>
							</div>
						</div>
					</div>
				 </div>
				 <div class="item">
					<div class="card bldc mb-3">
						<div class="card-body d-flex">
							<div class="bldpic">
								<img src="<?= base_url(); ?>assets/images/builders/prateek-logo.png" />
							</div>
							<div>
								<a class="bldnme" href="javascript:;">Prateek Group</a>
								<div class="d-flex blddth">
									<span class="me-3">Exp: <strong>21 Years</strong></span>  |  <span class="me-3 ms-3">Total Projects: <strong>72</strong></span>
								</div>
							</div>
						</div>
					</div>
					<div class="card bldc">
						<div class="card-body d-flex">
							<div class="bldpic">
								<img src="<?= base_url(); ?>assets/images/builders/ajnara.png" />
							</div>
							<div>
								<a class="bldnme" href="javascript:;">Ajnara India</a>
								<div class="d-flex blddth">
									<span class="me-3">Exp: <strong>21 Years</strong></span>  |  <span class="me-3 ms-3">Total Projects: <strong>72</strong></span>
								</div>
							</div>
						</div>
					</div>
				 </div>
				 
				 <div class="item">
					<div class="card bldc mb-3">
						<div class="card-body d-flex">
							<div class="bldpic">
								<img src="<?= base_url(); ?>assets/images/builders/mahagun-logo.png" />
							</div>
							<div>
								<a class="bldnme" href="javascript:;">Mahagun Group</a>
								<div class="d-flex blddth">
									<span class="me-3">Exp: <strong>21 Years</strong></span>  |  <span class="me-3 ms-3">Total Projects: <strong>72</strong></span>
								</div>
							</div>
						</div>
					</div>
					<div class="card bldc">
						<div class="card-body d-flex">
							<div class="bldpic">
								<img src="<?= base_url(); ?>assets/images/builders/gulshan-homz-logo.png" />
							</div>
							<div>
								<a class="bldnme" href="javascript:;">Gulshan Homz</a>
								<div class="d-flex blddth">
									<span class="me-3">Exp: <strong>21 Years</strong></span>  |  <span class="me-3 ms-3">Total Projects: <strong>72</strong></span>
								</div>
							</div>
						</div>
					</div>
				 </div>
		 
			</div>

         </div>
      </div>
	  
   </div>
</section>
	  
	  <section class="section prop-loc-bys">
   <div class="container">
      <h2 class="cmn-title mb-3 mt-4">Popular Commercial Properties</h2>
      <div id="commercialCarousel" class="owl-carousel owl-theme">
         <div class="item">
            <div class="card">
               <div class="card-inner">
                  <div class="card-img">
                     <img src="<?= base_url(); ?>assets/images/cities/noida.jpg" class="img-fluid">
                  </div>
                  <div class="card-img-overlay">
                     <span class="aprvl-badge"><i class="bi bi-check-circle-fill"></i>RERA</span>
                     <div class="prop-snfc">Possession from Mar 2024</div>
                  </div>
               </div>
               <div class="card-body">
                  <h5 class="pvpr-name">Godrej Nurture Phase 1</h5>
                  <div class="bldr-name mb-1">by Prateek Group</div>
                  <div class="pvpr-loc mb-2">Sector- 151, Noida</div>
                  <div class="d-flex justify-content-between">
                     <div class="pvpr-bhk">2,3,4 BHK Flats</div>
                     <div class="pvpr-prc">₹ 1.88 - 5.08 Cr.</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-inner">
                  <div class="card-img">
                     <img src="<?= base_url(); ?>assets/images/cities/greater-noida.jpg" class="img-fluid">
                  </div>
                  <div class="card-img-overlay">
                     <span class="aprvl-badge"><i class="bi bi-check-circle-fill"></i>RERA</span>
                     <div class="prop-snfc">Possession from Mar 2024</div>
                  </div>
               </div>
               <div class="card-body">
                  <h5 class="pvpr-name">Godrej Nurture Phase 1</h5>
                  <div class="bldr-name mb-1">by Prateek Group</div>
                  <div class="pvpr-loc mb-2">Sector- 151, Noida</div>
                  <div class="d-flex justify-content-between">
                     <div class="pvpr-bhk">2,3,4 BHK Flats</div>
                     <div class="pvpr-prc">₹ 1.88 - 5.08 Cr.</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-inner">
                  <div class="card-img">
                     <img src="<?= base_url(); ?>assets/images/cities/ghaziabad.jpg" class="img-fluid">
                  </div>
                  <div class="card-img-overlay">
                     <span class="aprvl-badge"><i class="bi bi-check-circle-fill"></i>RERA</span>
                     <div class="prop-snfc">Possession from Mar 2024</div>
                  </div>
               </div>
               <div class="card-body">
                  <h5 class="pvpr-name">Godrej Nurture Phase 1</h5>
                  <div class="bldr-name mb-1">by Prateek Group</div>
                  <div class="pvpr-loc mb-2">Sector- 151, Noida</div>
                  <div class="d-flex justify-content-between">
                     <div class="pvpr-bhk">2,3,4 BHK Flats</div>
                     <div class="pvpr-prc">₹ 1.88 - 5.08 Cr.</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-inner">
                  <div class="card-img">
                     <img src="<?= base_url(); ?>assets/images/cities/delhi.jpg" class="img-fluid">
                  </div>
                  <div class="card-img-overlay">
                     <span class="aprvl-badge"><i class="bi bi-check-circle-fill"></i>RERA</span>
                     <div class="prop-snfc">Possession from Mar 2024</div>
                  </div>
               </div>
               <div class="card-body">
                  <h5 class="pvpr-name">Godrej Nurture Phase 1</h5>
                  <div class="bldr-name mb-1">by Prateek Group</div>
                  <div class="pvpr-loc mb-2">Sector- 151, Noida</div>
                  <div class="d-flex justify-content-between">
                     <div class="pvpr-bhk">2,3,4 BHK Flats</div>
                     <div class="pvpr-prc">₹ 1.88 - 5.08 Cr.</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-inner">
                  <div class="card-img">
                     <img src="<?= base_url(); ?>assets/images/cities/gurgaon.jpg" class="img-fluid">
                  </div>
                  <div class="card-img-overlay">
                     <span class="aprvl-badge"><i class="bi bi-check-circle-fill"></i>RERA</span>
                     <div class="prop-snfc">Possession from Mar 2024</div>
                  </div>
               </div>
               <div class="card-body">
                  <h5 class="pvpr-name">Godrej Nurture Phase 1</h5>
                  <div class="bldr-name mb-1">by Prateek Group</div>
                  <div class="pvpr-loc mb-2">Sector- 151, Noida</div>
                  <div class="d-flex justify-content-between">
                     <div class="pvpr-bhk">2,3,4 BHK Flats</div>
                     <div class="pvpr-prc">₹ 1.88 - 5.08 Cr.</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="card">
               <div class="card-inner">
                  <div class="card-img">
                     <img src="<?= base_url(); ?>assets/images/cities/faridabad.jpg" class="img-fluid">
                  </div>
                  <div class="card-img-overlay">
                     <span class="aprvl-badge"><i class="bi bi-check-circle-fill"></i>RERA</span>
                     <div class="prop-snfc">Possession from Mar 2024</div>
                  </div>
               </div>
               <div class="card-body">
                  <h5 class="pvpr-name">Godrej Nurture Phase 1</h5>
                  <div class="bldr-name mb-1">by Prateek Group</div>
                  <div class="pvpr-loc mb-2">Sector- 151, Noida</div>
                  <div class="d-flex justify-content-between">
                     <div class="pvpr-bhk">2,3,4 BHK Flats</div>
                     <div class="pvpr-prc">₹ 1.88 - 5.08 Cr.</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
<section class="section rrsec">
   <div class="container">
      <div class="row justify-content-center mt-3 mb-3">
         <div class="col-xl-6 col-lg-7 col-md-8 text-center">
            <h2 class="pg-title-big">Real Estate Regulatory Authority <span class="text-primary">(RERA)</span></h2>
            <p class="text-hdln">Get a brief summary of RERA & Its benefits <a href="javascript:;">here</a>. You can also browse through RERA registered projects in Top cities.</p>
         </div>
      </div>
   </div>
</section>
<section class="section prop-loc-bys">
   <div class="container">
      <h2 class="cmn-title mb-3">Latest News & Articles</h2>
      <div class="row">
         <div class="col-md-6">
            <div class="card">
               <div class="row g-0">
                  <div class="col-md-5">
                     <img src="<?= base_url(); ?>assets/images/cities/gurgaon.jpg" class="img-fluid rounded-start">
                  </div>
                  <div class="col-md-7">
                     <div class="card-body">
                        <h5 class="nws-title"><a href="javascript:;">We realise the growth potential of Indian real estate, says marketing head of Warren Buffet-backed property brokerage</a></h5>
                        <p class="nws-desc">In an exclusive interview with propvenues.com News, Sanya Aeren, chief advisor, Berkshire Hathway Home Services and Orenda India, speaks about the opportunities and challenges facing Berkshire Hathway’s foray into the Indian real estate market</p>
                        <a class="rdmr-link" href="javascript:;">Read More<i class="bi bi-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="card">
               <div class="row g-0">
                  <div class="col-md-5">
                     <img src="<?= base_url(); ?>assets/images/cities/yamuna-expressway.jpg" class="img-fluid rounded-start">
                  </div>
                  <div class="col-md-7">
                     <div class="card-body">
                        <h5 class="nws-title"><a href="javascript:;">We realise the growth potential of Indian real estate, says marketing head of Warren Buffet-backed property brokerage</a></h5>
                        <p class="nws-desc">In an exclusive interview with propvenues.com News, Sanya Aeren, chief advisor, Berkshire Hathway Home Services and Orenda India, speaks about the opportunities and challenges facing Berkshire Hathway’s foray into the Indian real estate market</p>
                        <a class="rdmr-link" href="javascript:;">Read More<i class="bi bi-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <h2 class="pg-title-big text-center mt-5">Tools & Advice</h2>
      <div class="row">
         <div class="col-md-3 col-sm-6 text-center">
            <div class="card">
               <div class="card-body">
                  <img src="<?= base_url(); ?>assets/images/trends.svg" class="img-fluid ta-icons">
                  <h5 class="ta-title mt-4">Trends & Rates</h5>
                  <p class="ta-desc">Get all there is to know about property rates and trends in your city.</p>
                  <a class="rdmr-link" href="javascript:;">Read More<i class="bi bi-arrow-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-sm-6 text-center">
            <div class="card">
               <div class="card-body">
                  <img src="<?= base_url(); ?>assets/images/investment.svg" class="img-fluid ta-icons">
                  <h5 class="ta-title mt-4">Investment Spotlight</h5>
                  <p class="ta-desc">Find out where to invest in your city's best communities.</p>
                  <a class="rdmr-link" href="javascript:;">Read More<i class="bi bi-arrow-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-sm-6 text-center">
            <div class="card">
               <div class="card-body">
                  <img src="<?= base_url(); ?>assets/images/research.svg" class="img-fluid ta-icons">
                  <h5 class="ta-title mt-4">Research Insights</h5>
                  <p class="ta-desc">Get real estate professional advice and research reports.</p>
                  <a class="rdmr-link" href="javascript:;">Read More<i class="bi bi-arrow-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-sm-6 text-center">
            <div class="card">
               <div class="card-body">
                  <img src="<?= base_url(); ?>assets/images/calculator.svg" class="img-fluid ta-icons">
                  <h5 class="ta-title mt-4">EMI Calculator</h5>
                  <p class="ta-desc">Know how much you'll have to pay on your loan each month.</p>
                  <a class="rdmr-link" href="javascript:;">Read More<i class="bi bi-arrow-right"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<script src="<?= base_url(); ?>assets/plugins/jqueryui/js/jquery-ui.js"></script>
<script src="<?= base_url(); ?>assets/plugins/owlcarousel/js/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>assets/js/carousel.js"></script>
<script>
var baseUrl=$('base').attr("href");
   $(function() {
	 $(".autocomplete" ).autocomplete({
      source: function( request, response ) {
     	var city = $('select[name="cities"]').val();
        $.ajax({
				url: baseUrl + 'home/search_properties',
				dataType: "json",
				data: {
					q: request.term,
					city: city	  
				},
				success: function (data) {
					response($.map(data, function (item) {
						return {
							label: item.name,
							desc: item.desc,							
							val: item.val,						
							slug: item.slug						
						};
					}));
				}
			});
      },
      minLength: 0,
      select: function( event, ui ) {
		var content = btoa(ui.item.val);  
		var slug = ui.item.slug;  
        $('#search').attr('data-slug','');
        $('#search').val('');
        $('#search').val(content);
        $('#search').attr('data-slug',slug);
      }
    }).autocomplete("instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<span class='suggests'>" + item.desc + "</span></div>" )
        .appendTo( ul );
    }; 
	$('#hmain_search').on('click', function(){
       /*var lc = $('#search').val();
		if(lc==''){
		 $('input[name="search"]').css('border','1px solid red');
		 $('input[name="search"]').focus();
		 //alert('Please search a locality first!.');
		 return false;
		}*/
		search_properties();
	});
   });
   function search_properties(){
	   
	   var main     = $('select[name="cities"]').val();
	   var type     = $('input[name="type"]:checked').val();
	   //var search   = $('input[name="search"]').val();
	   var search   = $('input[name="content"]').data('slug');
	   var content  = $('input[name="content"]').val();
	   console.log(content);
	   var str  = atob(content);
	   var res = str.split('_');
	   if(res[0]=='LOC'){
	     var mainURL  = baseUrl + 'search/properties/';
		 if(type==undefined){ type = ''; }
		 if(search==undefined){ search = ''; }
	     if(content==undefined){ content = ''; }
		 window.location.href = mainURL + main + '?location='+search+'&type='+type+'&content='+content;   
	   }
	   if(res[0]=='PROJ'){
		 //var mainURL  = baseUrl + 'property/' + search + '--' + res[1];  
		 var mainURL  = baseUrl + search;  
		 window.location.href = mainURL;  
	   }if(res[0]=='BLD'){
		 //var mainURL  = baseUrl + 'property/' + main + '/' + search + '--' + res[1];  
		 var mainURL  = baseUrl + search;  
		 window.location.href = mainURL;  
	   }if(content==''){
		 var mainURL  = baseUrl + main;
		 window.location.href = mainURL;  
	   }
   }   
</script>