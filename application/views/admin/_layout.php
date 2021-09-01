<?php
   $class_name=$this->router->fetch_class();
   $method_name=$this->router->fetch_method();
?>
<!--<?php //include_once('components/_header.php'); ?>
<?php //include_once('components/_sidebar.php'); ?>-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keywords" content="">
	
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.png" />
    <base href="<?= base_url(); ?>">
	<title><?= $title; ?> - <?= $site_name; ?></title>
	<link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/css/mulish.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/css/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/css/custom.css" rel="stylesheet">
	
	<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
	
</head>
<style>
body::-webkit-scrollbar {
         width: 1em;
         }
         body::-webkit-scrollbar-track {
         box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
         }
         body::-webkit-scrollbar-thumb {
         background-color: darkgrey;
         outline: 1px solid slategrey;
         }
         ::-webkit-scrollbar {
         width: 8px;
         height: 8px;
         }
         ::-webkit-scrollbar-track {
         -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
         border-radius: 10px;
         }
         ::-webkit-scrollbar-thumb {
         border-radius: 10px;
         -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
         background-color: #efa41c;
         }
</style>
<body>
	<header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Propvenues</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="flex-shrink-0 dropdown me-3">
          <a href="javascript:;" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?= base_url(); ?>assets/img/avatars/avatar.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
			Hemant
          </a>
          <ul class="dropdown-menu shadow" aria-labelledby="dropdownUser2" style="">
            <li><a class="dropdown-item" href="#">Change Password</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?= base_url('admin/logout');?>">Sign out</a></li>
          </ul>
        </div>
</header>

<div class="container-fluid">
  <div class="row">
  
  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="list-unstyled ps-0">
		<li><a href="<?= base_url('admin');?>" class="nav-link">Dashborad</a></li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#master-collapse" aria-expanded="false">
          Master
        </button>
        <div class="collapse" id="master-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1">
           <li>
            <a class="nav-link" href="<?= base_url('admin/amenities/list_amenities');?>">Amenities</a>
         </li>
		 <li>
            <a class="nav-link" href="<?= base_url('admin/localities/list_localities');?>">Localities</a>
         </li>
		 <li>
            <a class="nav-link" href="<?= base_url('admin/cities/list_cities');?>">Cities</a>
         </li>
		 <li>
            <a class="nav-link" href="<?= base_url('admin/districts/list_districts');?>">Districts</a>
         </li>
         <li>
            <a class="nav-link" href="<?= base_url('admin/states/list_states');?>">States</a>
         </li>
         <li>
            <a class="nav-link" href="<?= base_url('admin/countries/list_countries');?>">Countries</a>
         </li>
		 <li>
            <a class="nav-link" href="<?= base_url('admin/masters/list_banks');?>">Banks</a>
         </li>
		 <li>
            <a class="nav-link" href="<?= base_url('admin/masters/list_propertiesType');?>">Property Type</a>
         </li>
		 <li>
            <a class="nav-link" href="<?= base_url('admin/masters/list_floorType');?>">Floor Type</a>
         </li>
          </ul>
        </div>
      </li>
	  <li class="mb-1">
        <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#builder-collapse" aria-expanded="false">
          Builder
        </button>
        <div class="collapse" id="builder-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1">
            <li>
				<a class="nav-link" href="<?= base_url('admin/builders/list_builders');?>">Builder List</a>
			</li>
			<li>
				<a class="nav-link" href="<?= base_url('admin/builders/add_builder');?>">Add Builder</a>
			</li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#property-collapse" aria-expanded="false">
          Properties
        </button>
        <div class="collapse" id="property-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1">
            <li>
				<a class="nav-link" href="<?= base_url('admin/properties/list_properties');?>">Properties List</a>
			</li>
			<li>
				<a class="nav-link" href="<?= base_url('admin/properties/add_properties');?>">Add Property</a>
			</li>
          </ul>
        </div>
      </li>
    </ul>
      </div>
    </nav>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-4">
         <?= $sub_view; ?>
</main>
</div>
</div>
</body>
</html>
<!--<?php //include_once('components/_footer.php'); ?>-->
