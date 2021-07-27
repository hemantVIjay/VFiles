<div class="tile mb30">
    <div class="tile-title-w-btn">
        <div class="title">
        <h3>Order Details</h3>
        </div>
		<a href="<?php echo base_url(); ?>admin/orders/list_orders" class="btn btn-theme-primary btn-oval trigger-button"><i class="app-menu-icon feather icon-corner-up-left" style="color:#fff;"></i> Orders List</a>
    </div>
	<style>
	 table tbody tr td:nth-child(6),table tbody tr td:nth-child(4),table tbody tr td:nth-child(5){
		 text-align:right;
	 }
	</style>
	<?php //echo'<pre/>';print_r($Details); ?>
    <div class="tile-content">
        <div class="users-list" id="actionCard<?= $id; ?>">
            <div class="media">
                <div class="media-body">
                    <h4><?= $Details['_billing_first_name'].' '.$Details['_billing_last_name']; ?></h4>
					<div class="row mt-3">
					<div class="col-md-6">
					 <div class="row">
					<div class="col-md-3">
					<h5>OrderID :</h5>
					</div>
					<div class="col-md-6">
					  <h5><strong><?= $id; ?></strong></h5>
					</div>
					</div>
					<div class="row mt-3">
					<div class="col-md-3">
					<h6>Address :</h6>
					</div>
					<div class="col-md-6">
					  <h6><strong><?= @$Details['_billing_address_1'].' '.@$Details['_billing_address_2'].' '.$Details['_billing_city'].' '.$Details['_billing_state'].' ('.$Details['_billing_postcode'].') '.$Details['_billing_country']; ?></strong></h6>
					</div>
					</div>
					<div class="row">
					<div class="col-md-3">
					<h6>Phone Number :</h6>
					</div>
					<div class="col-md-6">
					  <h6><strong><?= $Details['_billing_phone']; ?></strong></h6>
					</div>
					</div>
					<div class="row">
					<div class="col-md-3">
					<h6>Email Address :</h6>
					</div>
					<div class="col-md-6">
					  <h6><strong><?= $Details['_billing_email']; ?></strong></h6>
					</div>
					</div>
					</div>
					
					</div>
            </div>
        </div>
		<div class="mt-5">
		 <h6>Ordered Items Summary</h6>
		</div>
		<?php $orders = $this->order_model->_norderItems($id); ?>
		<div class="col-md-12">   
		<div class="row mt-2">   
          <table class="table table-bordered" id="orderss">
				 <thead>
				  <tr>
				  <th>Sl No.</th>
				  <th>Product</th>
				  <th>Product Image</th>
				  <th>Per Unit Price (₹)</th>
				  <th>Order Quantity </th>
				  <th>Total Price </th>
				  </tr>
				 </thead>
				 <tbody>
				 
				   <?php if (!empty($orders)): $i = 1; foreach ($orders as $order):  ?>
				     <tr>
					 <td><?= $i; ?></td>
					 <td><?= $order->order_item_name; ?></td>
					 <td><?php $thumb = _thumbnail($order->productID);  ?><img src="<?php echo$thumb; ?>" style="width:70px;"></td>
					 <td><?= number_format(_unitPrice($order->productID)); ?></td>
					 <td><?= $order->Qty; ?></td>
					 <td><?= number_format($order->subtotal); ?></td>
			    	 </tr>
				   <?php $i++; endforeach;
    endif;
?>
				 </tbody>
				</table>		
    </div>
	<div class="col-md-12 mt-5 mb30">
					<?php if (!empty($orders)){ $i = 1; $sum = 0; foreach ($orders as $norder){ ?>
					<div class="row text-right">
					<div class="col-md-9">
					</div>
					<div class="col-md-2">
					<h6>Price :
					<?= number_format(_unitPrice($norder->productID)); ?> &times; <?= $norder->Qty; ?> &nbsp;&nbsp;&nbsp;<span style="text-align:right;">=</span></h6>
					</div>
					<div class="col-md-1">
					  <h6>₹ <strong><?= $norder->Qty*number_format(_unitPrice($norder->productID)); ?></strong></h6>
					</div>
					</div>
					<?php $sum += $norder->subtotal; } } ?>
					<hr>
					<div class="row text-right">
					<div class="col-md-8">
					</div>
					<div class="col-md-2">
					<h6>Total Price : <span style="text-align:right;"></span></h6>
					</div>
					<div class="col-md-2">
					  <h6>₹ <strong><?= $sum; ?></strong></h6>
					</div>
					</div>
					<hr >
					<div class="row text-right">
					<div class="col-md-8">
					</div>
					<div class="col-md-2">
					<h6>Gross Total :</h6>
					</div>
					<div class="col-md-2">
					  <h6><strong>₹ <?= $Details['_order_total']; ?></strong></h6>
					</div>
					</div>
					</div>
</div>

