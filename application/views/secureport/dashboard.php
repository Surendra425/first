<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
 <title>Cuadro de Mando -  CLIMPI</title>
  <!-- loader-->
  <link href="<?= base_url('public/assets/css/pace.min.css') ?>" rel="stylesheet"/>
  <script src="<?= base_url('public/assets/js/pace.min.js') ?>"></script>
  <!--favicon-->
  <link rel="icon" href="<?= base_url('public/assets/images/favicon.ico') ?>" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="<?= base_url('public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') ?>" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="<?= base_url('public/assets/plugins/simplebar/css/simplebar.css') ?>" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="<?= base_url('public/assets/css/bootstrap.min.css') ?>" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?= base_url('public/assets/css/animate.css') ?>" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?= base_url('public/assets/css/icons.css') ?>" rel="stylesheet" type="text/css"/>
    <!--Select Plugins-->
  <link href="<?= base_url('public/assets/plugins/select2/css/select2.min.css') ?>" rel="stylesheet"/>
  <!--inputtags-->
  <link href="<?= base_url('public/assets/plugins/inputtags/css/bootstrap-tagsinput.css') ?>" rel="stylesheet" />
  <!--multi select-->
  <link href="<?= base_url('public/assets/plugins/jquery-multi-select/multi-select.css') ?>" rel="stylesheet" type="text/css">
  <!--Bootstrap Datepicker-->
  <link href="<?= base_url('public/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet" type="text/css">
  <!-- Horizontal CSS-->
  <link href="<?= base_url('public/assets/css/horizontal-menu.css') ?>" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="<?= base_url('public/assets/css/app-style.css') ?>" rel="stylesheet"/>
  <style>
  font-size:80% !important;
  </style>
</head>
<body class="bg-theme bg-theme1">
<!-- Start wrapper-->
 <div id="wrapper">
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
                <a class="" href="homember.html">
                    <i class="zmdi zmdi-view-dashboard" aria-hidden="true"></i>
                    <span class="title">Etiquetas QR 2.0</span>
                </a>
                <!-- Level Two-->
            </li>
            <li>
                <a class="" href="homember2.html">
                    <i class="zmdi zmdi-chart"></i>
                    <span class="title">Bioseguridad</span>
                </a>
            </li>
			<li>
                <a class="" href="homember3.html">
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
<div class="clearfix"></div>
 <div class="content-wrapper">

 <div class="row p-3">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		    <h4 class="page-title text-light-1">Makrollantas</h4>
		 
	   </div>
	   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			   <ol class="breadcrumb">
            <li class="breadcrumb-item text-light-2">Certificación Bioseguridad</li>
            <li class="breadcrumb-item text-light-3">Fenalco Solidario</li>
			</ol>
		</div>
</div>

 <div class="container-fluid">
	 
 <div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
	<div class="form-group">
	  <label>Nivel estructura</label>
	  <select class="form-control multiple-select" multiple="multiple">
		  <option>India</option>
		  <option>England</option>
		  <option>America</option>
		  <option>China</option>
		  <option>Australiya</option>
		  <option>Newzeland</option>
		  <option>Dubai</option>
		  <option>United Kingdom</option>
	  </select>
	</div>
					
					
	<div class="card mt-3">
		<div class="card-content">
			<div class="row row-group m-0">
				<div class="col-12 border-light">
					<div class="card-body">
					  <h5 class="text-white mb-0">4 <span class="float-right"><i class="fa fa-user-circle"></i></span></h5>
						<div class="progress my-3" style="height:3px;">
						   <div class="progress-bar" style="width:100%"></div>
						</div>
					  <p class="mb-0 text-white small-font">Total usuarios activos <span class="float-right">100%</span></p>
					</div>
				</div>
				<div class="col-12 border-light">
					<div class="card-body">
					  <h5 class="text-white mb-0">80 <span class="float-right"><i class="fa fa-qrcode"></i></span></h5>
						<div class="progress my-3" style="height:3px;">
						   <div class="progress-bar" style="width:50%"></div>
						</div>
					  <p class="mb-0 text-white small-font">Etiquetas activas <span class="float-right">50%</span></p>
					</div>
				</div>
					</div>
				</div>
		 </div> 
  </div>
  
  
  <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">




	  
      <!--Start Dashboard Content-->
     <div class="row mb-3">
		 <div class="col-12 col-lg-12 col-xl-12">
			 <form>
			  <label>Periodo de reporte</label>
                <div id="dateragne-picker">
                 <div class="input-daterange input-group">
                  <input type="text" class="form-control" name="start"/>
                  <div class="input-group-prepend">
                   <span class="input-group-text">a</span>
                  </div>
                  <input type="text" class="form-control" name="end"/>
                 </div>
               </div>
               
			 </form>
		 </div>
	  </div>
	 
	  	   <div class="card">
       <div class="card-header"><p>Resumen de códigos QR</p>
          <div class="btn-group group-round btn-group-sm float-right">
              <button type="button" class="btn btn-white waves-effect waves-light">Mensual</button>
              <button type="button" class="btn btn-light waves-effect waves-light">Diario</button>
            </div>
       </div>
       <div class="card-body">
         <div class="row align-items-center">
           <div class="col-12 col-lg-3 text-center">
             <p class="mt-4">Total Anual</p>
             <h4 class="mb-0">4,350</h4>
             <hr>
             <p>Total Diario</p>
             <h4 class="mb-0">$80,520</h4>
           </div>
           <div class="col-12 col-lg-9">
		     <div class="chart-container-11">
               <canvas id="dash2-chart1"></canvas>
			 </div>
           </div>
         </div><!--End Row-->
       </div>
     </div><!--End Card-->
	  
	 <div class="row">
     <div class="col-12 col-lg-8 col-xl-8">
	 <div class="card">
		 <div class="card-header">Número de Scan por horas
		   <div class="card-action">
		
		   </div>
		 </div>
		 <div class="card-body">
		    <ul class="list-inline">
			  <li class="list-inline-item"><i class="fa fa-circle mr-2 text-white"></i>Leidos</li>
			  <li class="list-inline-item"><i class="fa fa-circle mr-2 text-light"></i>Encuestados</li>
			</ul>
			<div class="chart-container-1">
			  <canvas id="chart1"></canvas>
			</div>
		 </div>
		 <div class="row m-0 row-group text-center border-top border-light-3">
		   <div class="col-12 col-lg-6">
		     <div class="p-3">
		       <h5 class="mb-0">45.87M</h5>
			   <small class="mb-0">Total lecturas </small>
		     </div>
		   </div>
		   <div class="col-12 col-lg-6">
		     <div class="p-3">
		       <h5 class="mb-0">15:48</h5>
			   <small class="mb-0">Total encuestas</small>
		     </div>
		   </div>
		 </div>
		</div>
	 </div>
     <div class="col-12 col-lg-4 col-xl-4">
        <div class="card">
           <div class="card-header">Medio
             <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Exportar</a>
               </div>
              </div>
             </div>
           </div>
           <div class="card-body">
		     <div class="chart-container-2">
               <canvas id="chart2"></canvas>
			  </div>
           </div>
           <div class="table-responsive">
             <table class="table align-items-center">
               <tbody>
                 <tr>
                   <td><i class="fa fa-circle text-white mr-2"></i> APP</td>
                   <td>856</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-1 mr-2"></i>Lector QR</td>
                   <td>102</td>
                
                 </tr>
          
               </tbody>
             </table>
           </div>
         </div>
     </div>
	 </div><!--End Row-->
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">
		  <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Exportar excel</a>
               </div>
              </div>
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>Código QR</th>
                     <th>Nombre</th>
                     <th>Dirección</th>
                     <th>Número de Scan</th>
                     <th>Número encuestas</th>
                     <th>Aforo</th>
                   </tr>
                   </thead>
                   <tbody><tr>
                    <td>Iphone 5</td>
                    <td><img src="https://via.placeholder.com/110X110" class="product-img" alt="product img"></td>
                    <td>#9405822</td>
                    <td>$ 1250.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                        </div></td>
                   </tr>
                   <tr>
                    <td>Earphone GL</td>
                    <td><img src="https://via.placeholder.com/110X110" class="product-img" alt="product img"></td>
                    <td>#9405820</td>
                    <td>$ 1500.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 60%"></div>
                        </div></td>
                   </tr>
                   <tr>
                    <td>HD Hand Camera</td>
                    <td><img src="https://via.placeholder.com/110X110" class="product-img" alt="product img"></td>
                    <td>#9405830</td>
                    <td>$ 1400.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 70%"></div>
                        </div></td>
                   </tr>
                   <tr>
                    <td>Clasic Shoes</td>
                    <td><img src="https://via.placeholder.com/110X110" class="product-img" alt="product img"></td>
                    <td>#9405825</td>
                    <td>$ 1200.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                        </div></td>
                   </tr>
                   <tr>
                    <td>Hand Watch</td>
                    <td><img src="https://via.placeholder.com/110X110" class="product-img" alt="product img"></td>
                    <td>#9405840</td>
                    <td>$ 1800.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 40%"></div>
                        </div></td>
                   </tr>
				   <tr>
                    <td>Clasic Shoes</td>
                    <td><img src="https://via.placeholder.com/110X110" class="product-img" alt="product img"></td>
                    <td>#9405825</td>
                    <td>$ 1200.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                        </div></td>
                   </tr>
                 </tbody></table>
               </div>
	   </div>
	 </div>
	</div><!--End Row-->
	  
	  <div class="row">
         <div class="col-12 col-lg-12 col-xl-12">
           <div class="card">
             <div class="card-header">Scan Administradores & Climpiadores
             <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Exportar</a>
               </div>
              </div>
             </div>
           </div>

             <div class="card-body">
			   <div class="chart-container-11">
                 <canvas id="timeChart"></canvas>
			   </div>
             </div>
           </div>
         </div>
       </div><!--End Row-->
	  

	
   </div>	
      <!--End Dashboard Content-->
	  <!--start overlay-->
	  <div class="overlay mobile-btn"></div>
	<!--end overlay-->

    <!-- End container-fluid-->
	</div>
</div><!--End content-wrapper-->
</div>
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2020 CLIMPI
        </div>
      </div>
    </footer>
	<!--End footer-->
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">
      <p class="mb-0">Gaussion Texture</p>
      <hr>
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>
      <p class="mb-0">Gradient Background</p>
      <hr>
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('public/assets/js/jquery.min.js')?>"></script>
  <script src="<?= base_url('public/assets/js/popper.min.js')?>"></script>
  <script src="<?= base_url('public/assets/js/bootstrap.min.js')?>"></script>
 <!-- simplebar js -->
  <script src="<?= base_url('public/assets/plugins/simplebar/js/simplebar.js')?>"></script>
  <!-- horizontal-menu js -->
  <script src="<?= base_url('public/assets/js/horizontal-menu.js')?>"></script>
  <!-- loader scripts -->
  <script src="<?= base_url('public/assets/js/jquery.loading-indicator.js')?>"></script>
  <!-- Custom scripts -->
  <script src="<?= base_url('public/assets/js/app-script.js')?>"></script>
  <!-- Chart js -->
  <script src="<?= base_url('public/assets/plugins/Chart.js/Chart.min.js')?>"></script>
  <!-- Vector map JavaScript -->
  <script src="<?= base_url('public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')?>"></script>
  <script src="<?= base_url('public/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')?>"></script>
  <!-- Easy Pie Chart JS -->
  <script src="<?= base_url('public/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js')?>"></script>
	<!-- Apex Chart JS -->
  <script src="<?= base_url('public/assets/plugins/apexcharts/apexcharts.js')?>"></script>
  <!-- Sparkline JS -->
  <script src="<?= base_url('public/assets/plugins/sparkline-charts/jquery.sparkline.min.js')?>"></script>
  <script src="<?= base_url('public/assets/plugins/jquery-knob/excanvas.js')?>"></script>
  <script src="<?= base_url('public/assets/plugins/jquery-knob/jquery.knob.js')?>"></script>
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
  <!-- Index js -->
  <script src="<?= base_url('public/assets/js/index.js')?>"></script>
 
  
  <!--Select Plugins Js-->
    <script src="<?= base_url('public/assets/plugins/select2/js/select2.min.js')?>"></script>
    <!--Inputtags Js-->
    <script src="<?= base_url('public/assets/plugins/inputtags/js/bootstrap-tagsinput.js')?>"></script>
    <!--Bootstrap Datepicker Js-->
    <script src="<?= base_url('public/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>
    <script>
      $('#default-datepicker').datepicker({
        todayHighlight: true
      });
      $('#autoclose-datepicker').datepicker({
        autoclose: true,
        todayHighlight: true
      });
      $('#inline-datepicker').datepicker({
         todayHighlight: true
      });
      $('#dateragne-picker .input-daterange').datepicker({
       });
    </script>
    <!--Multi Select Js-->
    <script src="<?= base_url('public/assets/plugins/jquery-multi-select/jquery.multi-select.js')?>"></script>
    <script src="<?= base_url('public/assets/plugins/jquery-multi-select/jquery.quicksearch.js')?>"></script>
    <script>
        $(document).ready(function() {
            $('.single-select').select2();
            $('.multiple-select').select2();
        //multiselect start
            $('#my_multi_select1').multiSelect();
            $('#my_multi_select2').multiSelect({
                selectableOptgroup: true
            });
            $('#my_multi_select3').multiSelect({
                selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                afterInit: function (ms) {
                    var that = this,
                        $selectableSearch = that.$selectableUl.prev(),
                        $selectionSearch = that.$selectionUl.prev(),
                        selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                        selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';
                    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                        .on('keydown', function (e) {
                            if (e.which === 40) {
                                that.$selectableUl.focus();
                                return false;
                            }
                        });
                    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                        .on('keydown', function (e) {
                            if (e.which == 40) {
                                that.$selectionUl.focus();
                                return false;
                            }
                        });
                },
                afterSelect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                },
                afterDeselect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                }
            });
         $('.custom-header').multiSelect({
              selectableHeader: "<div class='custom-header'>Selectable items</div>",
              selectionHeader: "<div class='custom-header'>Selection items</div>",
              selectableFooter: "<div class='custom-header'>Selectable footer</div>",
              selectionFooter: "<div class='custom-header'>Selection footer</div>"
            });
          });
    </script>
</body>
</html>