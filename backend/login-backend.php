<?php

    include_once 'dbconn.php';

    $data = [];
    $sql_errors = [];
    $input_checking_errors = [];

    try{
        $Uemail =  $_POST['user_email'];
        $Upassword =  $_POST['user_password'];

        $check_email = "SELECT count(user_email) as total from table_users where user_email = '$Uemail'";
        $check_email_query = mysqli_query($conn, $check_email);

        $email_count= mysqli_fetch_assoc($check_email_query);

        if($email_count['total'] < 1){
            $input_checking_errors['email_check'] = "Account with this email does not exist!";
            $data = $input_checking_errors;
            $data['error_type'] = "check_errors";
            mysqli_close($conn);
            echo json_encode($data);
            return;
        }
       
        $check_password = "SELECT user_password as uPass from table_users where user_email = '$Uemail'";
        $check_password_query = mysqli_query($conn ,$check_password);

        $password_value = mysqli_fetch_assoc($check_password_query);

        $password_auth = password_verify($Upassword, $password_value['uPass']);
        
        if(!$password_auth){
            $input_checking_errors['email_check'] = "Incorrect Email/Password!";
            $input_checking_errors['password_check'] = "Incorrect Email/Password!";
            $data = $input_checking_errors;
            $data['error_type'] = "check_errors";
            mysqli_close($conn);
            echo json_encode($data);
            return;
        }

        $get_uID = "SELECT user_id as `uID` from table_users where user_email = '$Uemail'";
        $get_uID_query = mysqli_query($conn, $get_uID);
        $uID_value = mysqli_fetch_assoc($get_uID_query);
        $data['error_type'] = "success!";
        $data['status'] = "Logged in successfully!";
        $data['url_to_redirect'] = "home-page.php?uID=".$uID_value['uID'];

        session_start();
        $_SESSION['STATUS'] = 200;
        mysqli_close($conn);
        echo json_encode($data);
    

    }catch(Exception $e){
        $data['error'] = $e->getMessage;
    }