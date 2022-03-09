<!--Upload Images & Video-->
               <div class="pvfp-tab gllry-tabs">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="elevgt-tab" data-bs-toggle="tab" data-bs-target="#elevgt" type="button" role="tab" aria-controls="elevgt" aria-selected="true">Elevation</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="vdogt-tab" data-bs-toggle="tab" data-bs-target="#vdogt" type="button" role="tab" aria-controls="vdogt" aria-selected="false">Video</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="cnstgt-tab" data-bs-toggle="tab" data-bs-target="#cnstgt" type="button" role="tab" aria-controls="cnstgt" aria-selected="false">Construction Updates</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nbhdgt-tab" data-bs-toggle="tab" data-bs-target="#nbhdgt" type="button" role="tab" aria-controls="nbhdgt" aria-selected="false">Neighbourhood</button>
                     </li>
                  </ul>
                  <div class="tab-content py-4" id="myTabContent">
                     <div class="tab-pane fade show active" id="elevgt" role="tabpanel" aria-labelledby="elevgt-tab">
                        <div class="row gx-3">
                           <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                              <img src="<?= base_url(); ?>assets/images/cities/delhi.jpg" class="img-fluid" />
                           </div>
                           <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                              <img src="<?= base_url(); ?>assets/images/cities/faridabad.jpg" class="img-fluid" />
                           </div>
                           <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                              <img src="<?= base_url(); ?>assets/images/cities/ghaziabad.jpg" class="img-fluid" />
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="vdogt" role="tabpanel" aria-labelledby="vdogt-tab">
                        <div class="row gx-3">
                           <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                              <img src="<?= base_url(); ?>assets/images/cities/delhi.jpg" class="img-fluid" />
                           </div>
                           <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                              <img src="<?= base_url(); ?>assets/images/cities/faridabad.jpg" class="img-fluid" />
                           </div>
                           <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                              <img src="<?= base_url(); ?>assets/images/cities/ghaziabad.jpg" class="img-fluid" />
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="cnstgt" role="tabpanel" aria-labelledby="cnstgt-tab">
                        <div class="row gx-3">
                           <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                              <img src="<?= base_url(); ?>assets/images/cities/delhi.jpg" class="img-fluid" />
                           </div>
                           <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                              <img src="<?= base_url(); ?>assets/images/cities/faridabad.jpg" class="img-fluid" />
                           </div>
                           <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                              <img src="<?= base_url(); ?>assets/images/cities/ghaziabad.jpg" class="img-fluid" />
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="nbhdgt" role="tabpanel" aria-labelledby="nbhdgt-tab">
                        <div class="row gx-3">
                           <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                              <img src="<?= base_url(); ?>assets/images/cities/delhi.jpg" class="img-fluid" />
                           </div>
                           <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                              <img src="<?= base_url(); ?>assets/images/cities/faridabad.jpg" class="img-fluid" />
                           </div>
                           <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                              <img src="<?= base_url(); ?>assets/images/cities/ghaziabad.jpg" class="img-fluid" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="addlt" style="text-align:right;"><a href="javascript:;" onclick="addRow('gallery');" ><i class="bi bi-plus-circle-fill me-1"></i>Add Row</a>
                  <a href="javascript:;" onclick="deleteRow('gallery');" class="ms-2"><i class="bi bi-dash-circle-fill me-1"></i>Delete Row</a>
               </div>
               <div class="tbl-resp">
                  <table class="table tbl-custom" style="width:100%">
                     <thead>
                        <tr>
                           <th width="50">SNo.</th>
                           <th width="250">Upload Image</th>
                           <th width="150">Category</th>
                           <th width="150">Caption</th>
                        </tr>
                     </thead>
                     <tbody id="gallery">
                        <tr>
                           <td><input type="checkbox"></td>
                           <td><input type="file" class="form-control" name="image_name[]"/></td>
                           <td>
                              <select class="form-select" name="image_type[]">
                                 <option value="Elevation">Elevation</option>
                                 <option value="Video">Video</option>
                                 <option value="Construction Updates">Construction Updates</option>
                                 <option value="Neighbourhood">Neighbourhood</option>
                              </select>
                           </td>
                           <td><input type="text" class="form-control" name="image_desc[]"/></td>
                        </tr>
                     </tbody>
                  </table>
               </div>