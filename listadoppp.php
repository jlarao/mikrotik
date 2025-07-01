<?php 
    require("masterIncludeLogin.inc.php");
    //require "include/controller/listadoHosts.inc.php";
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
                   <table class="table  table-hover" id="tablesorting-1">
												<thead>
													<tr>
														<th scope="col">user</th>
														<th scope="col">type</th>
														<!-- <th scope="col">Tiempo</th>
                                                        <th scope="col">Descarga</th>
														<th scope="col">Subida</th> -->
														<th scope="col">usuario</th>
														<th scope="col">autorizado</th>
														
             	                                      
													</tr>
												</thead>
												<tbody id="divListado">
                                                <?php echo $listado; ?>
												</tbody>
                                                <tfoot>
                  												<tr>
                  													<td colspan="7" class="pager form-horizontal">
                  														<button class="btn first"><i class="fa fa-step-backward"></i></button>
                  														<button class="btn prev"><i class="fa fa-arrow-left"></i></button>
                  														<span class="pagedisplay"></span> <!-- this can be any element, including an input -->
                  														<button class="btn next"><i class="fa fa-arrow-right"></i></button>
                  														<button class="btn last"><i class="fa fa-step-forward"></i></button>
                  														<select class="pagesize input-xs" title="Select page size">
                  															<option value="50" selected="selected">50</option>
                  															<option value="100">100</option>
                  															<option value="200">200</option>
                  															<option value="300">300</option>
                  														</select>
                  														<select class="pagenum input-xs" title="Seleccione P&aacute;gina"></select>
                  													</td>
                  												</tr>
                  											</tfoot>
                                    		</table>
               </div>
           </div>
       </div>
        
    </body>
    
    <footer>
        
    </footer>
    
</html>