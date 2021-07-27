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
                    <h3><i class="feather icon-list"></i> <?= $this->lang->line("orders"); ?></h3>
                </div>
				<?php if($permissions['add_ticket_category']==TRUE) { ?>
                    <!--<p><a id="" href="<?php echo base_url(); ?>admin/inventory/add_new_purchase" class="btn btn-theme-primary btn-oval trigger-button"><i class="lni-plus"></i> <?= $this->lang->line("text_add_purchase"); ?></a></p>-->
                <?php } ?>
            </div>
            <div class="tile-content">
                <?php if($permissions['list_users']==TRUE) { ?>
				<table class="table table-bordered" id="orderss">
				 <thead>
				  <tr>
				  <th>Sl No.</th>
				  <th>Product Name</th>
				  <th>Required Quantity(KG) for Today</th>
				  <th>Purchased Quantity(KG) for Today</th>
				  <th width="10%">Unit Price(KG)</th>
				  <th>Comments</th>
				  <th>Action</th>
				  </tr>
				 </thead>
				 <tbody>
				 <?php if (!empty($purchases)): $i = 1; foreach ($purchases as $purchase): $spr = _productInfo($purchase->product_id); ?>
				     <tr>
					 <td><?= $i; ?></td>
					 <td><?= $spr->post_title; ?></td>
					 <td><input type="number" class="form-control nUMBER" name="required_quantity" value="<?= $purchase->required_quantity; ?>" readonly></td>
					 <td><input type="number" class="form-control nUMBER" name="purchased_quantity" value="<?= $purchase->required_quantity; ?>"></td>
					 <td><input type="number" class="form-control nUMBER" name="unit_price" value="<?= $purchase->	unit_price; ?>"></td>
					 <td><input type="text" class="form-control" name="comments"></td>
					 <td><button name="update_quantity" id="update_quantity" class="btn btn-success" onclick="submit_purchase(this, '<?php echo$purchase->R_ID; ?>')">Submit</button></td>
					 </tr>
				   <?php $i++; endforeach;
    endif;
?>
				 </tbody>
				</table>
                <?php } ?>
            </div>
			
			<div class="tile-title-w-btn">
                <div class="title">
                    <h3><i class="feather icon-list"></i> List of Today's Purchases</h3>
                </div>
            </div>
			
			 <div class="tile-content">
			    <?php $d_users = $this->inventory_model->get_purchaseQuantities(); if($permissions['list_users']==TRUE) { ?>
				<table class="table table-bordered" id="orderss">
				 <thead>
				  <tr>
				  <th>Sl No.</th>
				  <th>Product Name</th>
				  <th class="text-center">Purchased Quantity(KG)</th>
				  <th class="text-center">Unit Price</th>
				  <th class="text-center">Total Cost</th>
				  <th class="text-center">Status</th>
				  <th class="text-center">Added On</th>
				  </tr>
				 </thead>
				 <tbody>
				 <?php if (!empty($d_users)): $i = 1; foreach ($d_users as $u_row): $pr = _productInfo($u_row->product_id); ?>
				     <tr>
					 <td><?= $i; ?></td>
					 <td><?= $pr->post_title; ?></td>
					 <td class="nUMBER"><?= $u_row->purchased_quantity; ?></td>
					 <td class="nUMBER"><?= $u_row->unit_price; ?></td>
					 <td class="nUMBER"><?= $u_row->purchased_quantity*$u_row->unit_price; ?></td>
					 <td><?php if($u_row->status == 1){ ?><span class="badge badge-success">Active</span><?php }else { ?><span class="badge badge-danger">Inctive</span><?php } ?></td>
					 <td><?= get_nice_time($u_row->added_on); ?></td>
					 
					 </tr>
				   <?php $i++; endforeach;
    endif;
?>
				 </tbody>
				</table>
                <?php } ?>
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
        <div class="side-panel-loader"  id="sidePanelLoader"><div class="loader-ripple"><div></div><div></div></div></div>
        <div class="side-panel-content"  id="sidePanelContent"></div>
    </div>
</div>

<script>
function showAlert(type,head,message){
        $.toast({heading: head ,text: message,loader: false,position : 'top-right',showHideTransition: 'fade', icon: type });
    }
	
function submit_purchase(e, r_id){
	var bURL = '<?php echo base_url(); ?>';
	//alert(r_id)
	//debugger
        var r_quantity = $(e).closest("tr").find('td:eq(2)').find('input').val();
        var p_quantity = $(e).closest("tr").find('td:eq(3)').find('input').val();
		var u_price = $(e).closest("tr").find('td:eq(4)').find('input').val();
        var comments = $(e).closest("tr").find('td:eq(5)').find('input').val();
		if(p_quantity == ''){
			showAlert('warning','Please provide the quantity','');
			$(e).closest("tr").find('td:eq(3)').find('input').focus();
			return false;
		}
		if(u_price == ''){
			showAlert('warning','Please provide the Unit Price','');
			$(e).closest("tr").find('td:eq(4)').find('input').focus();
			return false;
		}
   		$.ajax({
   		  url:bURL+'admin/inventory/add_purchase',
   		  type : "POST",
   		  data: {relation_id:r_id, p_q:p_quantity, r_q:r_quantity, p_u:u_price, comments:comments},
   		  success:function(res){
			console.log(res)
			showAlert('success','Invertory successfully saved','');
   			$("#tile-content").load(location.href+"#tile-content");
   		  }
   		});
   	  
   	  
   	} 

</script>