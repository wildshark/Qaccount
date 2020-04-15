<?php

if((!isset($_SESSION['user_id'])) && (!isset($_SESSION['user_id']))){
    require("frame/login.php");
}else{
    $_SESSION['navigation'] = $_REQUEST['_route'];
    switch($_REQUEST['_route']){

        case"dashboard";
            require("frame/main.php");
        break;

        case"inc-statement";
            $data = income_datasheet();
            $view = "views/income.data.php";
            require("frame/table.php");
        break;

        case"exp-statement";
            $data = expenses_datasheet();
            $view = "views/expenses.data.php";
            require("frame/table.php");
        break;

        case"cash-book";
            $data = cashbook_datasheet();
            $view = "views/cashbook.php";
            require("frame/table.php");
        break;

        case"bank-book";
            $data = bankbook_datasheet();
            $view = "views/bankbook.php";
            require("frame/table.php");
        break;

        case"general-ledger";
            $data = ledger_datasheet();
            $view = "views/ledger.php";
            require("frame/table.php");
        break;



        default:
             require("frame/404.php");
    }


}


?>