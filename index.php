<?php

session_start();
include "control/global.php";
include "control/template.php";

exit();

if(!isset($_REQUEST['_submit'])){
    if(!isset($_REQUEST['_route'])){
        if(!isset($_REQUEST['_page'])){
            require("frame/login.php");
        }else{
            require("model/page.php");
        } //end page
    }else{
        //view rout
        require("model/navigation.php");
    }
}else{
    //action
    require("model/action.php");
}


?>