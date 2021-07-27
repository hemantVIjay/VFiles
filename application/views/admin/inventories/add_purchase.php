<div class="app-title">
    <div class="title-holder">
        <h1><i class="feather icon-users"></i> Inventory List Items</h1>
        <p>List of Purchases</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>"><i class="feather icon-home"></i></a></li>
        <li class="breadcrumb-item">Add Purchase</li>
    </ul>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="tile mb30">
            <div class="tile-title-w-btn">
                <div class="title">
                    <h3><i class="feather icon-users"></i> Add / List of Inventory Purchases</h3>
                </div>
            </div>
            <div class="tile-content">
                <?php if($permissions['list_users']==TRUE) { ?>
                <div id="usersLists"></div>
				<table class="table table-bordered" id="orderss">
				 <thead>
				  <tr>
				  <th>Sl No.</th>
				  <th>Product Name</th>
				  <th>Required Quantity(KG)</th>
				  <th>Action</th>
				  </tr>
				 </thead>
				 <tbody>
				 <?php if (!empty($purchases)): $i = 1; foreach ($purchases as $purchase): ?>
				     <tr>
					 <td><?= $i; ?></td>
					 <td><?= $purchase->post_title; ?></td>
					 <td><input type="number" class="form-control" name="required_quantity" min="1" max="150"></td>
					 <td><button name="update_quantity" id="update_quantity" class="btn btn-success" onclick="submit_purchase(this, '<?php echo$purchase->product_id; ?>')">Submit</button></td>
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
                    <h3><i class="feather icon-users"></i> List of Today's Assignments</h3>
                </div>
            </div>
			
			 <div class="tile-content" id="m-content">
			    <?php $d_users = $this->inventory_model->get_required_purchases(); if($permissions['list_users']==TRUE) { ?>
				<table class="table table-bordered" id="orderss">
				 <thead>
				  <tr>
				  <th>Sl No.</th>
				  <th>Product Name</th>
				  <th class="text-center">Required Quantity(KG)</th>
				  <th class="text-center">Status</th>
				  <th class="text-center">Added On</th>
				  </tr>
				 </thead>
				 <tbody>
				 <?php if (!empty($d_users)): $i = 1; foreach ($d_users as $u_row): $pr = _productInfo($u_row->product_id);  ?>
				     <tr>
					 <td><?= $i; ?></td>
					 <td><?= $pr->post_title; ?></td>
					 <td><?= $u_row->required_quantity; ?></td>
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
		
   		$.ajax({
   		  url:bURL+'admin/inventory/save_purchaseDaily',
   		  type : "POST",
   		  data: {relation_id:r_id, p_q:r_quantity},
   		  success:function(res){
			//console.log(res)
			showAlert('success','Successfully Added','');
			//toastr.success('ss')  
   			//$("#m-content").load(location.href+"#m-content");
   		  }
   		});
   	  
   	  
   	} 

</script>