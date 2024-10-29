<?php
//	require_once "masterIncludeLogin.inc.php";
	//unset($_SESSION['import']);
print_r($_FILES);
if(isset($_FILES)&&isset($_FILES['flArchivo']))
	{
    echo "primero".$_FILES['flArchivo']['error'];
		if($_FILES['flArchivo']['error']==0)
		{
            echo "segundo";
             $fileName = $_FILES["flArchivo"]["tmp_name"];   
        echo "entro";
        $pf = fopen($fileName, "r");
        $lineaCabecera=fgets($pf);
            $Date,$Open,$High,$Low,$Close;
            
            $DateD,$OpenD,$HighD,$LowD,$CloseD;
            
            
            while($line=fgets($pf))
		      {
			     $line=trim($line);
                if($line!='')
			     {
				$separacion=explode(",",$line);
                print_r($separacion);
                }
                
                die($line);
        }
        }else{
            echo "erroe";
        }
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="ie ie6 lte9 lte8 lte7 no-js"> <![endif]-->
<!--[if IE 7]>     <html class="ie ie7 lte9 lte8 lte7 no-js"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8 lte9 lte8 no-js">      <![endif]-->
<!--[if IE 9]>     <html class="ie ie9 lte9 no-js">           <![endif]-->
<!--[if gt IE 9]>  <html class="no-js">                       <![endif]-->
<!--[if !IE]><!--> <html class="no-js">                       <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Importar Beneficiarios</title>
    <!-- // IOS webapp icons // -->
    <meta name="apple-mobile-web-app-title" content="Karma Webapp">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/mobile/apple-touch-icon-152x152.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/mobile/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/mobile/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/mobile/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="images/mobile/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/mobile/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" href="images/mobile/apple-touch-icon.png" />
    <link rel="shortcut icon" href="images/favicons/favicon.ico" />

    <!-- // IOS webapp splash screens // -->
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)"
          href="/images/mobile/apple-touch-startup-image-1536x2008.png"/>

    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)"

          href="/images/mobile/apple-touch-startup-image-1496x2048.png"/>

 	<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)"

          href="/images/mobile/apple-touch-startup-image-768x1004.png"/>

    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)"

          href="/images/mobile/apple-touch-startup-image-748x1024.png"/>

    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)"

          href="/images/mobile/apple-touch-startup-image-640x1096.png"/>

    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)"

          href="/images/mobile/apple-touch-startup-image-640x920.png"/>

    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)"

          href="/images/mobile/apple-touch-startup-image-320x460.png"/>



    <!-- // Windows 8 tile // -->

    <meta name="application-name" content="Unifica">

    <meta name="msapplication-TileColor" content="#333333" />

	<meta name="msapplication-TileImage" content="images/mobile/windows8-icon.png" />



    <!-- // Handheld devices misc // -->

    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta name="HandheldFriendly" content="true"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />



    <!-- // Stylesheets // -->

    <link rel="stylesheet" href="bootstrap/core/dist/css/bootstrap.min.css"/>

    <link rel="stylesheet" href="bootstrap/typeahead/typeahead.min.css"/>

    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css"/>

    <link rel="stylesheet" href="css/bootstrap-custom.css"/>

    <link rel="stylesheet" href="css/bootstrap-extended.css"/>

    <link rel="stylesheet" href="css/animate.min.css"/>

    <link rel="stylesheet" href="css/helpers.css"/>

    <link rel="stylesheet" href="css/base.css"/>

    <link rel="stylesheet" href="css/light-theme.css"/>

    <link rel="stylesheet" href="css/mediaqueries.css"/>



    <!-- // Helpers // -->

    <script src="js/plugins/modernizr.min.js"></script>

    <script src="js/plugins/mobiledevices.js"></script>



    <!-- // jQuery core // -->

    <script src="js/libs/jquery-1.11.0.min.js"></script>

    <script src="js/libs/jquery-ui-1.10.4.min.js"></script>



    <!-- // Bootstrap // -->

    <script src="bootstrap/core/dist/js/bootstrap.min.js"></script>

	<script src="bootstrap/bootboxjs/bootboxjs.min.js"></script>



    <script src="bootstrap/typeahead/typeahead.min.js"></script>



    <!-- // Custom/premium plugins // -->

    <script src="js/plugins/mainmenu.1.0.min.js"></script>

    <script src="js/plugins/bootstraptabsextend.1.0.min.js"></script>

 	<script src="js/plugins/nanogress.1.0.min.js"></script>

    <script src="js/plugins/simpleselect.1.0.min.js"></script>



    <!-- // Third-party plugins // -->

    <script src="js/plugins/tinyscrollbar.min.js"></script>

    <!-- mouse wheel opt-->

    <script src="js/plugins/h5f.min.js"></script>

    <script src="js/plugins/hogan-2.0.0.js"></script>

    <script src="js/plugins/jquery.autosize-min.js"></script>

    <script src="js/plugins/layout.min.js"></script>

    <script src="js/plugins/masonry.pkgd.min.js"></script>

    <!-- table sort -->

    <script src="js/plugins/jquery.tablesorter.min.js"></script>

    <script src="js/plugins/jquery.tablesorter.widgets.min.js"></script>

    <script src="js/plugins/jquery.tablesorter.pager.min.js"></script>



    <!-- // Custom //-->

    <script src="js/plugins/generics.js"></script>

    <script src="js/plugins/tablesort.js"></script>


    <!-- Alerts And System JS-->
	<?php
	// echo URL_FILES_ALERT;
	echo $_JAVASCRIPT_CSS;
	?>



</head>

<body>

	<div id="container" class="clearfix">



		<aside id="sidebar-main" class="sidebar">
        	<?php include_once('header.php'); ?>
        	<?php include_once('usrnav.php'); ?>
        </aside>




        <div id="main" class="clearfix">



			<?php include_once('topnav.php'); ?>



            <div id="content" class="clearfix">





                <header id="header-sec">

                	<div class="inner-padding">

                        <div class="pull-left">

                            <h2><i class="fa fa-sort-alpha-asc"></i> &nbsp;Importar Beneficiarios</h2>

                        </div>

                    </div>

            	</header>





                <div class="window">
                    <div class="row ext-raster">

                    	<div class="col-sm-12">

                            <div class="row">

                            	<div class="col-sm-12">

                                    <div class="inner-padding">
                                    	<?php if(!isset($_SESSION['import'])):?>

		                                    <form action="importar.php" method="POST" enctype="multipart/form-data">

			                                    <div class="form-group">
			                                    	<label for="">Selecciona el archivo con la informacion que se importara</label>
			                                    	<input type="file"  name="flArchivo" id="flArchivo"/>Se permiten archivos CVS delimitado por <strong>COMA (,)</strong><br />Codificaci&oacute;n UTF8<br />Primera linea con nombres de campos<br />M&aacute;ximo 8MB
			                                    </div>

			                                    <div class="form-group">
			                                    	<button class="btn btn-primary">Subir Archivo</button>
			                                    </div>

		                                    </form>
		                                    <div class="col-sm-12" style="visibility:hidden">
												<button id="btnEjecutar" class="btn btn-success form-control" style="visibility:hidden">Ejecutar inserci&oacute;n/actualizaci&oacute;n de registros</button>
												<button id="btnCancelar" class="btn btn-danger form-control" style="visibility:hidden">Cancelar acci&oacute;n</button>
											</div>
										<?php else:?>
											<div class="col-sm-12">


												<table class="table ">
													<thead>
														<tr>
															<th>Disponible</th>
															<th>Asociado</th>
														</tr>
													</thead>
													<tbody>
														<?php echo $rows?>
													</tbody>
												</table>
											</div>

											<div class="col-sm-12">
												<button id="btnEjecutar" class="btn btn-success form-control">Ejecutar inserci&oacute;n/actualizaci&oacute;n de registros</button>
												<button class="btn btn-danger form-control btnCancelar">Cancelar acci&oacute;n</button>
												<button class="btn btn-primary form-control btnCancelar">Nueva Operaci&oacute;n</button>
											</div>


	                                    <?php endif;?>

                                    </div>

                                </div>

                            </div><!-- End .row -->

                        </div>



                    </div>

                </div><!-- End .window -->





                <footer id="footer-main">

                    <div class="footer-main-inner">

                        <div class="pull-left">

                            <p>Copyright &copy; 2016 Planet Communication</p>

                        </div>

                        <div class="pull-right">

                        	<p>soporte@planetcommunication.net</p>

                        </div>

                    </div><!-- End .footer-main-inner -->



					<!-- ----------------------------------------------------------------------------------------- -->
					<!-- --------------------------Seccion de alertas y mensajes modales-------------------------- -->
					<!-- ----------------------------------------------------------------------------------------- -->

					<button id="_alertShow" type="button" class="btn btn-primary" data-toggle="modal" data-target=".aviso-modal-sm" style="display:none">&nbsp;</button>

					<div id="_modalDiv" class="modal fade aviso-modal-sm">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"  id="_alertCloseUp">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title" id="_alertTitle">Aviso</h4>
								</div>
								<div class="modal-body" id="_alertBody"></div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal" id="_alertClose">Cerrar</button>
								</div>
							</div>
						</div>
					</div>

					<!-- ----------------------------------------------------------------------------------------- -->
					<!-- ----------------------Fin de seccion de alertas y mensajes modales----------------------- -->
					<!-- ----------------------------------------------------------------------------------------- -->


                </footer><!-- End #footer-main -->

            </div><!-- End #content -->

    	</div>

    	<!-- End #main -->





    </div>

    <!-- End #container -->

</body>

</html>