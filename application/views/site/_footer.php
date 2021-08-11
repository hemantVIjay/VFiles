<?php 
$class_name=$this->router->fetch_class(); 
?>
<!--Main Header-->
<?php include('_header.php'); ?>
<!-- *****CONTENT***** -->
<main class="main-content">
    <?= $sub_view; ?>
</main>
<!--Main Footer-->
<?php include('_footer.php'); ?>