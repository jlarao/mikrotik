<?php include 'activarmenus.php';//var_dump($_SESSION);
//print_r($seccion); print_r($subseccion);
//echo '</pre>';
?>
<div class="sidebar-module">
	<nav class="sidebar-nav-v2">
		<ul>
  		    <?php if($seccion=="Usuarios"):?>
  		    <li <?php if ($subseccion=="listadoUsuarios"){echo 'class="page-arrow active-page"';}?>>
    				<a href="listadoUsuarios.php">
    					<i class="fa fa-money"></i>Activar
    				</a>
        	</li> 	  			
	    	<?php endif; ?>
			
			<?php if($seccion=="Hosts"):?>
			    <li <?php if ($subseccion=="listadoHosts"){echo 'class="page-arrow active-page"';}?>>
    				<a href="listadoHosts.php">
    					<i class="fa fa-money"></i>Desactivar
    				</a>
        	    </li> 	
			<?php endif; ?>

			<?php if($seccion=="PPP"):?>
			    <li <?php if ($subseccion=="listadoppp"){echo 'class="page-arrow active-page"';}?>>
    				<a href="listadoppp.php">
    					<i class="fa fa-money"></i>Desactivar
    				</a>
        	    </li> 	
			<?php endif; ?>
			
	</ul>
		
		
		
		
	</nav><!-- End .sidebar-nav-v1 -->
</div>
