<div class="pg-content mb-4">
   <div class="tbl-resp">
      <table class="table tbl-custom" style="width:100%">
         <thead>
            <tr>
               <th>SNo.</th>
               <th>Property Listing</th>
               <th>Stars</th>
               <th>User/Customer</th>
               <th>Is Published</th>
               <th>Message</th>
               <th>Date Posted</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            <?php $i=0; if(!empty($Reviews)){
               foreach($Reviews as $key=>$row){ ?>
            <tr>
               <td><?= $i+1;?></td>
               <td><?= $row->listing_id;?></td>
               <td><?= $row->stars;?></td>
               <td><?= get_userby_id($row->user_id);?></td>
               <td><?= $row->is_visible;?></td>
               <td><?= $row->message;?></td>
               <td><?= $row->date_publish;?></td>
               <td class="table-action">
			   <a class="form-check form-switch">
			   <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
			   <label class="form-check-label" for="flexSwitchCheckDefault">Publish</label>
			   </a>
                  <a class="ms-2" href="<?= base_url('admin/properties/delete_property/').$row->id; ?>">
                  <i class="bi bi-trash"></i>
                  </a>
               </td>
            </tr>
            <?php $i++; } }else{ ?>
			<tr>
			 <td colspan="10" class="text-center">NO RECORDS</td>
			</tr>
			<?php } ?>
         </tbody>
      </table>
      <div id="pagination" class="mt10"><?= $pagination; ?></div>
   </div>
</div>