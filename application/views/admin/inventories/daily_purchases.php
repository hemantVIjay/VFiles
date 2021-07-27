<div class="app-title">
   <div class="title-holder">
      <h1><i class="feather icon-users"></i> Daily Purchases</h1>
      <p>List of Purchases</p>
   </div>
   <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>"><i class="feather icon-home"></i></a></li>
      <li class="breadcrumb-item">Daily Purchases</li>
   </ul>
</div>
<div class="row">
   <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="tile mb30">
         <div class="tile-title-w-btn">
            <div class="title">
               <h3><i class="feather icon-plus"></i> Add Daily Purchases</h3>
            </div>
            <?php if($permissions['add_ticket_category']==TRUE) { ?>
            <p><a id="" href="<?php echo base_url(); ?>admin/inventory/purchases_list" class="btn btn-theme-primary btn-oval"><i class="lni-list"></i> Daily Purchases List</a></p>
            <?php } ?>
         </div>
         <?php $zones = _assign_zones(); ?>
         <div class="tile-content">
            <p class="mSlot">Morning Slot (11:00 AM - 1:30 PM)</p>
            <hr>
            <div class="row">
               <?php foreach($zones as $zone){ ?>
               <div class="col-md-4">
                  <div class="mSlot"><?= $zone->zone_name; ?></div>
                  <table class="table table-bordered" id="s_1<?= $zone->id; ?>">
                     <thead>
                        <tr>
                           <th width="12%">Sl No.</th>
                           <th width="48%">Product</th>
                           <th width="25%">Quantity</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $products = _products(); $i = 1; foreach($products as $row){ ?>
                        <tr>
                           <td><?= $i++; ?></td>
                           <td><?php $pr = _productInfo($row->product_id); echo$pr->post_title; ?></td>
                           <?php 
						   $cond['zone_id'] = $zone->id;
						   $cond['slot']    = 1;
						   $cond['product_id'] = $row->product_id;
						   $iValue = $this->inventory_model->_todayZoneValue($cond); 
						   
						   ?>
						   <td><input class="form-control tRight" type="number" name="zone_<?= $zone->id;?>_qty[<?= $row->product_id; ?>]" class="form-control" data-product="<?= $row->product_id; ?>" data-zone="<?= $zone->id; ?>" data-slot="1" placeholder="QTY." value="<?php if(!empty($iValue)){ echo$iValue->quantity; } ?>" onkeyup="calculateSUM(this, 's_1<?= $zone->id; ?>', 'ps_1<?= $zone->id; ?>')"></td>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
                  <div class="text-center">
                     <button type="button" class="btn btn-theme-primary btn-oval" onclick="save_details(this, 's_1<?= $zone->id; ?>', 'ps_1<?= $zone->id; ?>')">Save</button>
                  </div>
                  <br />
                  <strong class="badge badge-primary">Pending Orders Quantities.</strong>
                  <hr class="mainHR">
                  <table width="100%" id="ps_1<?= $zone->id; ?>">
                     <tbody>
                        <?php $products = _products(); $i = 1; foreach($products as $row){ ?>
                        <tr>
                           <td><?php $pr = _productInfo($row->product_id); echo$pr->post_title; ?></td>
                           <td data-pending-product="<?= $row->product_id; ?>" class="tRight">2</td>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
				  <strong class="badge badge-success">Total Quantities.</strong>
                  <hr class="mainHR">
                  <table width="100%" id="ts_1<?= $zone->id; ?>">
                     <tbody>
                        <?php $products = _products(); $i = 1; foreach($products as $row){ ?>
                        <tr>
                           <td><?php $pr = _productInfo($row->product_id); echo$pr->post_title; ?></td>
                           <td data-total-product="<?= $row->product_id; ?>" class="tRight">0</td>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
               </div>
               <?php } ?>
			   <div class="col-md-8">
			   </div>
			   <div class="col-md-4 mt30">
			   <strong class="badge badge-info" style="font-size:13px;">Required Total Quantities.</strong>
                  <hr class="mainHR">
                  <table width="100%" id="grandTotal1">
                     <tbody>
                        <?php $products = _products(); $i = 1; foreach($products as $row){ ?>
                        <tr>
                           <td><?php $pr = _productInfo($row->product_id); echo$pr->post_title; ?></td>
                           <td data-gtotal-product="<?= $row->product_id; ?>" style="font-weight:700;" class="tRight">0</td>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
			   </div>
            </div>
            <div class="pb50">
               <p class="mSlot mt-10">Evening Slot  (5:30 AM - 8:00 PM)</p>
               <hr>
            <div class="row">
               <?php foreach($zones as $zone){ ?>
               <div class="col-md-4">
                  <div class="mSlot"><?= $zone->zone_name; ?></div>
                  <table class="table table-bordered" id="s_2<?= $zone->id; ?>">
                     <thead>
                        <tr>
                           <th width="12%">Sl No.</th>
                           <th width="48%">Product</th>
                           <th width="25%">Quantity</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $products = _products(); $i = 1; foreach($products as $row){ ?>
                        <tr>
                           <td><?= $i++; ?></td>
                           <td><?php $pr = _productInfo($row->product_id); echo$pr->post_title; ?></td>
                           <?php 
						   $cond['zone_id'] = $zone->id;
						   $cond['slot']    = 2;
						   $cond['product_id'] = $row->product_id;
						   $iValue = $this->inventory_model->_todayZoneValue($cond); 
						   
						   ?>
						   <td><input class="form-control tRight" type="number" name="zone_<?= $zone->id;?>_qty[<?= $row->product_id; ?>]" class="form-control" data-product="<?= $row->product_id; ?>" data-zone="<?= $zone->id; ?>" data-slot="2" placeholder="QTY." value="<?php if(!empty($iValue)){ echo$iValue->quantity; } ?>" onkeyup="calculateSUM(this, 's_2<?= $zone->id; ?>', 'ps_2<?= $zone->id; ?>')"></td>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
                  <div class="text-center">
                     <button type="button" class="btn btn-theme-primary btn-oval" onclick="save_details(this, 's_2<?= $zone->id; ?>', 'ps_2<?= $zone->id; ?>')">Save</button>
                  </div>
                  <br />
                  <strong class="badge badge-primary">Pending Orders Quantities.</strong>
                  <hr class="mainHR">
                  <table width="100%" id="ps_2<?= $zone->id; ?>">
                     <tbody>
                        <?php $products = _products(); $i = 1; foreach($products as $row){ ?>
                        <tr>
                           <td><?php $pr = _productInfo($row->product_id); echo$pr->post_title; ?></td>
                           <td data-pending-product="<?= $row->product_id; ?>" class="tRight">2</td>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
				  <strong class="badge badge-success">Total Quantities.</strong>
                  <hr class="mainHR">
                  <table width="100%" id="ts_2<?= $zone->id; ?>">
                     <tbody>
                        <?php $products = _products(); $i = 1; foreach($products as $row){ ?>
                        <tr>
                           <td><?php $pr = _productInfo($row->product_id); echo$pr->post_title; ?></td>
                           <td data-total-product="<?= $row->product_id; ?>" class="tRight">0</td>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
               </div>
               <?php } ?>
			   <div class="col-md-8">
			   </div>
			   <div class="col-md-4 mt30">
			   <strong class="badge badge-info" style="font-size:13px;">Required Total Quantities.</strong>
                  <hr class="mainHR">
                  <table width="100%" id="grandTotal2">
                     <tbody>
                        <?php $products = _products(); $i = 1; foreach($products as $row){ ?>
                        <tr>
                           <td><?php $pr = _productInfo($row->product_id); echo$pr->post_title; ?></td>
                           <td data-gtotal-product="<?= $row->product_id; ?>" style="font-weight:700;" class="tRight">0</td>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
			   </div>
            </div>
            </div>
         </div>
         <div class="tile-overlay" style="display: none;">
            <div class="m-loader mr-2">
               <svg class="m-circular" viewBox="25 25 50 50">
                  <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
               </svg>
            </div>
            <h3 class="l-text"><?= $this->lang->line("text_loading"); ?></h3>
         </div>
      </div>
   </div>
</div>
<div id="sidePanel" class="side-panel">
   <div class="side-panel-content-holder">
      <div class="side-panel-loader"  id="sidePanelLoader">
         <div class="loader-ripple">
            <div></div>
            <div></div>
         </div>
      </div>
      <div class="side-panel-content"  id="sidePanelContent"></div>
   </div>
</div>
<script>
   function showAlert(type,head,message){
           $.toast({heading: head ,text: message,loader: false,position : 'top-right',showHideTransition: 'fade', icon: type });
       }
	   
   function save_details(e, tbl, p_tbl){
	   var bURL = '<?php echo base_url(); ?>';
	   
	   $('#'+tbl+' >tbody > tr').each(function(i,tr) {
		   var en = $(tr).find('td:nth-child(3)').find('input');
		   var product = $(en).attr('data-product');
		   var slot    = $(en).attr('data-slot');
		   var zone    = $(en).attr('data-zone');
		   var qty     = $(en).val();
		   var pending     = $('#'+p_tbl+' >tbody').find("[data-pending-product='" + product + "']").text();
		   if(pending != '' && pending != undefined && pending != '0'){
			   qty = parseInt(qty)+parseInt(pending);
		   }
		   if(qty !=''){
			   $.ajax({
      		  url:bURL+'admin/inventory/add_zoneQuantities',
      		  type : "POST",
      		  data: {product:product, qty:qty, slot:slot, zone:zone},
      		  success:function(res){
   			//console.log(res)
   			  showAlert('success','Success','Inventory successfully saved');
      			$(".tile-content").load(location.href+".tile-content");
      		  }
      		});
		   }
	   });
   }	  
		
	function calculateSUM(e, tbl, p_tbl){
	  var sum = 0;
	  $('#'+tbl+' >tbody > tr').each(function(i,tr) {
		   var en = $(tr).find('td:nth-child(3)').find('input');
		   var product = $(en).attr('data-product');
		   var slot    = $(en).attr('data-slot');
		   var qty     = $(en).val();
		   var pending     = $('#'+p_tbl+' >tbody').find("[data-pending-product='" + product + "']").text();
		   if(qty == ''){
			   qty = 0;
		   }
		   if(pending != '' && pending != undefined && pending != '0'){
			   qty = parseInt(qty)+parseInt(pending);
		   }
		   //sum = parseInt(sum)+qty;
		   $('#t'+tbl+' >tbody').find("[data-total-product='" + product + "']").text(qty);
		   calculateGrandTotal(product, slot);
	   });
	   
	}

	function calculateGrandTotal(pr, slot){
	  var sum = 0; var count = '<?php echo count($products); ?>'
	  for(var i=0;i< count; i++) {
		   var t1   = $('#ts_'+slot+'1 >tbody').find("[data-total-product='" + pr + "']").text();
		   var t2   = $('#ts_'+slot+'2 >tbody').find("[data-total-product='" + pr + "']").text();
		   var t3   = $('#ts_'+slot+'3 >tbody').find("[data-total-product='" + pr + "']").text();
		   sum = parseInt(t1)+parseInt(t2)+parseInt(t3);
		   $('#grandTotal'+slot+' >tbody').find("[data-gtotal-product='" + pr + "']").text(sum);
	   };
	   
	}	
   
</script>