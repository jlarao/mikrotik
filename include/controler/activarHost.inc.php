<?php 
$mensaje="";
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
       $mensaje = '<div class="alert alert-danger" role="alert"> Id no valido.</div>';
    }
    else{
     require "routeros_api.class.php";
    $api = new RouterosAPI();
    $data = new StdClass();
    
    if($api->connect($host_mkt,'admin','PinoSuar')){
        /*  busca en hotspot host el id que pasa por parametro id user*/
        $api->write('/ip/hotspot/user/print',false);
        $api->write('?.id='.$_GET['id']);
        $read = $api->read(false);
        $user = $api->parseResponse($read);    //            print_r($user);
        //$api->write('/ip/hotspot/host/print',false);   
        //$api->write('?.id='.$_GET['id']);
        //$read = $api->read(false);
        //$host = $api->parseResponse($read);     //        print_r($host); echo "<br>" ;        
        //$mensaje= $user;                
        if(count($user)>0){                    
            /**********************************habilitar deshabilitar hotspot *********************************************/        
            /* busca por la mac en hotspot user para deshabilitarlo*/
            //print_r($user);
            //$api->write('/ip/hotspot/user/print',false);
            //$api->write('?name='.$host[0]['mac-address']);
            //$read = $api->read(false);
            //$user = $api->parseResponse($read);    //            print_r($user);
            if(count($user)>0){
                /* deshabilita el usuario */
                $api->write('/ip/hotspot/user/enable',false);    
                $api->write("=.id=".$user[0][".id"],true);  //                echo "<br>" ;
                $read = $api->read(false);
                $enable = $api->parseResponse($read);    //               print_r($desable);
                //print_r($enable);
                
                $mensaje .= '<div class="alert alert-success" role="alert">Usuario habilitado con exito.</div>'; 
                /************************************************************************************/
                /* busca en hotspot host por la mac  **/
                $api->write('/ip/hotspot/host/print',false);   
                $api->write('?mac-address='. $user[0]['mac-address']);
                $read = $api->read(false);
                $hosts = $api->parseResponse($read); //                print_r($hosts); echo "<br>" ;
                //print_r($hosts);
                
                /****************                        remover del host                        **********************************/
                if(count($hosts)>0){
                    for($i=0; $i<count($hosts);$i++){
                        $api->write('/ip/hotspot/host/remove',false);
                        $api->write('=.id='.$hosts[$i]['.id']);
                        $read = $api->read(false);
                        $res = $api->parseResponse($read);    //echo "<br>" ;print_r($res);   
                        $mensaje .= '<div class="alert alert-success" role="alert">Host removidos con exito '.$hosts[$i]['mac-address'].'.</div>'; 
                    }
                    $api->disconnect();
                    //print_r($hosts);
                }else{
                    $mensaje .= '<div class="alert alert-danger" role="alert">No se encontraron host que remover.</div>'; 
                }
            }
            else{
                $mensaje .= '<div class="alert alert-danger" role="alert">No se encontre el user con la mac proporcionado</div>'; 
            }
        }else{
           $mensaje .= '<div class="alert alert-danger" role="alert">No se encontre el host con el id proporcionado</div>'; 
        }
        }
    else{
        $mensaje .= '<div class="alert alert-danger" role="alert">conexion fallida</div>'; 
    }
    }
}else{
    $mensaje = '<div class="alert alert-danger" role="alert">necesita especificar un id.</div>';
}

?>


