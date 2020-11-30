<?php
include_once('../../controller/tecnologia/Sistema.php');
if (!isset($_SESSION['usuario']) and ! isset($_SESSION['senha'])) {
    header('Location: ../../view/estrutura/login.php?success=F');
}// not isset sessions de login
else {
    $connect = Sistema::getConexao();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php include('../../view/estrutura/title.php'); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<!-- Bootstrap Core CSS -->
		<link href="../tecnologia/css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- Custom CSS -->
		<link href="../tecnologia/css/style.css" rel='stylesheet' type='text/css' />
		<!-- font CSS -->
		<!-- font-awesome icons -->
		<link href="../tecnologia/css/font-awesome.css" rel="stylesheet"> 
		<!-- //font-awesome icons -->
		<!-- js-->
		<script src="../tecnologia/js/jquery-1.11.1.min.js"></script>
		<script src="../tecnologia/js/modernizr.custom.js"></script>
		<!--animate-->
		<link href="../tecnologia/css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="../tecnologia/js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
		<!--//end-animate-->
		<!-- chart -->
		<script src="../tecnologia/js/Chart.js"></script>
		<!-- //chart -->
		<!--circlechart-->
		<script src="../tecnologia/js/jquery.circlechart.js"></script>
		<!--circlechart-->
		<!--Calendario-->
		<link rel="stylesheet" href="../tecnologia/css/clndr.css" type="text/css" />
		<script src="../tecnologia/js/underscore-min.js" type="text/javascript"></script>
		<script src= "../tecnologia/js/moment-2.2.1.js" type="text/javascript"></script>
		<script src="../tecnologia/js/clndr.js" type="text/javascript"></script>
		<script src="../tecnologia/js/site.js" type="text/javascript"></script>
		<!--End Calendario-->
		<!-- Menu Lateral -->
		<script src="../tecnologia/js/metisMenu.min.js"></script>
		<script src="../tecnologia/js/custom.js"></script>
		<link href="../tecnologia/css/custom.css" rel="stylesheet">
		<!--//Menu Lateral-->
		<!-- Custom -->
		<script type="text/javascript" src="../tecnologia/js/jquery-ui.js"></script>
		<script type="text/javascript" src="../tecnologia/js/bootbox.js"></script>
		<link type="text/css" href="../tecnologia/css/jquery-ui.css" rel="stylesheet"/>
		<link type="text/css" href="../tecnologia/css/styleCustom.css" rel="stylesheet"/>
		<link href="../tecnologia/css/jquery.multiselect.css" rel="stylesheet" type="text/css">
		<link type="text/css" href="../tecnologia/css/dashboard.css" rel="stylesheet"/>
		<!--// End Custom -->

		<!-- Charts -->
		<script src="../tecnologia/js/raphael-2.1.4.min.js"></script>
		<script src="../tecnologia/js/dx.all.js"></script>
		<script src="../tecnologia/js/justgage.js"></script>
		<!-- End Charts -->

		<!-- DataTables -->
		<link type="text/css" href="../../view/tecnologia/css/jquery.dataTables.css" rel="stylesheet"/>
		<link type="text/css" href="../../view/tecnologia/css/jquery.dataTables_themeroller.css" rel="stylesheet"/>
		<script src="../../view/tecnologia/js/jquery.dataTables.js"></script>
		<script src="../../view/tecnologia/js/dataTables.uikit.js"></script>
		<!-- DataTables -->

		<!-- Calendario -->
		<script type="text/javascript" src="../tecnologia/js/bootstrap-datepicker.js"></script>
		<script type="text/javascript" src="../tecnologia/js/bootstrap-datepicker.pt-BR.min.js"></script>
		<link type="text/css" href="../tecnologia/css/bootstrap-datepicker.css" rel="stylesheet"/>
		<style type="text/css">
			body,td,th {
				font-family: "Segoe UI Light";
			}
		</style>
		<!-- End Calendario -->

		<!-- Relogio -->
		<script language="javascript" type="text/javascript" src="../../view/tecnologia/js/jquery.thooClock.js"></script>  
		<!-- End Relogio -->

	</head>
	<!--body class="cbp-spmenu-push dashboardBody" id="bodyFullScreen"-->
	<body class="cbp-spmenu-push dashboardBody">
		<div id="loader"></div>
		<div class="main-content">
			<!--left-fixed -navigation-->
			<div class=" sidebar" role="navigation">
				<div class="navbar-collapse">
					<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
						<?php
						include('../../view/estrutura/menu.php');
						?>
					</nav>
				</div>
			</div>

			<!--left-fixed -navigation-->
			<!-- header-starts -->
			<div class="sticky-header header-section ">

				<!--toggle button start-->
				<button id="showLeftPush" ><i class="fa fa-bars"></i></button>
				<!--toggle button end-->

				<div class="topBar">
					<?php

					include('../../view/estrutura/navBarLogo.php');

					if (!empty($_SESSION['complementoTitulo'])) {
						print( limitarTexto($_SESSION['complementoTitulo'], $limite = 30));
					} else if ($NomeFilial > null) {
						print( limitarTexto($NomeFilial, $limite = 30));
					} else {
						print( limitarTexto($NomeEmpresa, $limite = 30));
					}
					?>
				</div>
				
				<!--div class="topBarRight">
									<button class="botaoTop" onclick="toggleFullScreen()"><i class="fa fa-arrows-alt"></i></button>
				</div-->


			</div>


			<div class="clearfix"> </div>	
		</div>
		

		<div class="overlay"> &nbsp; </div>
		<div class="main-page charts-page">
			<h3 class="title1"></h3>
			<div class="charts">
				<?php //include('../../model/dashboard/painelModel.php') ?>
			</div>
		</div>

	</div>


<!--
	
	<div class="footer">
	   <img src="../tecnologia/img/rodape.jfif" >
	</div>
	<!--//footer-->
</div>


<!-- Classie -->
<script src="../tecnologia/js/classie.js"></script>
<!--scrolling js-->
<script src="../tecnologia/js/script.js"></script>
<script src="../tecnologia/js/dashboard.js"></script>
<!--//scrolling js-->
<!-- Bootstrap Core JavaScript -->
<script src="../tecnologia/js/bootstrap.js"></script>
<!-- jQueryMobile Core JavaScript -->
</body>
</html>

<?php
}
?>