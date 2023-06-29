<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../assets/css/register-styles.css">
    <title>Stock Market</title>
    <link href="
    https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css
    " rel="stylesheet">
    <script src="../assets/js/register-form-id-sys.js"></script>
</head>
<body>
    <dialog id="modal">
        <p>Account Created! Will now proceed to verification! This page will be redirected automatically</p>
    </dialog>
    <section class="register-body">
            <div class="container">
                <form action="../backend/register-id-backend.php" method="POST" class="register-form" id="main-form">

                    <div class="form-fields bg-header">
                        <label for="user_id_front">身分証の表の写メ</label>
                        <p1>
                            原ン収直カヤチヨ治視がょるク会辺ワムヤ自優ネミメヌ境写ぜうイげ目治覧ナハコ代展ラトア北諭雨ふラわレ職務クニ延県声つぴあ応9交らぶ。会クヒハ前紙フらッ著午懸ナワミ稿項ロ属図ざもぜ以践投ネウ挙区東け上1改げうー海端こト第76成フオ展品でほし。公スリどと士氏憲名モヨ北語ニレ児文ぼもレ校飾ヨ下無クく貢思ン禁74始ぜ波携さンぜク情引ろ野語ゃれあル。
                        </p1>
                    </div>
                    <div class="form-fields">
                        <input type="file" name="user_id_front" id="user_id_front" required>
                    </div>
                    <div class="form-fields bg-header">
                        <label for="user_id_back">身分証の裏の写メ</label>
                        <p1>
                            原ン収直カヤチヨ治視がょるク会辺ワムヤ自優ネミメヌ境写ぜうイげ目治覧ナハコ代展ラトア北諭雨ふラわレ職務クニ延県声つぴあ応9交らぶ。会クヒハ前紙フらッ著午懸ナワミ稿項ロ属図ざもぜ以践投ネウ挙区東け上1改げうー海端こト第76成フオ展品でほし。公スリどと士氏憲名モヨ北語ニレ児文ぼもレ校飾ヨ下無クく貢思ン禁74始ぜ波携さンぜク情引ろ野語ゃれあル。
                        </p1>
                    </div>
                    <div class="form-fields">
                        <input type="file" name="user_id_back" id="user_id_back" required>
                    </div>

                    <button type="submit" name="submit_button" id="submit_button" >SUBMIT</button>
                </form>
                <a href="login-page.php" class="login-here-link">Already have an account? Click here to log in</a>
            </div>
    </section>
</body>
</html>