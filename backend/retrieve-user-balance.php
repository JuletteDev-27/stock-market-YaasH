<?php

include_once 'dbconn.php';

$data = [];
try{
    $uID = $_POST['uID'];
    $get_user_balance = "SELECT user_balance as `uBalance` from table_users where `user_id` = '$uID'";
    $get_user_balance_query = mysqli_query($conn, $get_user_balance);

    if(!$get_user_balance_query){
        $data['error_type'] = "sql_error";
        $data['error'] = mysqli_error($conn);
        mysqli_close($conn);
        echo json_encode($data);
        return;
    }

    $user_balance = mysqli_fetch_assoc($get_user_balance_query);
    $data['error_type'] = "success";
    $data['user_balance'] = $user_balance['uBalance'];
    mysqli_close($conn);
    echo json_encode($data);

}catch(Exception $e){
    $data['error'] = $e->getMessage();
    echo json_encode($data);
}


