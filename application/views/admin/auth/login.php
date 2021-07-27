<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/icons/icon-48x48.png" />
      <base href="<?= base_url(); ?>">
      <title><?= $title; ?> - <?= $site_name; ?></title>
      <!-- Favicon-->
      <link href="<?= base_url(); ?>assets/css/app.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	      <!-- Ladda Loader-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/ladda/ladda-themeless.min.css">
    <!-- Toast-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/toast/jquery.toast.min.css">
   </head>
   <body>
      <main class="d-flex w-100">
         <div class="container d-flex flex-column">
            <div class="row vh-100">
               <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                  <div class="d-table-cell align-middle">
                     <div class="text-center mt-4">
                        <h1 class="h2">Welcome back, Charles</h1>
                        <p class="lead">
                           Sign in to your account to continue
                        </p>
                     </div>
                     <div class="card">
                        <div class="card-body">
                           <div class="m-sm-4">
                              <div class="text-center">
                                 <img src="<?= base_url(); ?>assets/img/avatars/avatar.jpg" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
                              </div>
                              <form id="loginForm" method="POST" class="form-signin">
                                 <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
                                 </div>
                                 <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
                                    <small>
                                    <a href="">Forgot password?</a>
                                    </small>
                                 </div>
                                 <div>
                                    <label class="form-check">
                                    <input class="form-check-input" type="checkbox" value="remember" name="remember" checked>
                                    <span class="form-check-label">
                                    Remember me next time
                                    </span>
                                    </label>
                                 </div>
                                 <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
	  <!-- jQuery -->
      <script src="<?= base_url(); ?>assets/vendors/jquery/jquery.min.js"></script>
      <script src="<?= base_url(); ?>assets/js/app.js"></script>
	  <script src="<?= base_url(); ?>assets/vendors/jquery-validation/jquery.validate.min.js"></script>
	  <script src="<?= base_url(); ?>assets/vendors/toast/jquery.toast.min.js"></script>
		<!--Ladda Loader-->
	  <script src="<?= base_url(); ?>assets/vendors/ladda/spin.min.js"></script>
	  <script src="<?= base_url(); ?>assets/vendors/ladda/ladda.min.js"></script>
		<!-- Auth Js-->
	  <script src="<?= base_url(); ?>assets/js/admin/auth.js"></script>
	   </body>
</html>