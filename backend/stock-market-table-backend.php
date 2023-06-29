<?php

   include_once 'dbconn.php';

    $data = [];

   $get_stocks = "SELECT 
    `stock_id` as `sID`,
    `stock_name` as `sName`,
    `stock_price` as `sPrice`,
    `stock_fluctuation` as `sFluc`,
    `stock_fluctuation_status` as `sStatus`
    FROM table_stocks ";

    $get_stocks_query = mysqli_query($conn, $get_stocks);

    if(!$get_stocks_query){
        $data["error_type"] = "sql_error";
        $data["error"] = "Error".mysqli_error($conn);
        mysqli_close($conn);
        echo json_encode($data);
    }

    $result = mysqli_fetch_all($get_stocks_query);
    $data = $result;
    mysqli_close($conn);
    echo json_encode($data);