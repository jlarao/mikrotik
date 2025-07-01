<?php 
    //require("masterIncludeLogin.inc.php");
    require "include/controler/cambiarRouter.inc.php";
    $routers = array('10.10.11.1', '10.10.11.3', '10.10.11.4', '10.10.11.5', '200.188.72.42');
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

                  <div class ="row">
                    <div class="col-12">
                        <h1>Cambiar Router</h1>
                    </div>

                    <div class="col-12">
                        <form action="cambiarRouter.php" method="post">
                            <div class="form-group">
                                <label for="router">Router</label>
                                <select class="form-control" id="router" name="router">
                                    <?php
                                        foreach ($routers as $router) {
                                            echo "<option value='$router'>$router</option>";
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Cambiar</button>
                            </div>

                        </form>
                    </div>
                  </div>

               </div>
           </div>
       </div>
        
    </body>
    
    <footer>
        
    </footer>
    
</html>