<?php
    session_start();
    if($_SESSION['STATUS'] !== 200){
        header("Location: login-page.php");
        session_abort();
    }
?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../assets/js/nav-sys.js"></script>
    <link rel="stylesheet" href="../assets/css/home-styles.css">
    <title>Stock Market</title>
</head>
<body>
    <?php include_once 'main-nav.php'?>
    
    <section class="home-body">
        <div class="sections">
            <p class="article-title">私たちは誰なのか</p>
            <p class="company-description">
                Westminster International Inc.へようこそ。当社はイギリス発祥の優れた証券取引会社であり、現在は日本市場への拡大を進めています。私たちは、証券取引における豊富な経験と専門知識を日本の投資家に提供することを喜んでいます。<br>
                Westminster International Inc.では、イギリスの金融業界の伝統と日本市場の独自の動向について深い理解を融合させています。私たちの優れた専門家チームは、両市場に精通しており、投資家の方々が情報を得て、適切な投資判断を行えるようサポートしています。<br>
                日本市場への進出を通じて、当社は先端技術プラットフォーム、高度なリサーチ能力、多様な投資商品とサービスをご紹介できることを誇りに思っています。私たちの目標は、経験豊かな投資家から初心者まで、株式取引の複雑さに対処できるツールや洞察力、パーソナライズされたサポートを提供することです。<br>
                当社の信頼性、透明性、および優れた顧客サービスへの取り組みは、私たちの活動の中心にあります。Westminster International Inc.では、信頼を基盤とした長期的な関係構築と、クライアントに合わせた解決策の提供に優先度を置いています。私たちとのパートナーシップを築くことで、グローバルなリソースにアクセスでき、日本市場への地域の専門知識や理解を享受できます。<br>
                イギリスと日本の金融の世界をつなぐこのエキサイティングな拡大の旅に参加しましょう。Westminster International Inc.では、株式市場の潜在力を引き出し、皆様の経済的目標を達成するお手伝いをさせていただきます。一緒に、両国およびそれ以上の地域において繁栄と成功への道を切り開きましょう。<br>
            </p>
        </div>
    </section>
</body>
</html>