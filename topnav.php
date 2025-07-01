	<header id="header-main">
            	<div class="header-main-top">
                	<div class="pull-left">
                    	<a href="index.php" id="logo-small"><h4>inicio</h4></a>
                    </div>
                    <div class="pull-right">                        
                    	<!-- * This is the trigger that will show/hide the menu * -->
                        <!-- * if the layout is in responsive mode              * -->                        
						<a id="responsive-menu-trigger" class="btn btn-dark"  href="listadoUsuarios.php"> Usuarios
                        	<i class="fa fa-bars"></i>                        	
                        </a>
                        <a  id="responsive-menu-trigger" class="btn btn-light" href="listadoHosts.php"> Hosts
                        	<i class="fa fa-bars"></i>
                        </a>
                        <a  id="responsive-menu-trigger" class="btn btn-secondary" href="agregarMac.php"> Agregar Mac
                        	<i class="fa fa-bars"></i>
                        </a>
                        <a  id="responsive-menu-trigger" class="btn btn-secondary" href="listadoppp.php"> Activar Cuenta Fibra                        	
                            <i class="fa fa-bars"></i>
                        </a>
                        <a  id="responsive-menu-trigger" class="btn btn-secondary" href="listadopppDesactivate.php"> Desactivar Cuenta Fibra                        	
                            <i class="fa fa-bars"></i>
                        </a>

                  </div>
                </div>
                 
                <div class="header-main-bottom">
                	<div>
                    	<ul class="breadcrumb">  
                           <?php if ($seccion=="Usuarios"){ ?>
                            <li class="active"><a href="listadoUsuarios.php"> Usuarios</a></li>
                            <?php } if ($seccion=="Hosts"){      ?>    
                            <li class="active"><a href="listadoUsuarios.php"> Hosts</a></li>
                            <?php } if ($seccion=="agregarMac"){      ?>    
                            <li class="active"><a href="agregarMac.php"> agregar mac</a></li>
                            <?php } if ($seccion=="listadoppp"){      ?>    
                            <li class="active"><a href="listadoppp.php"> Cuentas</a></li>
                            <?php }   ?>
                            
                        </ul>
                        <!-- End .breadcrumb -->
                        
                    </div>
                    
                </div>
                     
            </header><!-- End #header-main --> 
