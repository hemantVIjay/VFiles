<?php
   $class_name=$this->router->fetch_class();
   $method_name=$this->router->fetch_method();
?>
<?php include_once('components/_header.php'); ?>
<?php include_once('components/_sidebar.php'); ?>
<!-- *****CONTENT***** -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-4">
         <?= $sub_view; ?>
</main>
<?php include_once('components/_footer.php'); ?>
