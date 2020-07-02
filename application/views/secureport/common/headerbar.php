<!--start top-wrapper-->
<div class="top-wrapper"> 
  <!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand">
  <div class="brand-logo">
	  <img src="<?= base_url('public/assets/images/climpi.png') ?>" class="logo-icon" alt="logo icon">
	  <p class="extra-small-font text-light-2 ml-4">Información que genera confianza</p>
   </div>
  <ul class="navbar-nav align-items-center right-nav-link ml-auto">
    <li class="nav-item dropdown dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" data-toggle="dropdown" href="javascript:void();">
      <i class="zmdi zmdi-notifications-active align-middle"></i><span class="bg-info text-white badge-up">14</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            New Notifications <a href="javascript:void();" class="extra-small-font">Clear All</a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Registered Users</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-coffee fa-2x mr-3 text-warning"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Received Orders</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-danger"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Updates</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Notifications</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" data-toggle="dropdown" href="javascript:void();">
        <span class="user-profile"><img src="https://via.placeholder.com/110X110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110X110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
            <p class="user-subtitle">mccoy@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="zmdi zmdi-comments mr-3"></i>Cambio de contraseña</li>
          <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="zmdi zmdi-power mr-3"></i>Salir</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->
<!-- start horizontal Menu -->
    <nav>
        <!-- Menu Toggle btn-->
        <div class="menu-toggle align-items-center">
            <h3>Menu</h3>
            <button class="btn" type="button" id="mobile-btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
<!--start nav container-->
	  <div class="nav-container">
	    <!-- mobile close btn-->
	      <div class="close-btn">
			   <i class="zmdi zmdi-close"></i>
		    </div>
        <ul id="respMenu" class="horizontal-menu">
			<li>
                <a class="" href="<?php echo base_url ('dashboard'); ?>">
                    <i class="zmdi zmdi-view-dashboard" aria-hidden="true"></i>
                    <span class="title">Etiquetas QR 2.0</span>
                </a>
                <!-- Level Two-->
            </li>
            <li>
                <a class="" href="<?php echo base_url ('dashboard2'); ?>">
                    <i class="zmdi zmdi-chart"></i>
                    <span class="title">Bioseguridad</span>
                </a>
            </li>
			<li>
                <a class="" href="<?php echo base_url ('dashboard3'); ?>">
                    <i class="zmdi zmdi-format-list-bulleted"></i>
                    <span class="title">Encuestas</span>
                </a>
            </li>
        </ul>
		</div><!--end nav container-->
    </nav>
    <!-- end horizontal Menu -->
      </div>
	<!--end top-wrapper-->