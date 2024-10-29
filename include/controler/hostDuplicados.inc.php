<?php 

require "routeros_api.class.php";
    $api = new RouterosAPI();
    $data = new StdClass();
    

    if($api->connect($host_mkt,'admin','PinoSuar')){        
        $api->write('/ip/hotspot/host/print',false);   
        $api->write('?mac-address=64:D1:54:72:6B:45');
        $read = $api->read(false);
        $hosts = $api->parseResponse($read); //                print_r($hosts); echo "<br>" ;
        print_r($hosts);                        
        echo "**************************fin busqueda *****************************************<br>";
        for($i=0; $i<count($hosts);$i++){
            //print_r($hosts[$i]);
            //$api->write('/ip/hotspot/host/print',false);   
            //$api->write('?mac-address='. $host[0]['mac-address']);
            echo $hosts[$i]['.id'] ."<br>";
            $api->write('/ip/hotspot/host/print',false);   
            $api->write('?.id='.$hosts[$i]['.id']);
            //$api->write('/ip/hotspot/host/remove',false);
            //$api->write('=.id='.$hosts[0]['.id']);
            $read_h = $api->read(false);
            $host = $api->parseResponse($read_h); // 
            echo " ********************************* host nicio ************************* <br>";
            print_r($host);
            echo " ********************************* host fin ************************* <br>";
            echo "<br>";
        }
        $api->disconnect();
    }

?>


