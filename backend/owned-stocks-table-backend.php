<?php

    include_once "dbconn.php";

    $data = [];
    try{
        $uID = mysqli_real_escape_string($conn, $_POST['uID']);

        $get_userStocks = "SELECT 
         `a`.`stock_id` as `sID`,
        `b`.`stock_name` as `sName`,
        `a`.`userStocks_quantity` as `quantity_owned`,
        `b`.`stock_price` as `sPrice`
        FROM `table_userstocks` `a`
        JOIN `table_stocks` `b` ON `a`.`stock_id` = `b`.`stock_id`
        WHERE `a`.`user_id` = '$uID'";

        $get_userStocks_query = mysqli_query($conn, $get_userStocks);

        if(!$get_userStocks_query){
            $data['error_type'] = "sql_error";
            $data['error'] = mysqli_error($conn);
            mysqli_close($conn);
            echo json_encode($data);
            return;
        }

        $user_stocks = mysqli_fetch_all($get_userStocks_query);
        $data['user_stocks'] = $user_stocks;
        mysqli_close($conn);
        $data['error_type'] = "success!";
        echo json_encode($data);
    }catch(Exception $e){
        $data['error'] = $e->getMessage();
        echo json_encode($data);
    }
 