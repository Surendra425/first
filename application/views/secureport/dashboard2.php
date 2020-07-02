<?php
 $this->load->view('secureport/common/header');
?>
<body class="bg-theme bg-theme1">
<!-- Start wrapper-->
 <div id="wrapper">
<!--start top-wrapper-->
 <?php
 $this->load->view('secureport/common/headerbar');
?>
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
       <div class="card-header"><p>Limpiezas y Desinfecciones</p>
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
             <h4 class="mb-0">52</h4>
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
                     <th>último reporte</th>
                     <th>Climpiador</th>
                     <th>Próxima</th>
					 <th>Cantidad diaria</th>
                     <th>Calificación</th>
                   </tr>
                   </thead>
                   <tbody>
					<tr>
                    <td>Iphone 5</td>
                    <td><img src="https://via.placeholder.com/110X110" class="product-img" alt="product img"></td>
                    <td>#9405822</td>
                    <td>$ 1250.00</td>
                    <td>text</td>
					<td>03 Aug 2017</td>   
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>HD Hand Camera</td>
                    <td><img src="https://via.placeholder.com/110X110" class="product-img" alt="product img"></td>
                    <td>#9405830</td>
                    <td>$ 1400.00</td>
					   <td>text</td>
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
					   <td>text</td>
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
					   <td>text</td>
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
					   <td>text</td>
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
       <div class="col-12 col-lg-4 col-xl-4">
          <div class="card">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body">
               <h3 class="mt-3 mb-0">54</h3>
                 <p class="mb-0">Uso de epp</p>
              </div>
                <div class="card-content dash-array-chart-box">
                 <div id="interviews"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body">
               <h3 class="mt-3 mb-0">82</h3>
                 <p class="mb-0">Disposición Respel</p>
              </div>
                <div class="card-content dash-array-chart-box">
                 <div id="assignments"></div>
                </div>
              </div>
            </div>
          </div>  
       </div>
       <div class="col-12 col-lg-8 col-xl-8">
	   	<div class="row row-group m-0">
			<div class="col-12 col-xl-6">
					<div class="card">
						<div class="card-header">
							Customer Satisfaction 2018
							<div class="card-action">
								<div class="dropdown">
									<a class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="javascript:void();"><i class="icon-options"></i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="javascript:void();">Action</a> <a class="dropdown-item" href="javascript:void();">Another action</a> <a class="dropdown-item" href="javascript:void();">Something else here</a>
										<div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:void();">Separated link</a>
									</div>
								</div>
							</div>
						</div>	
						<div class="card-body">

							<div class="text-center">
								<span class="pie" data-peity='{ "fill": ["#ffffff", "rgba(255, 255, 255, 0.14)"]}'>3/5</span>
							</div>
							<hr>
							<p class="mb-0"><i class="fa fa-circle text-white"></i> Satisfied : <span class="badge badge-pill badge-light float-right">65%</span></p>
							<p class="mb-0"><i class="fa fa-circle text-light-3"></i> Unsatisfied : <span class="badge badge-pill bg-light float-right">35%</span></p>
						</div>
					</div>
			</div>	
			<div class="col-12 col-xl-6">
				<div class="card">
				<div class="card-header">
					Avg Time To Solve An Issue
					<div class="card-action">
						<div class="dropdown">
							<a class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="javascript:void();"><i class="icon-options"></i></a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="javascript:void();">Action</a> <a class="dropdown-item" href="javascript:void();">Another action</a> <a class="dropdown-item" href="javascript:void();">Something else here</a>
								<div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:void();">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="progress-wrapper mb-4">
						<p>Less than 1 Hour<span class="float-right">80%</span></p>
						<div class="progress" style="height:7px;">
							<div class="progress-bar" style="width:70%"></div>
						</div>
					</div>
					<div class="progress-wrapper mb-4">
						<p>1-2 Hours<span class="float-right">60%</span></p>
						<div class="progress" style="height:7px;">
							<div class="progress-bar" style="width:60%"></div>
						</div>
					</div>
					<div class="progress-wrapper mb-4">
						<p>More Then 2 Hours <span class="float-right">40%</span></p>
						<div class="progress" style="height:7px;">
							<div class="progress-bar" style="width:40%"></div>
						</div>
					</div>
					<div class="progress-wrapper">
						<p>More Then 5 Hours <span class="float-right">20%</span></p>
						<div class="progress" style="height:7px;">
							<div class="progress-bar" style="width:20%"></div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	</div>
	 
   </div>	
      <!--End Dashboard Content-->
	  <!--start overlay-->
	  <div class="overlay mobile-btn"></div>
	<!--end overlay-->

    <!-- End container-fluid-->
</div>
</div>
</div><!--End content-wrapper-->
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