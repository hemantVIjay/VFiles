<div class="app-title">
    <div class="title-holder">
        <h1><i class="feather icon-users"></i> <?= $this->lang->line("orders"); ?></h1>
        <p><?= $this->lang->line("text_users_subtitle"); ?></p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>"><i class="feather icon-home"></i></a></li>
        <li class="breadcrumb-item"><?= $this->lang->line("orders"); ?></li>
    </ul>
</div>
<?php //$or = _orders(); echo'<pre/>';print_r($or); ?>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="tile mb30">
            <div class="tile-title-w-btn">
                <div class="title">
                    <h3><i class="feather icon-users"></i> <?= $this->lang->line("orders"); ?></h3>
                </div>
            </div>
            <div class="tile-content">
                <?php if($permissions['list_users']==TRUE) { ?>
                <div id="usersList"></div>
				<table class="table table-bordered" id="morders">
				 <thead>
				  <tr>
				  <th>Order ID</th>
				  <th>Customer Name</th>
				  <th>Email</th>
				  <th>Phone</th>
				  <th>Amount (₹)</th>
				  <th>Payment Status</th>
				  <th>Order Status</th>
				  <th>Order Placed</th>
				  <th>Action</th>
				  </tr>
				 </thead>
				 <tbody>
				 
				   <?php if (!empty($orders)): $i = 1; foreach ($orders as $order): //print_r($order);
				         
						 $details = _orderDetails($order->order_id);
						 $orderStatus = 0;//_orderStatus($order->order_id);						 
						 
						 ?>
				     <tr>
					 <td><?= $order->order_id; ?></td>
					 <td><?= $order->first_name.' '.$order->last_name; ?></td>
					 <td><?= $order->email; ?></td>
					 <td><?= $details['_billing_phone']; ?></td>
					 <td class="text-right"><?= $order->order_total; ?></td>
					 <td><?= $details['_payment_method_title']; ?></td>
				     <td><?php if($orderStatus == 0){ ?><span class="badge badge-success"><?= $order->p_status; ?></span>&nbsp; <span class="badge badge-warning">Pending</span><?php }else{ ?><span class="badge badge-primary">Delivered</span><?php } ?></td>
					 <td class="text-right"><?= get_nice_time($order->purchase_date); ?></td>
					 <td class="text-center"><a href="<?php echo base_url();?>admin/orders/view_order/<?php echo $order->order_id;?>"><i class="app-menu-icon feather icon-eye"></i></a></td>
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
