<?php
ini_set('memory_limit', '-1');
// Get the contents of the JSON file 
//$strJsonFileContents = file_get_contents("tuits.json");
//var_dump($strJsonFileContents); // show contents
//$strJsonFileContents = file_get_contents("uno.json");
$strJsonFileContents = file_get_contents("tuitsEDIT.json");
//$strJsonFileContents = file_get_contents("10tweets.json");
//$strJsonFileContents = file_get_contents("1tweets.json");
$array = json_decode($strJsonFileContents, true);
//var_dump(COUNT($array));
//echo json_last_error();
 switch (json_last_error()) {
    case JSON_ERROR_NONE:
        echo ' - No errors';
    break;
    case JSON_ERROR_DEPTH:
        echo ' - Maximum stack depth exceeded';
    break;
    case JSON_ERROR_STATE_MISMATCH:
        echo ' - Underflow or the modes mismatch';
    break;
    case JSON_ERROR_CTRL_CHAR:
        echo ' - Unexpected control character found';
    break;
    case JSON_ERROR_SYNTAX:
        echo ' - Syntax error, malformed JSON';
    break;
    case JSON_ERROR_UTF8:
        echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
    break;
    default:
        echo ' - Unknown error';
    break;
}
echo "<br>";
//var_dump($array);
$users = array();
$users_sin = array();
foreach($array as $clave => $valor){ 
    //echo " id_tweet:"; print_r($valor['id_str']);
    if(is_array($valor['user'])|| is_object($valor['user'])){
      //  echo "id_user:"; print_r($valor['user']['id_str']);
        $users[]=$valor['user']['id_str'];
        if(!in_array($valor['user']['id_str'],$users_sin))
            $users_sin[]=$valor['user']['id_str'];
        //echo "</br>";
        if ($valor['user']['id_str']=="4024930272")
            echo $valor['user']['id_str']."<br>";
    }
    
    
   /* print_r("created_at:".$valor['created_at']);    
    print_r("text:".$valor['text']);
    print_r("source:".$valor['source']);
    
        print_r("truncated:".$valor['truncated']);
    */
        
    //print_r("id:".$valor['created_at']);
 /*   print_r("geo:".$valor['geo']); //array
    print_r("coordinates:".$valor['coordinates']); */   //array
    //echo "place:";
    //print_r($valor['place']);//array
   /* print_r("contributors:".$valor['contributors']);
    print_r("is_quote_status:".$valor['is_quote_status']);
    print_r("retweet_count:".$valor['retweet_count']);    
    print_r("favorite_count:".$valor['favorite_count']);*/
   /* print_r("favorited:".$valor['favorited']);    
    print_r("retweeted:".$valor['retweeted']);
    print_r("possibly_sensitive:".$valor['possibly_sensitive']);//valores no definidos
    print_r("filter_level:".$valor['filter_level']);
    print_r("lang:".$valor['lang']);   */     
    //if(is_array($valor)|| is_object($valor)){
       // echo "<br>";
        //foreach($valor as $c => $v){        
                //echo $c .",";
          //  echo "<br>";
    //    }   
        //echo "<br>";
      //  echo $clave.":". $valor ." ";
        //echo "<br>";
    //}
     //else{
       //  echo $clave.":". $valor ." ";
         //echo "<br>";
//}
    //echo "******************************************************************************************************";
}
echo count($users)."</br>";
    echo count($users_sin)."</br>";
?>
