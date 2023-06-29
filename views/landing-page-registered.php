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
    <link href="
    https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css
    " rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/landing-page-styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Document</title>
</head>
<body>
    <section class="landing-page-body">
        <div class="container">
            <img src="../assets/media/main-logo.png" alt="" srcset="" class="main-logo">
            <h1 class="main-message">Congratulations! You are now Registered!</h1>
            <h1 class="main-instructions">Please wait as we verify your account. This page will be redirected automatically upon finishing verification</h1>
            <i class="fa-solid fa-circle-check"></i>
        </div>
    </section>
    <script>
        $(document).ready(()=>{
            setInterval(()=>{
                window.location.href = `index.php`;
            },5000)
        })
    </script>
</body>
</html>