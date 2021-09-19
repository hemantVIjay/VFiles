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

<body data-spy="scroll" data-target=".navbar" data-offset="400">
<nav class="navbar navbar-expand-lg navbar-light pv-header ps-3 pe-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
		<img class="ws-logo" src="<?= base_url(); ?>assets/images/logo.svg" />
	</a>
	<div class="CitLink dropdown">
          <a class="nav-link dropdown-toggle" href="javascript:;" id="ctDdwn">
           <span class="pvh-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black"/>
<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black"/>
</svg></span> Buy in Noida
          </a>
        </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
	  <li class="nav-item">
          <a class="btn btn-first" href="javascript:;" id="ctDdwn">
		  <span class="pvh-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M3 13V11C3 10.4 3.4 10 4 10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14H4C3.4 14 3 13.6 3 13Z" fill="black"/>
<path d="M13 21H11C10.4 21 10 20.6 10 20V4C10 3.4 10.4 3 11 3H13C13.6 3 14 3.4 14 4V20C14 20.6 13.6 21 13 21Z" fill="black"/>
</svg></span>
		  Post Property</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">
		  <span class="pvh-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z" fill="black"/>
<path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z" fill="black"/>
<path opacity="0.3" d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z" fill="black"/>
</svg></span> Offers</a>
        </li>
        
		<li class="nav-item">
          <a class="nav-link" href="javascript:;"><span class="pvh-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M4.335 8.61499C3.98049 8.61579 3.64078 8.75725 3.39048 9.0083C3.14018 9.25935 2.99973 9.59947 3 9.95398V15.307C3 15.6611 3.14065 16.0006 3.39101 16.251C3.64138 16.5013 3.98094 16.642 4.335 16.642C4.68907 16.642 5.02863 16.5013 5.27899 16.251C5.52935 16.0006 5.67 15.6611 5.67 15.307V9.95398C5.67027 9.59947 5.52983 9.25935 5.27953 9.0083C5.02922 8.75725 4.68952 8.61579 4.335 8.61499ZM20.353 8.61499C19.9986 8.61579 19.659 8.75734 19.4088 9.00842C19.1587 9.25951 19.0185 9.59956 19.019 9.95398V15.307C19.0141 15.4853 19.045 15.6628 19.1099 15.829C19.1748 15.9952 19.2723 16.1467 19.3967 16.2745C19.5211 16.4024 19.6699 16.504 19.8342 16.5734C19.9985 16.6428 20.1751 16.6786 20.3535 16.6786C20.5319 16.6786 20.7085 16.6428 20.8728 16.5734C21.0371 16.504 21.1859 16.4024 21.3103 16.2745C21.4347 16.1467 21.5322 15.9952 21.5971 15.829C21.662 15.6628 21.6929 15.4853 21.688 15.307V9.95398C21.6883 9.59947 21.5478 9.25935 21.2975 9.0083C21.0472 8.75725 20.7075 8.61579 20.353 8.61499Z" fill="black"/>
<path d="M8.33899 18.062V20.662C8.33899 21.0161 8.47964 21.3556 8.73 21.606C8.98036 21.8563 9.31993 21.9969 9.67399 21.9969C10.0281 21.9969 10.3676 21.8563 10.618 21.606C10.8683 21.3556 11.009 21.0161 11.009 20.662V18.062H8.33899Z" fill="black"/>
<path opacity="0.3" d="M16.344 18.062C16.6984 18.0615 17.0381 17.9202 17.2885 17.6693C17.5388 17.4184 17.6793 17.0784 17.679 16.724V8.69299H7.004V16.724C7.00373 17.0784 7.1442 17.4184 7.39454 17.6693C7.64487 17.9202 7.98458 18.0615 8.339 18.062H16.344Z" fill="black"/>
<path d="M13.679 18.062V20.662C13.679 21.0161 13.8196 21.3556 14.07 21.606C14.3204 21.8563 14.6599 21.9969 15.014 21.9969C15.368 21.9969 15.7076 21.8563 15.958 21.606C16.2083 21.3556 16.349 21.0161 16.349 20.662V18.062H13.679Z" fill="black"/>
<path d="M15.676 4.53889L16.864 3.09492C16.9209 3.02747 16.9639 2.94945 16.9904 2.8653C17.017 2.78115 17.0266 2.69257 17.0187 2.60468C17.0109 2.51679 16.9857 2.43131 16.9446 2.35322C16.9035 2.27512 16.8474 2.206 16.7794 2.14973C16.7115 2.09345 16.633 2.05112 16.5486 2.02534C16.4642 1.99955 16.3756 1.99079 16.2878 1.99946C16.2 2.00813 16.1147 2.03408 16.037 2.07587C15.9593 2.11767 15.8906 2.17451 15.835 2.24299L14.535 3.82099C13.8435 3.50074 13.0902 3.33617 12.3282 3.33893C11.5662 3.3417 10.8141 3.51173 10.125 3.83698L8.85999 2.2519C8.80503 2.18348 8.73714 2.1266 8.66018 2.08442C8.58322 2.04224 8.49871 2.01569 8.41147 2.00617C8.32423 1.99665 8.23597 2.00441 8.15173 2.029C8.06748 2.05359 7.98891 2.09452 7.92049 2.14948C7.85207 2.20444 7.79515 2.27235 7.75297 2.34931C7.71079 2.42627 7.68418 2.51073 7.67466 2.59797C7.66515 2.68521 7.6729 2.77349 7.69749 2.85773C7.72209 2.94198 7.76303 3.02052 7.81799 3.08893L8.98999 4.55793C8.37138 5.05535 7.87187 5.68486 7.52806 6.40034C7.18426 7.11581 7.00485 7.89915 7.00299 8.69294H17.684C17.6821 7.8943 17.5006 7.10632 17.1531 6.38727C16.8055 5.66823 16.3007 5.03648 15.676 4.53889ZM10.676 7.34699C10.4782 7.34699 10.2849 7.28829 10.1204 7.17841C9.95597 7.06853 9.8278 6.91241 9.75211 6.72968C9.67642 6.54696 9.65662 6.34578 9.69521 6.1518C9.73379 5.95782 9.82903 5.77969 9.96888 5.63984C10.1087 5.49998 10.2869 5.40474 10.4809 5.36616C10.6749 5.32757 10.8759 5.34735 11.0587 5.42304C11.2414 5.49873 11.3976 5.62688 11.5075 5.79133C11.6173 5.95578 11.676 6.14921 11.676 6.34699C11.676 6.61221 11.5706 6.86649 11.3831 7.05402C11.1956 7.24156 10.9412 7.34699 10.676 7.34699ZM14.005 7.34699C13.8072 7.34699 13.6139 7.28829 13.4494 7.17841C13.285 7.06853 13.1568 6.91241 13.0811 6.72968C13.0054 6.54696 12.9856 6.34578 13.0242 6.1518C13.0628 5.95782 13.158 5.77969 13.2979 5.63984C13.4377 5.49998 13.6159 5.40474 13.8099 5.36616C14.0039 5.32757 14.2049 5.34735 14.3877 5.42304C14.5704 5.49873 14.7266 5.62688 14.8365 5.79133C14.9463 5.95578 15.005 6.14921 15.005 6.34699C15.005 6.61221 14.8996 6.86649 14.7121 7.05402C14.5246 7.24156 14.2702 7.34699 14.005 7.34699Z" fill="black"/>
</svg></span> Download App</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="javascript:;">
		  <span class="pvh-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M3.11117 13.2288C3.27137 11.0124 5.01376 9.29156 7.2315 9.15059C8.55778 9.06629 10.1795 9 12 9C13.8205 9 15.4422 9.06629 16.7685 9.15059C18.9862 9.29156 20.7286 11.0124 20.8888 13.2288C20.9535 14.1234 21 15.085 21 16C21 16.915 20.9535 17.8766 20.8888 18.7712C20.7286 20.9876 18.9862 22.7084 16.7685 22.8494C15.4422 22.9337 13.8205 23 12 23C10.1795 23 8.55778 22.9337 7.23151 22.8494C5.01376 22.7084 3.27137 20.9876 3.11118 18.7712C3.04652 17.8766 3 16.915 3 16C3 15.085 3.04652 14.1234 3.11117 13.2288Z" fill="#12131A"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13 16.7324C13.5978 16.3866 14 15.7403 14 15C14 13.8954 13.1046 13 12 13C10.8954 13 10 13.8954 10 15C10 15.7403 10.4022 16.3866 11 16.7324V18C11 18.5523 11.4477 19 12 19C12.5523 19 13 18.5523 13 18V16.7324Z" fill="#12131A"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 6C7 3.23858 9.23858 1 12 1C14.7614 1 17 3.23858 17 6V10C17 10.5523 16.5523 11 16 11C15.4477 11 15 10.5523 15 10V6C15 4.34315 13.6569 3 12 3C10.3431 3 9 4.34315 9 6V10C9 10.5523 8.55228 11 8 11C7.44772 11 7 10.5523 7 10V6Z" fill="#12131A"></path>
                                        </svg>
                                    </span> Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="ddmCity">
			<div class="row gx-3">
				<div class="col-xl-1 col-md-2 col-sm-3">
					<a href="javascript:;" class="ctyLink">
						<img src="<?= base_url(); ?>assets/images/cities/icons/mumbai.png" class="img-fluid">
						<span class="ctyName">Delhi</span>
					</a>
				</div>
				<div class="col-xl-1 col-md-2 col-sm-3">
					<a href="javascript:;" class="ctyLink">
						<img src="<?= base_url(); ?>assets/images/cities/icons/2.png" class="img-fluid">
						<span class="ctyName">Noida</span>
					</a>
				</div>
				<div class="col-xl-1 col-md-2 col-sm-3">
					<a href="javascript:;" class="ctyLink">
						<img src="<?= base_url(); ?>assets/images/cities/icons/3.png" class="img-fluid">
						<span class="ctyName">Gurgaon</span>
					</a>
				</div>
				<div class="col-xl-1 col-md-2 col-sm-3">
					<a href="javascript:;" class="ctyLink">
						<img src="<?= base_url(); ?>assets/images/cities/icons/4.png" class="img-fluid">
						<span class="ctyName">Mumbai</span>
					</a>
				</div>
				<div class="col-xl-1 col-md-2 col-sm-3">
					<a href="javascript:;" class="ctyLink">
						<img src="<?= base_url(); ?>assets/images/cities/icons/5.png" class="img-fluid">
						<span class="ctyName">Pune</span>
					</a>
				</div>
				<div class="col-xl-1 col-md-2 col-sm-3">
					<a href="javascript:;" class="ctyLink">
						<img src="<?= base_url(); ?>assets/images/cities/icons/6.png" class="img-fluid">
						<span class="ctyName">Kolkata</span>
					</a>
				</div>
				<div class="col-xl-1 col-md-2 col-sm-3">
					<a href="javascript:;" class="ctyLink">
						<img src="<?= base_url(); ?>assets/images/cities/icons/7.png" class="img-fluid">
						<span class="ctyName">Hyderabad</span>
					</a>
				</div>
				<div class="col-xl-1 col-md-2 col-sm-3">
					<a href="javascript:;" class="ctyLink">
						<img src="<?= base_url(); ?>assets/images/cities/icons/8.png" class="img-fluid">
						<span class="ctyName">Ghaziabad</span>
					</a>
				</div>
				<div class="col-xl-1 col-md-2 col-sm-3">
					<a href="javascript:;" class="ctyLink">
						<img src="<?= base_url(); ?>assets/images/cities/icons/9.png" class="img-fluid">
						<span class="ctyName">Faridabad</span>
					</a>
				</div>
				<div class="col-xl-1 col-md-2 col-sm-3">
					<a href="javascript:;" class="ctyLink">
						<img src="<?= base_url(); ?>assets/images/cities/icons/10.png" class="img-fluid">
						<span class="ctyName">Bengaluru</span>
					</a>
				</div>
				<div class="col-xl-1 col-md-2 col-sm-3">
					<a href="javascript:;" class="ctyLink">
						<img src="<?= base_url(); ?>assets/images/cities/icons/11.png" class="img-fluid">
						<span class="ctyName">Chennai</span>
					</a>
				</div>
				<div class="col-xl-1 col-md-2 col-sm-3">
					<a href="javascript:;" class="ctyLink">
						<img src="<?= base_url(); ?>assets/images/cities/icons/12.png" class="img-fluid">
						<span class="ctyName">Lucknow</span>
					</a>
				</div>
			</div>
		</div>


<!-- *****CONTENT***** -->
<main class="main-content">
    <?= $sub_view; ?>
</main>

<footer class="footer-pv ps-3 pe-3" id="footer">
  <div class="container-fluid mb-5">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
          <div class="col-md-6">
            <img src="<?= base_url(); ?>assets/images/logo.svg" class="img-fluid ft-logo">
            <div class="cmp-txt mt-3 mb-4">@Various independent surveys have rated it as India's most popular real estate platform.</div>
            <div class="tlfr mb-1">Toll Free - 1800 88 88888</div>
            <div class="txtsb mb-4">Tuesday - Sunday (9:00 AM to 7:00 PM)</div>
            <div class="tlfr mb-4">Email - properties@propvenues.com</div>
            <h6 class="foot-title">Follow Us</h6>
			<div class="pv-social">
			<a href="javascript:;" class="pv-slink">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="black"/>
<path d="M13.643 9.36206C13.6427 9.05034 13.7663 8.75122 13.9864 8.53052C14.2065 8.30982 14.5053 8.18559 14.817 8.18506H15.992V5.23999H13.643C13.1796 5.24052 12.7209 5.33229 12.293 5.51013C11.8651 5.68798 11.4764 5.94841 11.1491 6.27649C10.8219 6.60457 10.5625 6.99389 10.3857 7.42224C10.209 7.85059 10.1183 8.30956 10.119 8.77295V11.718H7.769V14.663H10.119V21.817C11.2812 22.0479 12.4762 22.0604 13.643 21.854V14.663H15.992L17.167 11.718H13.643V9.36206Z" fill="black"/>
</svg>
			</a>
				<a href="javascript:;" class="pv-slink">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M19.0003 4.40002C18.2003 3.50002 17.1003 3 15.8003 3C14.1003 3 12.5003 3.99998 11.8003 5.59998C11.0003 7.39998 11.9004 9.49993 11.2004 11.2999C10.1004 14.2999 7.80034 16.9 4.90034 17.9C4.50034 18 3.80035 18.2 3.10035 18.2C2.60035 18.3 2.40034 19 2.90034 19.2C4.40034 19.8 6.00033 20.2 7.80033 20.2C15.8003 20.2 20.2004 13.5999 20.2004 7.79993C20.2004 7.59993 20.2004 7.39995 20.2004 7.19995C20.8004 6.69995 21.4003 6.09993 21.9003 5.29993C22.2003 4.79993 21.9003 4.19998 21.4003 4.09998C20.5003 4.19998 19.7003 4.20002 19.0003 4.40002Z" fill="black"/>
<path d="M11.5004 8.29997C8.30036 8.09997 5.60034 6.80004 3.30034 4.50004C2.90034 4.10004 2.30037 4.29997 2.20037 4.79997C1.60037 6.59997 2.40035 8.40002 3.90035 9.60002C3.50035 9.60002 3.10037 9.50007 2.70037 9.40007C2.40037 9.30007 2.00036 9.60004 2.10036 10C2.50036 11.8 3.60035 12.9001 5.40035 13.4001C5.10035 13.5001 4.70034 13.5 4.30034 13.6C3.90034 13.6 3.70035 14.1001 3.90035 14.4001C4.70035 15.7001 5.90036 16.5 7.50036 16.5C8.80036 16.5 10.1004 16.5 11.2004 15.8C12.7004 14.9 13.9003 13.2001 13.8003 11.4001C13.9003 10.0001 13.1004 8.39997 11.5004 8.29997Z" fill="black"/>
</svg></a>
<a href="javascript:;" class="pv-slink">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M22 8.20267V15.7027C22 19.1027 19.2 22.0026 15.7 22.0026H8.2C4.8 22.0026 2 19.2027 2 15.7027V8.20267C2 4.80267 4.8 2.0026 8.2 2.0026H15.7C19.2 1.9026 22 4.70267 22 8.20267ZM12 7.30265C9.5 7.30265 7.39999 9.40262 7.39999 11.9026C7.39999 14.4026 9.5 16.5026 12 16.5026C14.5 16.5026 16.6 14.4026 16.6 11.9026C16.6 9.30262 14.5 7.30265 12 7.30265ZM17.9 5.0026C17.3 5.0026 16.9 5.4026 16.9 6.0026C16.9 6.6026 17.3 7.0026 17.9 7.0026C18.5 7.0026 18.9 6.6026 18.9 6.0026C18.9 5.5026 18.4 5.0026 17.9 5.0026Z" fill="black"/>
<path d="M12 17.5026C8.9 17.5026 6.39999 15.0026 6.39999 11.9026C6.39999 8.80259 8.9 6.30261 12 6.30261C15.1 6.30261 17.6 8.80259 17.6 11.9026C17.6 15.0026 15.1 17.5026 12 17.5026ZM12 8.30261C10 8.30261 8.39999 9.90259 8.39999 11.9026C8.39999 13.9026 10 15.5026 12 15.5026C14 15.5026 15.6 13.9026 15.6 11.9026C15.6 9.90259 14 8.30261 12 8.30261Z" fill="black"/>
</svg>
</a>
<a href="javascript:;" class="pv-slink">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M21 6.30005C20.5 5.30005 19.9 5.19998 18.7 5.09998C17.5 4.99998 14.5 5 11.9 5C9.29999 5 6.29998 4.99998 5.09998 5.09998C3.89998 5.19998 3.29999 5.30005 2.79999 6.30005C2.19999 7.30005 2 8.90002 2 11.9C2 14.8 2.29999 16.5 2.79999 17.5C3.29999 18.5 3.89998 18.6001 5.09998 18.7001C6.29998 18.8001 9.29999 18.8 11.9 18.8C14.5 18.8 17.5 18.8001 18.7 18.7001C19.9 18.6001 20.5 18.4 21 17.5C21.6 16.5 21.8 14.9 21.8 11.9C21.8 9.00002 21.5 7.30005 21 6.30005ZM9.89999 15.7001V8.20007L14.5 11C15.3 11.5 15.3 12.5 14.5 13L9.89999 15.7001Z" fill="black"/>
</svg>
</a>
			</div>
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
				  <li><a href="javascript:;">Advertise With us</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6 class="foot-title">Resources</h6>
                <ul class="ftm-link">
                  <li><a href="javascript:;">Home Loan</a></li>
                  <li><a href="javascript:;">All Cities</a></li>
                  <li><a href="javascript:;">All Localities</a></li>
                  <li><a href="javascript:;">All Builders</a></li>
                  <li><a href="javascript:;">Price Trends</a></li>
                  <li><a href="javascript:;">EMI Calculator</a></li>
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

<script>
$(document).ready(function(){
  $("#ctDdwn").click(function(){
    $(".ddmCity").slideToggle();
  });
});
</script>
