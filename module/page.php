<?php

switch($_REQUEST['_page']){

    case"register";
        require("frame/register.php");
    break;

    case"login";
        require("frame/login.php");
    break;

    default:
        require("frame/login.php");
}


?>