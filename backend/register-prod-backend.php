<?php
    session_start();
    include_once "dbconn.php";

    $data = [];
    $sql_errors = [];
    $input_checking_errors = [];

    try{
        $name_kanji = mysqli_real_escape_string($conn, $_POST['user_name_kanji']);
        $name = mysqli_real_escape_string($conn, $_POST['user_name']);
        $gender = mysqli_real_escape_string($conn, $_POST['user_gender']);
        $birthdate = mysqli_real_escape_string($conn, $_POST['user_birthdate']);
        $postcode = mysqli_real_escape_string($conn, $_POST['user_postcode']);
        $prefecture = mysqli_real_escape_string($conn, $_POST['user_prefecture']);
        $city = mysqli_real_escape_string($conn, $_POST['user_city']);
        $street = mysqli_real_escape_string($conn, $_POST['user_street']);
        $appartment = mysqli_real_escape_string($conn, $_POST['user_appartment']);
        $number = mysqli_real_escape_string($conn, $_POST['user_number']);
        $email =  mysqli_real_escape_string($conn, $_POST['user_email']);
        $email_confirmation =  mysqli_real_escape_string($conn, $_POST['user_email_confirmation']);
        $password =  mysqli_real_escape_string($conn, $_POST['user_password']);
        $password_confirmation =  mysqli_real_escape_string($conn, $_POST['user_password_confirmation']);
        $country_citizenship =  mysqli_real_escape_string($conn, $_POST['user_country_citizenship']);
        $country_residence =  mysqli_real_escape_string($conn, $_POST['user_country_residence']);
        $profession = mysqli_real_escape_string($conn, $_POST['user_profession']);
        $household_relationship = mysqli_real_escape_string($conn, $_POST['user_household_relationship']);
        $reason_opening_account = mysqli_real_escape_string($conn, $_POST['user_reason_opening_account']);

        $check_contact_number = "SELECT count(user_contact_number) as total from table_users where user_contact_number = '$number'";
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

        if($password_confirmation != $password){
           $input_checking_errors['password_check'] = "passwords does not match!";
        }

        if($email_confirmation != $email){
            $input_checking_errors['email_check'] = "emails does not match!";
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
         "name_kanji"=>$name_kanji,
         "name"=>$name,
         "gender"=>$gender,
         "birthdate"=>$birthdate,
         "postcode"=>$postcode,
         "prefecture"=>$prefecture,
         "city"=>$city,
         "street"=>$street,
         "appartment"=>$appartment,
         "number"=>$number,
         "email"=>$email,
         "password"=>$hashed_password,
         "country_citizenship"=>$country_citizenship,
         "country_residence"=>$country_residence,
         "profession"=>$profession,
         "household_relationship"=>$household_relationship,
         "reason_opening_account"=>$reason_opening_account
        ];

         mysqli_close($conn);
         $data['error_type'] = "success";
         $data['test'] = $_SESSION['user_information'];
         echo json_encode($data);


    }catch(Exception $e){
        $data = $e;
        echo json_encode($data);
    }

   

    