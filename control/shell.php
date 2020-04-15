<?php

namespace shell;

function connection($data){
   
    $old_error_reporting = error_reporting(E_ALL ^ E_WARNING);

    $application = "business-account";
    $clock = time();
    $token = "";
    $exp="";

    $header = array('application'=>$application,"clock"=>time(),"data"=>$data);
    $post = http_build_query($header);

    if($_SESSION['server'] == 'offline'){
    echo   $url="http://localhost/application_api/?".$post;   
    }elseif($_SESSION['server'] == 'online'){
        $url="https://iquipe-e-app-api.herokuapp.com/?".$post;
    }else{
        header("location: error.php");
    }

    $json = file_get_contents($url);

    error_reporting($old_error_reporting);
    
    if (($json === FALSE) || (!isset($json))) {
        header("location: error.php");
    }else {
        $response = json_decode($json,true);
        return $response;
    }
}

?>