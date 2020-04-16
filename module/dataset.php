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
        return false;
    }else{
        $data = $response['response'];
        return $data;
    }
}

function expenses_datasheet(){

    $s['endpoint']="expenses:datasheet";
    $response = shell\connection($s);
    if($response['error'] !== 200){
        return false;
    }else{
        $data = $response['response'];
        return $data;
    }
}

function cashbook_datasheet(){
    $s['endpoint']="cashbook:datasheet";
    $response = shell\connection($s);
    if($response['error'] !== 200){
        return false;
    }else{
        $data = $response['response'];
        return $data;
    }
}

function bankbook_datasheet(){
    $s['endpoint']="bankbook:datasheet";
    $response = shell\connection($s);
    if($response['error'] !== 200){
        return false;
    }else{
        $data = $response['response'];
        return $data;
    }
}

function ledger_datasheet(){
    $s['endpoint']="ledger:summary";
    $s['ledger_id'] = null;
    $response = shell\connection($s);
    if($response['error'] !== 200){
        return false;
    }else{
        $data = $response['response'];
        return $data;
    }
}

function ledger_details_datasheet($ledger){
    $summary['endpoint']="ledger:summary";
    $summary['ledger_id'] = $ledger;
    $response = shell\connection($summary);
    if($response['error'] !== 200){
        $summary = false;
    }else{
        $summary = $response['response'][0];
    }

    $data['endpoint']="ledger:datasheet";
    $data['ledger_id'] = $ledger;
    $response = shell\connection($data);
    if($response['error'] !== 200){
        $data = false;
    }else{
        $data = $response['response'];
    }

    return array("summary"=>$summary,"data"=>$data);
}

function coa(){
    $s['endpoint']="coa:fetch";
    $response = shell\connection($s);
    if($response['error'] !== 200){
        $s = false;
    }else{
        $s = $response['response'][0];
    }
}

?>