<nav id="sidebar" class="sidebar js-sidebar">
   <div class="sidebar-content js-simplebar">
      <a class="sidebar-brand" href="index.html">
      <span class="align-middle">Propvenues</span>
      </a>
      <ul class="sidebar-nav">
         <li class="sidebar-item active">
            <a class="sidebar-link" href="<?= base_url('admin');?>">
            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
         </li>
         <li class="sidebar-header">
            Masters
         </li>
         <li class="sidebar-item <?php if($class_name == 'amenities'){ echo'active'; }?>">
            <a class="sidebar-link" href="<?= base_url('admin/amenities/list_amenities');?>">
            <i class="align-middle" data-feather="square"></i> <span class="align-middle">Amenities</span>
            </a>
         </li>
		 <li class="sidebar-item">
            <a class="sidebar-link" href="<?= base_url('admin/localities/list_localities');?>">
            <i class="align-middle" data-feather="square"></i> <span class="align-middle">Localities</span>
            </a>
         </li>
		 <li class="sidebar-item">
            <a class="sidebar-link" href="<?= base_url('admin/cities/list_cities');?>">
            <i class="align-middle" data-feather="square"></i> <span class="align-middle">Cities</span>
            </a>
         </li>
		 <li class="sidebar-item">
            <a class="sidebar-link" href="<?= base_url('admin/districts/list_districts');?>">
            <i class="align-middle" data-feather="square"></i> <span class="align-middle">Districts</span>
            </a>
         </li>
         <li class="sidebar-item">
            <a class="sidebar-link" href="<?= base_url('admin/states/list_states');?>">
            <i class="align-middle" data-feather="square"></i> <span class="align-middle">States</span>
            </a>
         </li>
         <li class="sidebar-item">
            <a class="sidebar-link" href="<?= base_url('admin/countries/list_countries');?>">
            <i class="align-middle" data-feather="square"></i> <span class="align-middle">Countries</span>
            </a>
         </li>
         <li class="sidebar-item">
            <a class="sidebar-link" href="<?= base_url('admin/builders/list_builders');?>">
            <i class="align-middle" data-feather="square"></i> <span class="align-middle">Builders</span>
            </a>
         </li>
		 <li class="sidebar-item">
            <a class="sidebar-link" href="<?= base_url('admin/properties/list_properties');?>">
            <i class="align-middle" data-feather="square"></i> <span class="align-middle">Properties</span>
            </a>
         </li>
      </ul>
   </div>
</nav>
<div class="main">
<nav class="navbar navbar-expand navbar-light navbar-bg">
   <a class="sidebar-toggle js-sidebar-toggle">
   <i class="hamburger align-self-center"></i>
   </a>
   <div class="navbar-collapse collapse">
      <ul class="navbar-nav navbar-align">
         
         
         <li class="nav-item dropdown">
            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
            <i class="align-middle" data-feather="settings"></i>
            </a>
            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
            <img src="<?= base_url(); ?>assets/img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Hemant" /> <span class="text-dark">Hemant</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
               <a class="dropdown-item" href="javascript:;"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="<?= base_url('admin/logout');?>">Log out</a>
            </div>
         </li>
      </ul>
   </div>
</nav>