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
    <link rel="stylesheet" href="../assets/css/register-prod-styles.css">
    <script src="../assets/js/register-form-prod-sys.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Stock Market</title>
</head>
<body>
    <section class="main-content-container">
        <form action="" method="post" class="main-form" id="main-form">
            <table class="main-form-table">
                <tr>
                    <th colspan="2">お客様基本情報</th>
                </tr>
                <tr row_num="1">
                    <td class="form-category">お名前（漢字）</td>
                    <td class="form-fields">
                        <div class="form-field" >
                            <p>姓</p>
                            <input type="text" required id="user_surname_kanji">
                        </div>
                        <div class="form-field">
                            <p>名</p>
                            <input type="text" required id="user_name_kanji">
                        </div>
                    </td>
                </tr>
                <tr row_num="2">
                    <td class="form-category">お名前（フリガナ）</td>
                    <td class="form-fields">
                        <div class="form-field" >
                            <p>セイ</p>
                            <input type="text" required id="user_surname">
                        </div>
                        <div class="form-field">
                            <p>メイ</p>
                            <input type="text" required id="user_name">
                        </div>
                    </td>
                </tr>
                <tr row_num="3">
                    <td class="form-category">性別</td>
                    <td class="form-fields">
                        <label class="form-field form-field-radio" for="user_gender_male">
                            <input type="radio" required id="user_gender_male" value="M" name="user_gender">
                            <p>男性</p>
                        </label>
                        <label class="form-field form-field-radio" for="user_gender_female">
                            <input type="radio" required id="user_gender_female" value="F" name="user_gender">
                            <p>女性</p>
                        </label>
                    </td>
                </tr>
                <tr row_num="4">
                    <td class="form-category">生年月日</td>
                    <td class="form-fields">
                        <div class="form-field">
                            <input type="date" required id="user_birthdate">
                        </div>
                    </td>
                </tr>
                <tr row_num="5">
                    <td class="form-category">
                        郵便番号
                        <p>半角数字でご入力ください</p>
                    </td>
                    <td class="form-fields">
                        <div class="form-field">
                            <input type="text" actual_type="number" required id="user_post_code_part_1" maxlength="3" pattern="[0-9+]{3}" placeholder="111">
                        </div>
                        -
                        <div class="form-field">
                            <input type="text" actual_type="number" required id="user_post_code_part_2"  maxlength="4" pattern="[0-9+]{4}" placeholder="1111">
                        </div>
                    </td>
                </tr>
                <tr row_num="6">
                    <td class="form-category">
                        都道府県
                    </td>
                    <td class="form-fields">
                        <div class="form-field">
                            <select name="user_prefecture" id="user_prefecture" required>
                                <option value="">ご選択ください</option>
                                <optgroup label="北海道・東北">
                                    <option value="Hokkaido">Hokkaido</option>
                                    <option value="Aomori Prefecture">Aomori Prefecture</option>
                                    <option value="Iwate Prefecture">Iwate Prefecture</option>
                                    <option value="Miyagi Prefecture">Miyagi Prefecture</option>
                                    <option value="Akita">Akita</option>
                                    <option value="Yamagata Prefecture">Yamagata Prefecture</option>
                                    <option value="Fukushima Prefecture">Fukushima Prefecture</option>
                                </optgroup>
                                <optgroup label="関東">
                                    <option value="Ibaraki Prefecture">Ibaraki Prefecture</option>
                                    <option value="Tochigi Prefecture">Tochigi Prefecture</option>
                                    <option value="Gunma Prefecture">Gunma Prefecture</option>
                                    <option value="Saitama">Saitama</option>
                                    <option value="Chiba Prefecture">Chiba Prefecture</option>
                                    <option value="Tokyo">Tokyo</option>
                                    <option value="Kanagawa Prefecture">Kanagawa Prefecture</option>
                                </optgroup>
                                <optgroup label="甲信越・北陸">
                                    <option value="Niigata Prefecture">Niigata Prefecture</option>
                                    <option value="Toyama Prefecture">Toyama Prefecture</option>
                                    <option value="Ishikawa Prefecture">Ishikawa Prefecture</option>
                                    <option value="Fukui Prefecture">Fukui Prefecture</option>
                                    <option value="Yamanashi Prefecture">Yamanashi Prefecture</option>
                                    <option value="Nagano Prefecture">Nagano Prefecture</option>
                                </optgroup>
                                <optgroup label="東海">
                                    <option value="Gifu Prefecture">Gifu Prefecture</option>
                                    <option value="Shizuoka Prefecture">Shizuoka Prefecture</option>
                                    <option value="Aichi Prefecture">Aichi Prefecture</option>
                                    <option value="Mie Prefecture">Mie Prefecture</option>
                                </optgroup>
                                <optgroup label="関西">
                                    <option value="Shiga Prefecture">Shiga Prefecture</option>
                                    <option value="Kyoto">Kyoto</option>
                                    <option value="Osaka Prefecture">Osaka Prefecture</option>
                                    <option value="Hyogo Prefecture">Hyogo Prefecture</option>
                                    <option value="Nara Prefecture">Nara Prefecture</option>
                                    <option value="Wakayama Prefecture">Wakayama Prefecture</option>
                                </optgroup>
                                <optgroup label="中国">
                                    <option value="Tottori Prefecture">Tottori Prefecture</option>
                                    <option value="Shimane Prefecture">Shimane Prefecture</option>
                                    <option value="Okayama Prefecture">Okayama Prefecture</option>
                                    <option value="Hiroshima">Hiroshima</option>
                                    <option value="Yamaguchi Prefecture">Yamaguchi Prefecture</option>
                                </optgroup>
                                <optgroup label="四国">
                                    <option value="Tokushima">Tokushima</option>
                                    <option value="Kagawa Prefecture">Kagawa Prefecture</option>
                                    <option value="Ehime Prefecture">Ehime Prefecture</option>
                                    <option value="Kochi Prefecture">Kochi Prefecture</option>
                                </optgroup>
                                <optgroup label="九州・沖縄">
                                    <option value="Fukuoka Prefecture">Fukuoka Prefecture</option>
                                    <option value="Saga Prefecture">Saga Prefecture</option>
                                    <option value="Nagasaki Prefecture">Nagasaki Prefecture</option>
                                    <option value="Kumamoto Prefecture">Kumamoto Prefecture</option>
                                    <option value="Oita Prefecture">Oita Prefecture</option>
                                    <option value="Miyazaki Prefecture">Miyazaki Prefecture</option>
                                    <option value="Kagoshima Prefecture">Kagoshima Prefecture</option>
                                    <option value="Okinawa Prefecture">Okinawa Prefecture</option>
                                </optgroup>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr row_num="7">
                    <td class="form-category">
                        市・区・郡
                    </td>
                    <td class="form-fields">
                        <div class="form-field">
                            <input type="text" actual_type="city" required id="user_city">
                        </div>
                    </td>
                </tr>
                <tr row_num="8">
                    <td class="form-category">
                        町名番地
                    </td>
                    <td class="form-fields">
                        <div class="form-field">
                            <input type="text" actual_type="city" required id="user_street">
                        </div>
                    </td>
                </tr>
                <tr row_num="9">
                    <td class="form-category">
                        マンション・アパート名等
                    </td>
                    <td class="form-fields">
                        <div class="form-field">
                            <input type="text" actual_type="city" required id="user_appartment">
                        </div>
                    </td>
                </tr>
                <tr row_num="10">
                    <td class="form-category">
                        携帯電話番号
                        <p>半角数字でご入力ください</p>
                        <p class="error-dialog" id="user_number_ed"></p>
                    </td>
                    <td class="form-fields">
                        <div class="form-field">
                            <input type="text" actual_type="number" required id="user_number_part_1" maxlength="3" pattern="[0-9+]{2}" placeholder="03">
                        </div>
                     
                        <div class="form-field">
                            <input type="text" actual_type="number" required id="user_number_part_2"  maxlength="4" pattern="[0-9+]{4}" placeholder="1234">
                        </div>
                      
                        <div class="form-field">
                            <input type="text" actual_type="number" required id="user_number_part_3"  maxlength="4" pattern="[0-9+]{4}" placeholder="5678">
                        </div>
                    </td>
                </tr>
                <tr row_num="11">
                    <td class="form-category">
                        連絡先メールアドレス
                        <p class="error-dialog" id="user_email_ed"></p>
                    </td>
                    <td class="form-fields one-col">
                        <div class="form-desc">
                        <p>各種お手続きや問合せで利用される連絡先メールアドレス</p>
                        <p>※docomo、SoftBank、au等の携帯メールアドレスは不可</p>
                        <p>※他のお客様（ご家族等）と同一のメールアドレスはお受けできません。</p>
                        </div>
                        <div class="form-field">
                            <input type="email" actual_type="city" required id="user_email" placeholder="Example: abc@abc.com">
                        </div>
                        <div class="form-desc">
                        <p>確認のため、メールアドレスを再度入力してください</p>
                        </div>
                        <div class="form-field">
                            <input type="email" actual_type="city" required id="user_email_confirmation" placeholder="Example: abc@abc.com">
                        </div>
                    </td>
                </tr>
                <tr row_num="12">
                    <td class="form-category">
                        パスワード
                        <p class="error-dialog" id="user_password_ed"></p>
                    </td>
                    <td class="form-fields one-col">
                        <div class="form-field">
                            <input type="password" actual_type="city" required id="user_password" >
                        </div>
                        <p>確認のためパスワードを再入力してください</p>
                        <div class="form-field">
                            <input type="password" actual_type="city" required id="user_password_confirmation" >
                        </div>
                    </td>
                </tr>
            </table>
            <table class="main-form-table">
                <tr>
                    <th colspan="2">国籍情報</th>
                </tr>
                <tr row_num="1">
                    <td class="form-category">国籍</td>
                    <td class="form-fields one-col">
                    <div class="form-desc">
                        <p>弊社では、米国籍およびグリーンカード（米国永住権）保有者のお客様の新規口座開設は承っておりません。</p>
                    </div>
                        <label class="form-field form-field-radio">
                            <input type="radio" required id="user_country_citizenship_Japan" value="Japan" name="user_country_citizenship">
                            <p>日本</p>
                        </label>
                        <label class="form-field form-field-radio" >
                            <input type="radio" required id="user_country_citizenship_outside" value="Outside" name="user_country_citizenship">
                            <p>日本、米国以外</p>
                        </label>
                    </td>
                </tr>
                <tr row_num="2">
                    <td class="form-category">居住地国</td>
                    <td class="form-fields one-col">
                    <div class="form-desc">
                        <p>
                        お客様の居住地国が日本であることをご確認ください。<br><br>
                       （弊社では居住地国が日本国以外であるお客様の新規口座開設を承っておりません。）
                    </p>
                    </div>
                    <label class="form-field form-field-radio" >
                            <input type="radio" required id="user_country_residence" value="Japan" name="user_country_residence">
                            <p>日本</p>
                        </label>
                    </td>
                </tr>
            </table>
            <table class="main-form-table">
                <tr>
                    <th colspan="1">ご職業</th>
                </tr>
                <tr row_num="1">
                    <td class="form-category">ご職業</td>
                    <td class="form-fields">
                        <div class="form-field">
                            <select name="" id="user_profession" required>
                                <option value="">ご選択ください</option>
                                <option value="Listed company officer">Listed company officer</option>
                                <option value="Listed company employee">Listed company employee</option>
                                <option value="Non-listed company officer/organization officer">Non-listed company officer/organization officer</option>
                                <option value="Employees of unlisted companies and organizations">Employees of unlisted companies and organizations</option>
                                <option value="Civil servants (excluding faculty and staff)">Civil servants (excluding faculty and staff)</option>
                                <option value="Doctor/Lawyer">Doctor/Lawyer</option>
                                <option value="faculty and staff">faculty and staff</option>
                                <option value="self-employed">self-employed</option>
                                <option value="freelance">freelance</option>
                                <option value="housewife/housework helper">housewife/housework helper</option>
                                <option value="unemployed">unemployed</option>
                            </select>
                        </div>
                    </td>
                </tr>
            </table>
            <table class="main-form-table">
                <tr>
                    <th colspan="2">ご世帯主情報</th>
                </tr>
                <tr row_num="1">
                    <td class="form-category">ご世帯主との続柄</td>
                    <td class="form-fields">
                    <label class="form-field form-field-radio" >
                        <input type="radio" required id="user_household_rel" value="himself" name="user_household_rel">
                        <p>本人</p>
                    </label>
                    <label class="form-field form-field-radio" >
                        <input type="radio" required id="user_household_rel" value="spouse" name="user_household_rel">
                        <p>配偶者</p>
                    </label>
                    <label class="form-field form-field-radio" >
                        <input type="radio" required id="user_household_rel" value="child" name="user_household_rel">
                        <p>子供</p>
                    </label>
                    <label class="form-field form-field-radio" >
                        <input type="radio" required id="user_household_rel" value="others" name="user_household_rel">
                        <p>その他</p>
                    </label>
                    </td>
                </tr>
            </table>
            <table class="main-form-table">
                <tr>
                    <th colspan="1">口座開設のきっかけ</th>
                </tr>
                <tr row_num="1">
                    <td class="form-category">口座開設のきっかけ</td>
                    <td class="form-fields">
                        <div class="form-field">
                            <select name="" id="user_reason_opening" required>
                                <option value="">ご選択ください</option>
                                <option value="TV commercial">TV commercial</option>
                                <option value="Online Advertising">Online Advertising</option>
                                <option value="Articles on external sites, etc.">Articles on external sites, etc.</option>
                                <option value="Newspaper advertisement">Newspaper advertisement</option>
                                <option value="Magazine advertising">Magazine advertising</option>
                                <option value="Event, seminars, etc.">Event, seminars, etc.</option>
                                <option value="Referral from an acquaintance">Referral from an acquaintance</option>
                            </select>
                        </div>
                    </td>
                </tr>
            </table>
            <button type="submit" class="submit-button">次へ進む</button>
            <a href="login-page.php" class="login-here-link">Already have an account? Click here to log in</a>
        </form>
    </section>
</body>
</html>