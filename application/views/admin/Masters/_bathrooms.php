<div class="row">
   <div class="col-12 col-xl-4">
      <div class="card">
         <div class="card-header">
            <h5 class="card-title">Add Bathroom</h5>
         </div>
         <div class="card-body">
            <form method="POST" action="<?= base_url('admin/masters/add_bathroom'); ?>" enctype="multipart/form-data" accept-charset="utf-8">
               <input type="hidden" name="id" value="<?php echo $record->id ?? '';?>">
               <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input name="name" type="text" class="form-control" placeholder="Enter Bank here..." value="<?php echo $record->name ?? '';?>" >
               </div>
               <div class="mb-3">
                  <label class="form-label w-100">Icon</label>
                  <input type="file" name="icon" accept=".svg" class="form-control">
                  <small class="form-text text-muted">Please choose only .svg files here.</small>
                  <br>
                  <?php if(isset($record->icon)){ ?>
                  <img src="<?= base_url('uploads/bathrooms/');?><?= $record->icon ?? ''; ?>" style="10px 0px;">
                  <?php } ?>
               </div>
               <button type="submit" class="btn btn-primary">Save</button>
            </form>
         </div>
      </div>
   </div>
   <div class="col-12 col-xl-8">
      <div class="card">
         <div class="card-header">
            <h5 class="card-title">Bathrooms Lists</h5>
         </div>
         <div style="overflow:auto;height:525px;">
            <table class="table" style="width:100%;height:100%;">
               <thead>
                  <tr>
                     <th style="width:12%;">Sr. No.</th>
                     <th style="width:55%;">Name</th>
                     <th class="d-none d-md-table-cell" style="width:25%">Icon</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=0;
                     foreach($bathrooms as $key=>$row){ $cls = ($i % 2); ?>
                  <tr class="<?php if($cls==0){ ?>table-success<?php } ?>">
                     <td><?= $i+1; ?></td>
                     <td><?= $row->name; ?></td>
                     <td><img src="<?= base_url('uploads/bathrooms/');?><?= $row->icon; ?>"/></td>
                     <td class="table-action">
                        <a href="<?= base_url('admin/masters/list_bathrooms/').$row->id; ?>">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle">
                              <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                           </svg>
                        </a>
                        <a href="<?= base_url('admin/masters/delete_bathroom/').$row->id; ?>">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle">
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                           </svg>
                        </a>
                     </td>
                  </tr>
                  <?php $i++; } ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>