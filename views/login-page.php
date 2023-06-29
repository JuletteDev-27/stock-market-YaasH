<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../assets/css/login-styles.css">
    <link href="
    https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css
    " rel="stylesheet">
    <title>Stock Market</title>
    <script src="../assets/js/login-form-sys.js"></script>
</head>
<body>
    <div class="login-header"><div class="filter"></div></div>
    <section class="login-body">
        <div class="container">
            <img src="../assets/media/main-logo.png" class="index-logo" alt="" srcset="">
            <form action="../backend/login-backend.php" method="POST" class="login-form" id="main-form">
                    <label for="user_email">メールアドレス</label>
                    <input type="email" name="user_email" id="user_email" required>
                    <p class="error-dialog" id="user_email_ed"></p>
                    <label for="user_password">パスポート</label>
                    <input type="password" name="user_password" id="user_password" required>
                    <p class="error-dialog" id="user_password_ed"></p>
                    <button type="submit" name="submit_button" id="submit_button" >ロッグイン</button>
                </form>
                <a href="register-page-prod.php" class="register-here-link">Don't Have an account? Click here to register</a>
        </div>
    </section>
   
</body>
</html>