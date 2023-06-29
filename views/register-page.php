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
    <script src="../assets/js/register-form-sys.js"></script>
</head>
<body>
    <section class="register-body">
            <div class="container">
                <form action="../backend/register-backend.php" method="POST" class="register-form" id="main-form">

                    <div class="form-fields bg-header">
                        <label for="user_name">名前</label>
                        <p1>
                            原ン収直カヤチヨ治視がょるク会辺ワムヤ自優ネミメヌ境写ぜうイげ目治覧ナハコ代展ラトア北諭雨ふラわレ職務クニ延県声つぴあ応9交らぶ。会クヒハ前紙フらッ著午懸ナワミ稿項ロ属図ざもぜ以践投ネウ挙区東け上1改げうー海端こト第76成フオ展品でほし。公スリどと士氏憲名モヨ北語ニレ児文ぼもレ校飾ヨ下無クく貢思ン禁74始ぜ波携さンぜク情引ろ野語ゃれあル。
                        </p1>
                    </div>
                    <div class="form-fields ">
                        <input type="text" name="user_name" id="user_name" placeholder="Example: Tatsuhiro Yamada" required>
                        <p class="error-dialog" id="user_name_ed"></p>
                    </div>
                    <div class="form-fields bg-header">
                        <label for="user_password">パスワード</label>
                        <p1>
                            原ン収直カヤチヨ治視がょるク会辺ワムヤ自優ネミメヌ境写ぜうイげ目治覧ナハコ代展ラトア北諭雨ふラわレ職務クニ延県声つぴあ応9交らぶ。会クヒハ前紙フらッ著午懸ナワミ稿項ロ属図ざもぜ以践投ネウ挙区東け上1改げうー海端こト第76成フオ展品でほし。公スリどと士氏憲名モヨ北語ニレ児文ぼもレ校飾ヨ下無クく貢思ン禁74始ぜ波携さンぜク情引ろ野語ゃれあル。
                        </p1>
                    </div>
                    <div class="form-fields">
                        <input type="password" name="user_password" id="user_password" placeholder="Password" required>
                        <p class="error-dialog" id="user_password_ed"></p>
                    </div>
                    
                    <div class="form-fields bg-header">
                        <label for="user_confirm_password">パスワードを認証する</label>
                        <p1>
                            原ン収直カヤチヨ治視がょるク会辺ワムヤ自優ネミメヌ境写ぜうイげ目治覧ナハコ代展ラトア北諭雨ふラわレ職務クニ延県声つぴあ応9交らぶ。会クヒハ前紙フらッ著午懸ナワミ稿項ロ属図ざもぜ以践投ネウ挙区東け上1改げうー海端こト第76成フオ展品でほし。公スリどと士氏憲名モヨ北語ニレ児文ぼもレ校飾ヨ下無クく貢思ン禁74始ぜ波携さンぜク情引ろ野語ゃれあル。
                        </p1>
                    </div>
                    <div class="form-fields">
                        <input type="password" name="user_confirm_password" id="user_confirm_password" placeholder="Confirm Password"  required>
                        <p class="error-dialog" id="user_confirm_password_ed"></p>
                    </div>
                    <div class="form-fields bg-header">
                        <label for="user_email">メールアドレス</label>
                        <p1>
                            原ン収直カヤチヨ治視がょるク会辺ワムヤ自優ネミメヌ境写ぜうイげ目治覧ナハコ代展ラトア北諭雨ふラわレ職務クニ延県声つぴあ応9交らぶ。会クヒハ前紙フらッ著午懸ナワミ稿項ロ属図ざもぜ以践投ネウ挙区東け上1改げうー海端こト第76成フオ展品でほし。公スリどと士氏憲名モヨ北語ニレ児文ぼもレ校飾ヨ下無クく貢思ン禁74始ぜ波携さンぜク情引ろ野語ゃれあル。
                        </p1>
                    </div>
                    <div class="form-fields">
                        <input type="email" name="user_email" id="user_email" placeholder="Example: sampleUser@email.com" required>
                        <p class="error-dialog" id="user_email_ed"></p>
                    </div>
                    <div class="form-fields bg-header">
                        <label for="user_contact_number">携帯番号</label>
                        <p1>
                            原ン収直カヤチヨ治視がょるク会辺ワムヤ自優ネミメヌ境写ぜうイげ目治覧ナハコ代展ラトア北諭雨ふラわレ職務クニ延県声つぴあ応9交らぶ。会クヒハ前紙フらッ著午懸ナワミ稿項ロ属図ざもぜ以践投ネウ挙区東け上1改げうー海端こト第76成フオ展品でほし。公スリどと士氏憲名モヨ北語ニレ児文ぼもレ校飾ヨ下無クく貢思ン禁74始ぜ波携さンぜク情引ろ野語ゃれあル。
                        </p1>
                    </div>
                    <div class="form-fields">
                        <input type="tel" name="user_contact_number" id="user_contact_number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="111-111-1111" required>
                        <p class="error-dialog" id="user_contact_number_ed"></p>
                    </div>
                    <button type="submit" name="submit_button" id="submit_button" >NEXT</button>
                </form>
                <a href="login-page.php" class="login-here-link">Already have an account? Click here to log in</a>
            </div>
    </section>
</body>
</html>