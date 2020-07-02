
<?php
 $this->load->view('secureport/common/header');
?>

<body class="bg-theme bg-theme1">
<!-- Start wrapper-->
 <div id="wrapper">

 <?php
 $this->load->view('secureport/common/headerbar');
?>

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
					

 <?php
 $this->load->view('secureport/common/sidebar');
?>


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
  
   <?php
 $this->load->view('secureport/common/footer');
?>
</body>
</html>