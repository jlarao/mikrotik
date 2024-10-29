<?php 
 //require "include/controller/activarHost.inc.php";
require("masterIncludeLogin.inc.php");
?>

 
<!doctype html>
<html>
    <head>
        <title>Listado usuarios</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.tablesorter.min.js"></script>
        <script src="js/jquery.tablesorter.widgets.min.js"></script>
        <script src="js/jquery.tablesorter.pager.min.js"></script>
        <script src="js/tablesort.js"></script>
        <script src="js/popper.min.js"></script>
        <script src=js/bootstrap.min.js></script>
 <?php
			echo $_JAVASCRIPT_CSS;
		?>
   
    </head>
    
    <body>
       <div class="container-fluid">
           <div class="row">
              <div class="col-2">
                <aside id="sidebar-main" class="sidebar">            
        	        <?php include_once('header.php'); ?>            
			        <?php include_once('navhome.php'); ?>            
                </aside><!-- End aside -->            
              </div>
               <div class="col-10">
                  <?php include_once('topnav.php'); ?>
                  <?php echo $mensaje; ?>
                  <div id="mensaje" class="alert " role="alert"></div>
                     
                      <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label" >direccion mac</label>
                      <div class="col-10">
                        <input class="form-control" type="text" value="" id="mac" placeholder="00:00:00:00:00:00" maxlength="17">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-search-input" class="col-2 col-form-label">Nombre persona</label>
                      <div class="col-10">
                        <input class="form-control" type="search" value="" id="nombre">
                      </div>
                    </div>
<!--
                    <div class="form-group row">
                      <label for="example-email-input" class="col-2 col-form-label">Email</label>
                      <div class="col-10">
                        <input class="form-control" type="email" value="" id="example-email-input">
                      </div>
                    </div>
-->
                    <button id="guardar"  type="button" class="btn btn-primary">Submit</button>
                




                   
               </div>
           </div>
       </div>
        
    </body>
    
    <footer>
        
    </footer>
    
</html>