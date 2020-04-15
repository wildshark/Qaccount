<?php

function cmb_income(){

    $s['endpoint']="income:list";
    $response = shell\connection($s);
    if($response['error'] !== 200){
        echo"<option></option>";
    }else{
        $data = $response['response'];
        foreach($data as $r){
            echo"<option value='{$r['ledger_id']}'>{$r['ledger']}</option>";
        }
    }
}

function cmb_expenses(){

    $s['endpoint']="expenses:list";
    $response = shell\connection($s);
    if($response['error'] !== 200){
        echo"<option></option>";
    }else{
        $data = $response['response'];
        foreach($data as $r){
            echo"<option value='{$r['ledger_id']}'>{$r['ledger']}</option>";
        }
    }
}

function income_datasheet(){

    $s['endpoint']="income:datasheet";
    $response = shell\connection($s);
    if($response['error'] !== 200){
        return fale;
    }else{
        $data = $response['response'];
        return $data;
    }
}

function expenses_datasheet(){

    $s['endpoint']="expenses:datasheet";
    $response = shell\connection($s);
    if($response['error'] !== 200){
        return fale;
    }else{
        $data = $response['response'];
        return $data;
    }
}

function cashbook_datasheet(){
    $s['endpoint']="cashbook:datasheet";
    $response = shell\connection($s);
    if($response['error'] !== 200){
        return fale;
    }else{
        $data = $response['response'];
        return $data;
    }
}

function  bankbook_datasheet(){
    $s['endpoint']="bankbook:datasheet";
    $response = shell\connection($s);
    if($response['error'] !== 200){
        return fale;
    }else{
        $data = $response['response'];
        return $data;
    }
}

?>