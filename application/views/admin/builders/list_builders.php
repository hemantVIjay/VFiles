<link href="<?= base_url(); ?>assets/plugins/datatable/css/datatables.min.css" rel="stylesheet">
<div class="tile-content">
<table id="dt" class="table" style="width:100%">
        <thead>
            <tr>
                <th>SNo.</th>
                <th>Builder Name</th>
                <th>Established Year</th>
                <th>Builder Phone</th>
                <th>Office Address</th>
                <th>About</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach($builders as $builder){ ?>
			<tr>
                <td><?= $i; ?></td>
                <td><?= $builder->builder_name; ?></td>
                <td><?= $builder->builder_estabilished_year; ?></td>
                <td><?= $builder->builder_phone; ?></td>
                <td><?= $builder->builder_office_address; ?></td>
                <td><?= $builder->builder_information; ?></td>
                <td>
				<a href="<?= base_url(); ?>admin/builders/edit_builder/<?= $builder->id; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle">
                           <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                        </svg>
                     </a><a href="javascript:void(0);" onclick="delete_this(this);" data-id="<?= $builder->id; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></td>
            </tr>
			<?php $i++; } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>SNo.</th>
                <th>Builder Name</th>
                <th>Established Year</th>
                <th>Builder Phone</th>
                <th>Address</th>
                <th>About</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
	</div>
<script>
   function showAlert(type,head,message){
           $.toast({heading: head ,text: message,loader: false,position : 'top-right',showHideTransition: 'fade', icon: type });
       }
	   
   function delete_this(e){
	       var baseUrl=$('base').attr("href");	   
		   var id = $(e).attr('data-id');
		   if(id !=''){
			$.ajax({
      		  url:baseUrl+'admin/builders/delete_builder',
      		  type : "POST",
      		  data: {builder_id:id},
			  dataType: 'json',
              async: false,
      		  success:function(res){
			    showAlert('success','Success','Builder successfully deleted');
      			$("#dt").load(location.href + " #dt");
      		  }
      		});
		   }
   }	  
   
</script>