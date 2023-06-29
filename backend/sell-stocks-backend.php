<?php 

    include_once 'dbconn.php';
    $data = [];
    try{
        $uID = mysqli_real_escape_string($conn, $_POST['uID']);
        $sID = mysqli_real_escape_string($conn, $_POST['stock_id']);
        $sQua = mysqli_real_escape_string($conn, $_POST['stock_quantity']);
        $avS = mysqli_real_escape_string($conn, $_POST['available_stock']);

        if($sQua != $avS){
            $sell_stocks = "INSERT INTO `table_soldstocks`(`user_id`,`stock_id`,`soldStocks_quantity`) VALUES('$uID', '$sID', '$sQua')";
            $sell_stocks_query = mysqli_query($conn, $sell_stocks);
    
            if(!$sell_stocks_query){
                $data['error_type'] = "sql_error";
                $data['error'] = "Error: ".mysqli_error($conn);
                mysqli_close($conn);
                echo json_encode($data);
                return;
            }

            
            $new_quantity = mysqli_real_escape_string($conn, $avS - $sQua);
            
            $update_stock = "UPDATE `table_userstocks` SET `userStocks_quantity` = '$new_quantity' WHERE `user_id` = '$uID' and `stock_id` = '$sID'";
            $update_stock_query = mysqli_query($conn, $update_stock);

            if(!$update_stock_query){
                $data['error_type'] = "sql_error";
                $data['error'] = "Error: ".mysqli_error($conn);
                mysqli_close($conn);
                echo json_encode($data);
                return;
            }

            $get_current_price = "SELECT `stock_price` as `current_price` FROM `table_stocks` where `stock_id` = '$sID'";
            $get_current_price_query = mysqli_query($conn, $get_current_price);
    
            if(!$get_current_price_query){
                $data['error_type'] = "sql_error";
                $data['error'] = "Error: ".mysqli_error($conn);
                mysqli_close($conn);
                echo json_encode($data);
                return;
            }
    
            $current_price = mysqli_fetch_assoc($get_current_price_query);
            $total_gain = $current_price['current_price'] * $sQua;
    
            $current_user_balance = "SELECT `user_balance` as `current_balance` from `table_users` WHERE `user_id` = '$uID'";
            $current_user_balance_query = mysqli_query($conn, $current_user_balance);
    
            if(!$current_user_balance_query){
                $data['error_type'] = "sql_error";
                $data['error'] = "Error: ".mysqli_error($conn);
                mysqli_close($conn);
                echo json_encode($data);
                return;
            }
    
            $current_balance = mysqli_fetch_assoc($current_user_balance_query);
            $new_user_balance = mysqli_real_escape_string($conn, $current_balance['current_balance'] + $total_gain);
            $update_balance = "UPDATE `table_users` SET `user_balance` = '$new_user_balance' where `user_id` = '$uID'";
            $update_balance_query = mysqli_query($conn,$update_balance);
    
            if(!$update_balance_query){
                $data['error_type'] = "sql_error";
                $data['error'] = "Error: ".mysqli_error($conn);
                mysqli_close($conn);
                echo json_encode($data);
                return;
            }
    
            $data['error_type'] = "success";
            $data['status'] = "success!";
            mysqli_close($conn);
            echo json_encode($data);
            return;
        }

        $sell_stocks = "INSERT INTO `table_soldstocks`(`user_id`,`stock_id`,`soldStocks_quantity`) VALUES('$uID', '$sID', '$sQua')";
        $sell_stocks_query = mysqli_query($conn, $sell_stocks);

        if(!$sell_stocks_query){
            $data['error_type'] = "sql_error";
            $data['error'] = "Error: ".mysqli_error($conn);
            mysqli_close($conn);
            echo json_encode($data);
            return;
        }

        $delete_stock = "DELETE FROM `table_userstocks` WHERE `user_id` = '$uID' and `stock_id` = '$sID'";
        $delete_stock_query = mysqli_query($conn, $delete_stock);

        if(!$delete_stock_query){
            $data['error_type'] = "sql_error";
            $data['error'] = "Error: ".mysqli_error($conn);
            mysqli_close($conn);
            echo json_encode($data);
            return;
        }

        $get_current_price = "SELECT `stock_price` as `current_price` FROM `table_stocks` where `stock_id` = '$sID'";
        $get_current_price_query = mysqli_query($conn, $get_current_price);

        if(!$get_current_price_query){
            $data['error_type'] = "sql_error";
            $data['error'] = "Error: ".mysqli_error($conn);
            mysqli_close($conn);
            echo json_encode($data);
            return;
        }

        $current_price = mysqli_fetch_assoc($get_current_price_query);
        $total_gain = $current_price['current_price'] * $sQua;

        $current_user_balance = "SELECT `user_balance` as `current_balance` from `table_users` WHERE `user_id` = '$uID'";
        $current_user_balance_query = mysqli_query($conn, $current_user_balance);

        if(!$current_user_balance_query){
            $data['error_type'] = "sql_error";
            $data['error'] = "Error: ".mysqli_error($conn);
            mysqli_close($conn);
            echo json_encode($data);
            return;
        }

        $current_balance = mysqli_fetch_assoc($current_user_balance_query);
        $new_user_balance = mysqli_real_escape_string($conn, $current_balance['current_balance'] + $total_gain);
        $update_balance = "UPDATE `table_users` SET `user_balance` = '$new_user_balance' where `user_id` = '$uID'";
        $update_balance_query = mysqli_query($conn,$update_balance);

        if(!$update_balance_query){
            $data['error_type'] = "sql_error";
            $data['error'] = "Error: ".mysqli_error($conn);
            mysqli_close($conn);
            echo json_encode($data);
            return;
        }

        $data['error_type'] = "success";
        $data['status'] = "success!";
        mysqli_close($conn);
        echo json_encode($data);


    }catch(Exception $e){
        $data['error'] = $e->getMessage();
        echo json_encode($data);
    }