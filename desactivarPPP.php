<?php 
 //require "include/controler/desactivarHost.inc.php";
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

    </head>
    
    <body>
       <div class="container">
           <div class="row">
              <div class="col-2">
                <aside id="sidebar-main" class="sidebar">            
        	        <?php include_once('header.php'); ?>            
			        <?php include_once('navhome.php'); ?>            
                </aside><!-- End aside -->            
              </div>
               <div class="col-10">
                  <?php include_once('topnav.php'); ?>
                  <p></p>
                  <p></p>
                  <p></p>
                   <?php echo $mensaje; ?>
               </div>
           </div>
       </div>
        
    </body>
    
    <footer>
        
    </footer>
    
</html>