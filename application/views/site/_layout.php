<!--Main Header-->
<!--<?php //include_once('_header.php'); ?>-->

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

	<title><?= $title; ?> - <?= $site_name; ?></title>
	<link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/css/mulish.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/css/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/css/custom.css" rel="stylesheet">
	
	<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
	
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
		<img class="ws-logo" src="<?= base_url(); ?>assets/images/logo.svg" />
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
	  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Buy in Gr. Noida
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="javascript:;">Noida</a></li>
            <li><a class="dropdown-item" href="javascript:;">Greater Noida</a></li>
			<li><a class="dropdown-item" href="javascript:;">Yamuna Expressway</a></li>
			<li><a class="dropdown-item" href="javascript:;">Ghaziabad</a></li>
            <li><a class="dropdown-item" href="javascript:;">Delhi</a></li>
			<li><a class="dropdown-item" href="javascript:;">Gurgaon</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Offers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:;">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- *****CONTENT***** -->
<main class="main-content">
    <?= $sub_view; ?>
</main>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
<!--Main Footer-->
<!--<?php //include_once('_footer.php'); ?>-->