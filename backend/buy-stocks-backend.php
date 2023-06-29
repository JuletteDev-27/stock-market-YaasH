<?php
    include_once 'dbconn.php';

    $data = [];
    $sql_errors = [];
    $input_checking_errors = [];

    try{
        $uID = mysqli_real_escape_string($conn, $_POST['user_id']);
        $sID = mysqli_real_escape_string($conn,$_POST['stock_id']);
        $sQua = mysqli_real_escape_string($conn, $_POST['stock_quantity']);
        $sTp = mysqli_real_escape_string($conn, $_POST['stock_total_price']);

        $check_user_balance = "SELECT user_balance as uBalance from table_users where `user_id` = '$uID'";
        $check_user_balance_query = mysqli_query($conn, $check_user_balance);

        if(!$check_user_balance_query){
            $data['error_type'] = "sql_error";
            $data['error'] = mysqli_error($conn);
            mysqli_close($conn);
            echo json_encode($data);
            return;
        }

        $user_balance = mysqli_fetch_assoc($check_user_balance_query);

        if($user_balance['uBalance'] < $sTp){
            $data['error_type'] = "check_error";
            $data['error'] = "You have insufficient balance!";
            mysqli_close($conn);
            echo json_encode($data);
            return;
        }

        $check_existing_stocks = "SELECT count(*) as stockCount from table_userstocks where `user_id` = '$uID' and `stock_id` = '$sID' ";
        $check_existing_stocks_query = mysqli_query($conn, $check_existing_stocks);

        if(!$check_existing_stocks_query){
            $data['error_type'] = "sql_error";
            $data['error'] = mysqli_error($conn);
            mysqli_close($conn);
            echo json_encode($data);
            return;
        }

        $check_result = mysqli_fetch_assoc($check_existing_stocks_query);

        if($check_result['stockCount'] > 0){
                $get_priceAndQuantity = "SELECT 
                `userStocks_quantity` as `current_quantity`,
                `userStocks_id` as `usID`
                FROM `table_userStocks` WHERE `user_id` = '$uID' and `stock_id` = '$sID'";

                $get_priceAndQuantity_query = mysqli_query($conn, $get_priceAndQuantity);

                if(!$get_priceAndQuantity_query){
                    $data['error_type'] = "sql_error";
                    $data['error'] = mysqli_error($conn);
                    mysqli_close($conn);
                    echo json_encode($data);
                    return;
                }

                $result = mysqli_fetch_array($get_priceAndQuantity_query);
                $userStocks_id = $result['usID'];
                $current_quantity = $result["current_quantity"];
                $new_quantity = mysqli_real_escape_string($conn,$sQua + $current_quantity);
                $new_user_balance = mysqli_real_escape_string($conn, $user_balance['uBalance'] - $sTp);

                $update_userStocks = "UPDATE `table_userstocks` 
                SET 
                `userStocks_quantity` = '$new_quantity'
                WHERE
                `userStocks_id` = '$userStocks_id' and `stock_id` = '$sID'
                ";

                $update_userStocks_query = mysqli_query($conn, $update_userStocks);
            
            if(!$update_userStocks_query){
                $data['error_type'] = "sql_error";
                $data['error'] = "Error:".mysqli_error($conn);
                mysqli_close($conn);
                echo json_encode($data);
                return;
            }

            $update_balance = "UPDATE `table_users` SET `user_balance` = '$new_user_balance' where `user_id` = '$uID'";
            $update_balance_query = mysqli_query($conn,$update_balance);
    
            if(!$update_balance_query){
                $data['error_type'] = "sql_error";
                $data['error'] = mysqli_error($conn);
                mysqli_close($conn);
                echo json_encode($data);
                return;
            }

                $data['error_type'] = "success";
                mysqli_close($conn);
                echo json_encode($data);
                return;

        }

        $buy_stocks = "INSERT INTO `table_userstocks`(`user_id`, `stock_id`, `userStocks_quantity`) 
        VALUES('$uID', '$sID', '$sQua')";
        $buy_stocks_query = mysqli_query($conn, $buy_stocks);

        if(!$buy_stocks_query){
            $data['error_type'] = "sql_error";
            $data['error'] = mysqli_error($conn);
            mysqli_close($conn);
            echo json_encode($data);
            return;
        }

        $new_user_balance = mysqli_real_escape_string($conn, $user_balance['uBalance'] - $sTp);
        $update_balance = "UPDATE `table_users` SET `user_balance` = '$new_user_balance' where `user_id` = '$uID'";
        $update_balance_query = mysqli_query($conn,$update_balance);

        if(!$update_balance_query){
            $data['error_type'] = "sql_error";
            $data['error'] = mysqli_error($conn);
            mysqli_close($conn);
            echo json_encode($data);
            return;
        }

        $data['error_type'] = "success";
        mysqli_close($conn);
        echo json_encode($data);

    }catch(Exception $e){
        $data['error'] = $e->getMessage();
        echo json_encode($data);
    }

    

