<?php

switch($_REQUEST['_submit']){

    case"login";

        $_POST['endpoint'] = "user:login";
        $response = shell\connection($_POST);
        if($response['error'] !== 200){
            require("frame/login.php");
        }else{
            unset($_POST);
            $_SESSION['user_id'] = $response['response']['user_id'];
            $_SESSION['account_id'] = $response['response']['account_id'];
            $_SESSION['token']=md5($_SESSION['user_id'].$_SESSION['account_id']);
            header("location: ?_route=dashboard&token={$_SESSION['token']}&err=200");
        }
    break;

    case"sign-up";
        $_POST['endpoint'] = "user:create";
        $response = shell\connection($_POST);
        if($response['error'] !== 200){
            require("frame/login.php");
        }else{
            unset($_POST);
            $_SESSION['user_id'] = $response['response']['user_id'];
            $_SESSION['account_id'] = $response['response']['account_id'];
            $_SESSION['token']=md5($_SESSION['user_id'].$_SESSION['account_id']);
            header("location: ?_route=dashboard&token={$_SESSION['token']}&err=200");
        }
    break;

    default:
        $action = $_REQUEST['_submit'];
        $action = explode("-",$action);
        if($action[0] === 'income'){
            switch($action[1]){
                case"add";
                    $_REQUEST['endpoint']="income:add";
                    $response = shell\connection($_REQUEST);
                    if($response['error'] !== 200){
                        print_r($response);
                        exit();
                        $response = false;
                    }else{
                        $response = true;
                    }
                    $_SESSION['navigation']="inc-statement";
                break;
            }
            if($response == false){
                header("location: ?_route={$_SESSION['navigation']}&token={$_SESSION['token']}&err=400");
            }else{
                header("location: ?_route={$_SESSION['navigation']}&token={$_SESSION['token']}&err=200");
            }

        }elseif($action[0]==='expenses'){
            switch($action[1]){
                case"add";
                    $_REQUEST['endpoint']="expenses:add";
                    $response = shell\connection($_REQUEST);
                    if($response['error'] !== 200){
                        print_r($response);
                        exit();
                        $response = false;
                    }else{
                        $response = true;
                    }
                    $_SESSION['navigation']="exp-statement";
                break;

            }
            if($response == false){
                header("location: ?_route={$_SESSION['navigation']}&token={$_SESSION['token']}&err=400");
            }else{
                header("location: ?_route={$_SESSION['navigation']}&token={$_SESSION['token']}&err=200");
            }
        }else{
           require("frame/404.php"); 
        }
        

}

?>