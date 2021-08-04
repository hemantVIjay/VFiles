<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <base href="<?= base_url(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?> - <?= $site_name; ?></title>
    <!-- Favicon-->
    <?php if($site_favicon!=NULL) { ?>
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>uploads/site/<?= $site_favicon; ?>">
    <?php }else { ?>
        <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.png">
    <?php } ?>
	<!-- Ladda Loader-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/ladda/ladda-themeless.min.css">
    <!-- Toast-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/toast/jquery.toast.min.css">
    <!-- Style-->
    <link href="<?= base_url(); ?>assets/css/app.css" rel="stylesheet">
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
                                <?php if($site_logo!=NULL) { ?>
                                    <img src="<?= base_url(); ?>uploads/site/<?= $site_logo ?>" alt="<?= $site_name ?>" class="img-fluid rounded-circle" width="132" height="132">
                                <?php }else { ?>
                                    <img src="<?= base_url(); ?>assets/images/admin-logo.png" alt="<?= $site_name ?>" class="img-fluid rounded-circle" width="132" height="132">
                                <?php } ?>
                            </div>
                            <h5 class="card-title text-center"><?= $this->lang->line("text_signin_title"); ?></h5>
                            <form id="loginForm" method="POST" class="form-signin">
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input class="form-control form-control-lg" id="inputEmail" type="email" name="email" placeholder="<?= $this->lang->line("text_enter_email"); ?>"
                                        maxlength="256" autofocus="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input class="form-control form-control-lg" id="inputPassword" type="password"
                                        placeholder="<?= $this->lang->line("text_enter_password"); ?>" name="password" maxlength="20">
                                </div>
                                <div class="form-group">
                                    <label class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember">
									<span class="form-check-label">
                                    <?= $this->lang->line("text_remember_password"); ?>
                                    </span>
                                    </label>
                                </div>
                                <div class="text-center mt-3">
								<button id="loginButton" class="btn btn-lg btn-primary" data-style="zoom-in" data-size="l"
                                    type="submit"><span class="ladda-label"><?= $this->lang->line("text_signin"); ?></span></button>
								</div>	
                            </form>
                        </div>
                        <div class="card-footer p15 text-center">
                            <p><?= $this->lang->line("text_helpme"); ?> <a class="text-theme-secondary" href="<?= base_url(); ?>admin/forgot-password"><?= $this->lang->line("text_i_forgot_password"); ?></a></p>
                        </div>
						</div>
                    </div>
                    <!-- Login Card Ends-->
                  </div>
               </div>
            </div>
         </div>
      </main>

    <script src="<?= base_url(); ?>assets/vendors/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/app.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/toast/jquery.toast.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/ladda/spin.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/ladda/ladda.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/admin/auth.js"></script>
</body>

</html>