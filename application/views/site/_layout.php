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
<nav class="navbar navbar-expand-lg navbar-light ps-3 pe-3">
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

<footer class="footer-pv ps-3 pe-3">
  <div class="container-fluid mb-5">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
          <div class="col-md-6">
            <img src="<?= base_url(); ?>assets/images/logo.svg" class="img-fluid ft-logo">
            <div class="cmp-txt mt-3 mb-4">@Various independent surveys have rated it as India's most popular real estate platform.</div>
            <div class="tlfr mb-1">Toll Free - 1800 88 88888</div>
            <div class="txtsb mb-3">Tuesday - Sunday (9:00 AM to 7:00 PM)</div>
            <div class="tlfr mb-3">Email - service@propvenues.com</div>
            <h6 class="foot-title">Follow Us</h6>
          </div>
            <div class="col-md-3">
                <h6 class="foot-title">Info Links</h6>
                <ul class="ftm-link">
                  <li><a href="javascript:;">About Us</a></li>
                  <li><a href="javascript:;">Careers</a></li>
                  <li><a href="javascript:;">Partners</a></li>
                  <li><a href="javascript:;">Contact Us</a></li>
                  <li><a href="javascript:;">Feedback</a></li>
                  <li><a href="javascript:;">Safety Guide</a></li>
                  <li><a href="javascript:;">Sitemap</a></li>
                  <li><a href="javascript:;">Blogs</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6 class="foot-title">Resources</h6>
                <ul class="ftm-link">
                  <li><a href="javascript:;">Home Loan</a></li>
                  <li><a href="javascript:;">ALl Cities</a></li>
                  <li><a href="javascript:;">All Localities</a></li>
                  <li><a href="javascript:;">All Builders</a></li>
                  <li><a href="javascript:;">Price Trends</a></li>
                  <li><a href="javascript:;">EMI Calculator</a></li>
                  <li><a href="javascript:;">Blogs</a></li>
                </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <h6 class="foot-title">Property in India</h6>
          <div class="foot-link mb-4">
              <a href="javascript:;">Property in Delhi-NCR</a>
              <a href="javascript:;">Property in Noida</a>
              <a href="javascript:;">Property in Greater Noida</a>
              <a href="javascript:;">Property in Greater Noida West</a>
              <a href="javascript:;">Property in Yamuna Expressway</a>
              <a href="javascript:;">Property in Ghaziabad</a>
              <a href="javascript:;">Property in Faridabad</a>
              <a href="javascript:;">Property in Gurgaon</a>
          </div>
          <h6 class="foot-title">Latest Project in India</h6>
          <div class="foot-link mb-4">
              <a href="javascript:;">Experion The Westerlies</a>
              <a href="javascript:;">Gaur City Yamuna Expressway</a>
              <a href="javascript:;">Shapoorji Pallonji Joyville Gurugram</a>
              <a href="javascript:;">DLF The Skycourt</a>
              <a href="javascript:;">SS The leaf</a>
              <a href="javascript:;">Experion The Heartsong</a>
              <a href="javascript:;">ATS Grandstand</a>
              <a href="javascript:;">Godrej 101</a>
          </div>
          <h6 class="foot-title">Popular Builders in India</h6>
          <div class="foot-link">
              <a href="javascript:;">ATS Group</a>
              <a href="javascript:;">Jaypee Greens</a>
              <a href="javascript:;">Mahagun Group</a>
              <a href="javascript:;">Prateek Group</a>
              <a href="javascript:;">Prestige Group</a>
              <a href="javascript:;">Godrej Properties</a>
          </div>
        </div>
      </div>
  </div>
</footer>
<div class="footer-copyright ps-3 pe-3">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 cpytxt">
                Copyright © 2021, Propvenues. All Rights Reserved.
            </div>
            <div class="col-md-6 lgl-link text-end">
                <a href="javascript:;">Privay Policy</a>
                <a href="javascript:;">Terms of uses</a>
                <a href="javascript:;">Refund Policy</a>
            </div>
        </div>
      </div>
 </div>
<!--Main Footer-->
<!--<?php //include_once('_footer.php'); ?>-->