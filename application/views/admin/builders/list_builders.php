<link href="<?= base_url(); ?>assets/plugins/datatable/css/datatables.min.css" rel="stylesheet">
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
                <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg></td>
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
<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatable/js/datatables.min.js"></script>

<script>
$(document).ready(function() {
    $('#dt').DataTable();
} );
</script>