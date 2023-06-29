<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
    src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
    crossorigin="anonymous"></script>
    <script src="../assets/js/nav-sys.js"></script>
    <link href="
    https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css
    " rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/index-styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../assets/js/index-footer-sys.js"></script>
    <title>Stock Market</title>
</head>
<body>
   <?php
    // if($_SESSION['login-status'] != " "){
    //     include_once 'logged-in-index.php';
    //     return;
    // }
    include_once 'main-nav.php';
    include_once 'default-index.php';
   ?> 
   <footer class="main-footer-con" id="registration-button-footer">
        <a href="register-page-prod.php">無料で口座開設する</a>
   </footer>
</body>
</html>