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
        /*  busca en hotspot host el id que pasa por parametro id*/
        $api->write('/ppp/secret/print',false);   
        $api->write('?.id='.$_GET['id']);
        $read = $api->read(false);
        $host = $api->parseResponse($read);     // 
        
        // var_dump($host); echo "<br>" ; 
            //    die();
        if(count($host)>0){                    
            /**********************************habilitar deshabilitar hotspot *********************************************/        
            /* busca por la mac en hotspot user para deshabilitarlo*/
            $api->write('/ppp/secret/print',false);
            $api->write('?name='.$host[0]['name']);
            $read = $api->read(false);
            $user = $api->parseResponse($read);    //            
            // print_r($user); die();
            if(count($user)>0){
                /* deshabilita el usuario */
                $api->write('/ppp/secret/enable',false);    
                $api->write("=.id=".$user[0][".id"],true);  //                echo "<br>" ;
                $read = $api->read(false);
                $desable = $api->parseResponse($read);    //               print_r($desable);
                $mensaje .= '<div class="alert alert-success" role="alert">Usuario habilitado con exito.</div>'; 
                /************************************************************************************/
                /* busca en hotspot host por la mac  **/
                $api->write('/ppp/active/remove',false);   
                $api->write('?name='. $host[0]['name']);
                $read = $api->read(false);
                $hosts = $api->parseResponse($read); //                
                print_r($hosts); echo "<br>" ;
                /****************                        remover del host                        **********************************/
                // if(count($hosts)>0){
                //     for($i=0; $i<count($hosts);$i++){
                //     $api->write('/ip/hotspot/host/remove',false);
                //     $api->write('=.id='.$hosts[$i]['.id']);
                //     $read = $api->read(false);
                //     $res = $api->parseResponse($read);    //echo "<br>" ;print_r($res);   
                    $mensaje .= '<div class="alert alert-success" role="alert">Host activado con con exito .</div>'; 
                //     }
                //     $api->disconnect();
                // }else{
                //     $mensaje .= '<div class="alert alert-danger" role="alert">No se encontraron host que remover.</div>'; 
                // }
            }
            else{
                $mensaje .= '<div class="alert alert-danger" role="alert">No se encontre el user con la mac proporcionado</div>'; 
            }
        }else{
           $mensaje .= '<div class="alert alert-danger" role="alert">No se encontre el host con el id proporcionado</div>'; 
        }
        }else{
        $mensaje .= '<div class="alert alert-danger" role="alert">conexion fallida</div>'; 
    }
    }
}else{
    $mensaje = '<div class="alert alert-danger" role="alert">necesita especificar un id.</div>';
}

?>


