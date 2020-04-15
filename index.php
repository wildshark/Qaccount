<?php

session_start();
include "control/global.php";
include "control/template.php";
include "control/shell.php";
include "module/dataset.php";

//kick start application
$_SESSION['server'] = 'offline';

//route application navgation
if(!isset($_REQUEST['_submit'])){
    if(!isset($_REQUEST['_route'])){
        if(!isset($_REQUEST['_page'])){
            require("frame/login.php");
        }else{
            require("module/page.php");
        } //end page
    }else{
        //view rout
        require("module/navigation.php");
    }
}else{
    //action
    require("module/action.php");
}


?>