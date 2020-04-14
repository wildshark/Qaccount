<?php

switch($_REQUEST['_submit']){

    case"login";

        if($_REQUEST['username'] ==="admin" && $_REQUEST['password'] ==="admin"){
            header("location: ?_route=dashboard");
        }else{
            echo"failed";
        }
        //var_dump($_REQUEST);
    
    break;

    case"sign-up";
        var_dump($_REQUEST);
    break;

}

?>