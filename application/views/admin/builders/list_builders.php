<div class="tile-content">
<table class="table" style="width:100%">
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
                 <i class="bi bi-pencil"></i>
                     </a><a href="javascript:void(0);" onclick="delete_this(this);" data-id="<?= $builder->id; ?>"><i class="bi bi-trash"></i></a></td>
            </tr>
			<?php $i++; } ?>
        </tbody>
    </table>
	<div id="pagination" class="mt10"><?= $pagination; ?></div>
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