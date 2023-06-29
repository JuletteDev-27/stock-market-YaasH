<?php 
   session_start();
   include_once 'dbconn.php';

    $data = [];
    $sql_errors = [];
    $input_checking_errors = [];
    try{
        
        $name = mysqli_real_escape_string($conn, $_POST['user_name']);
        $password = mysqli_real_escape_string($conn, $_POST['user_password']);
        $confirm_password = mysqli_real_escape_string($conn, $_POST['user_confirm_password']);
        $email =  mysqli_real_escape_string($conn, $_POST['user_email']);
        $contact_number = mysqli_real_escape_string($conn,$_POST['user_contact_number']);
        $balance =  mysqli_real_escape_string($conn, 1000);

         $check_contact_number = "SELECT count(user_contact_number) as total from table_users where user_contact_number = '$contact_number'";
         $check_email = "SELECT count(user_email) as total from table_users where user_email = '$email'";
         $check_email_query = mysqli_query($conn, $check_email);
         $check_contact_number_query = mysqli_query($conn, $check_contact_number);

         if(!$check_email_query){
            $sql_errors['check_email_query_error'] = "Error!". mysqli_error($conn);
         }

         if(!$check_contact_number_query){
            $sql_errors['check_contact_number_query_error'] = "Error!". mysqli_error($conn);
         }

         if($sql_errors != []){
            $data = $sql_errors;
            $data['error_type'] = "sql_error";
            mysqli_close($conn);
            echo json_encode($data);
            return;
         }

         $email_count= mysqli_fetch_assoc($check_email_query);
         $contact_number_count = mysqli_fetch_assoc($check_contact_number_query);
         
         if($email_count['total'] > 0){
            $input_checking_errors['email_check'] = "email already used!";
         }

         if($contact_number_count['total'] > 0){
            $input_checking_errors['contact_number_check'] = "contact number already used!";
         }

         if($confirm_password != $password){
            $input_checking_errors['password_check'] = "passwords does not match!";
         }

         if($input_checking_errors != []){
            $data = $input_checking_errors;
            $data['error_type'] = "checking_error";
            mysqli_close($conn);
            echo json_encode($data);
            return;
         }

         $hashed_password = mysqli_real_escape_string($conn, password_hash($password, PASSWORD_DEFAULT));
         
         $_SESSION['user_information'] = [];

         $_SESSION['user_information'] = [
            "user_name"=> $name,
            "user_password"=>$hashed_password,
            "user_email"=>$email,
            "user_contact_number"=>$contact_number,
            "user_balance"=>$balance
         ];
         mysqli_close($conn);
         $data['error_type'] = "success";
         echo json_encode($data);

    }catch(Exception $e){
        $data['error'] = $e->getMessage;
    }
    
    


