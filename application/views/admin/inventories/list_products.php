<div class="app-title">
    <div class="title-holder">
        <h1><i class="feather icon-users"></i> <?= $this->lang->line("products"); ?></h1>
        <p><?= $this->lang->line("text_users_subtitle"); ?></p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>"><i class="feather icon-home"></i></a></li>
        <li class="breadcrumb-item"><?= $this->lang->line("orders"); ?></li>
    </ul>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="tile mb30">
            <div class="tile-title-w-btn">
                <div class="title">
                    <h3><i class="feather icon-users"></i> <?= $this->lang->line("products"); ?></h3>
                </div>
            </div>
            <div class="tile-content">
                <?php if($permissions['list_users']==TRUE) { ?>
				<table class="table table-bordered" id="orders">
				 <thead>
				  <tr>
				  <th>Sl No.</th>
				  <th>Product Name</th>
				  <th>Thumbnail</th>
				  <th>Unit Price (₹)</th>
				  <th>Status</th>
				  <th>Action</th>
				  </tr>
				 </thead>
				 <tbody>
				 <?php if (!empty($products)): $i = 1; foreach ($products as $product): ?>
				     <tr>
					 <td><?= $i; ?></td>
					 <td><?= $product->post_title; ?></td>
					 <td><?php $thumb = _thumbnail($product->product_id);  ?><img src="<?php echo$thumb; ?>" style="width:70px;"></td>
					 <td><?= number_format($product->max_price,2); ?></td>
					 <td><?php if($product->stock_status == 'instock'){?><label class="badge badge-success">Active</label><?php }else{?><label class="badge badge-danger">Inactive</label><?php } ?></td>
					 <td></td>
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
