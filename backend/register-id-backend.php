<?php 
   session_start();
   include_once 'dbconn.php';

    $data = [];
    $sql_errors = [];
    $input_checking_errors = [];
    try{
        
        $name_kanji = $_SESSION['user_information']['name_kanji'];
        $name = $_SESSION['user_information']['name'];
        $gender = $_SESSION['user_information']['gender'];
        $birthdate = $_SESSION['user_information']['birthdate'];
        $postcode = $_SESSION['user_information']['postcode'];
        $prefecture = $_SESSION['user_information']['prefecture'];
        $city = $_SESSION['user_information']['city'];
        $street = $_SESSION['user_information']['street'];
        $appartment = $_SESSION['user_information']['appartment'];
        $number = $_SESSION['user_information']['number'];
        $email = $_SESSION['user_information']['email'];
        $hashed_password = $_SESSION['user_information']['password'];
        $country_citizenship = $_SESSION['user_information']['country_citizenship'];
        $country_residence = $_SESSION['user_information']['country_residence'];
        $profession = $_SESSION['user_information']['profession'];
        $household_relationship = $_SESSION['user_information']['household_relationship'];
        $reason_opening_account = $_SESSION['user_information']['reason_opening_account'];
        $balance = mysqli_real_escape_string($conn, "1000");
        $id_front = mysqli_real_escape_string($conn, $_POST['id_front']);
        $id_back = mysqli_real_escape_string($conn, $_POST['id_back']);

         $insert_query = "INSERT INTO `table_users` (
            `user_name`, `user_name_kanji`, `user_gender`, `user_date_of_birth`, `user_post_code`,
            `user_prefectures`, `user_city`, `user_street`, `user_apartment`, `user_password`, `user_email`,
            `user_contact_number`, `user_country_citizenship`, `user_country_residence`, `user_profession`,
            `user_household_relationship`, `user_reason_opening_account`, `user_balance`, `user_idImage_front`,
            `user_idImage_back`
        )
        VALUES (
            '$name', '$name_kanji', '$gender', '$birthdate', '$postcode', '$prefecture',
            '$city', '$street', '$appartment', '$hashed_password', '$email', '$number',
            '$country_citizenship', '$country_residence', '$profession', '$household_relationship',
            '$reason_opening_account', '$balance', '$id_front', '$id_back'
        );
        ";

         $insert_result = mysqli_query($conn, $insert_query);

         if(!$insert_result){
            $data['error_type'] = "insert_query_error!";
            $data['error'] ="ERROR!". mysqli_error($conn);
            mysqli_close($conn);
            echo json_encode($data);
            return;
         }

         mysqli_close($conn);
         $data['error_type'] = "success";
         $data['registered_status'] = true;
         session_destroy();
         echo json_encode($data);

    }catch(Exception $e){
        $data['error'] = $e;
    }
    
    


