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
    <link rel="stylesheet" href="../assets/css/trade-styles.css">
    <script src="../assets/js/nav-sys.js"></script>
    <script src="../assets/js/stock-market-table-sys.js"></script>
    <title>Stock Market</title>
</head>
<body>
    <?php include_once 'main-nav.php'?>
    <dialog id="done-buying-modal">
        <p>Purchase made! This page will now be redirected for verification!</p>
    </dialog>
    <dialog id="trade-modal" class="trade-modal">
        <form action="" method="post" class="trade-form" id="trade-form">
            <label for="stocks_id">Stock id</label>
            <input type="text" name="stocks_id" id="stocks-id" readonly>
            <label for="stocks_name">Stock Name</label>
            <input type="text" name="stocks_name" id="stocks-name" readonly>
            <label for="stocks_price">Stock Price</label>
            <input type="text" name="stocks_price" id="stocks-price" readonly>
            <div class="price-fields">
                <div class="prices">
                    <label for="stocks_quantity">Stock Quantity</label>
                    <input type="number" name="stocks_quantity" id="stocks-quantity" required placeholder="Input Stocks Quantity" min="1">
                </div>
                <div class="prices">
                    <label for="stocks_total_price">Total Price(in Japanese Yen)</label>
                    <input type="number" name="stocks_total_price" id="stocks-total-price" readonly>
                    <p class="error-dialog" id="total_price_ed"></p>
                </div>
            </div>
            <div class="button">
                
                <button type="submit" id="submit-button">Purchase</button>
            </div>
        </form>
        <button id="close-button" class="close-button">Cancel</button>
    </dialog>
   
    <section class="trade-body">
        <div class="trade-section">
            <table class="stock-market-table" id="stock-market-table">
                <thead>
                    <tr>
                        <th class="table-headers">ストックID</th>
                        <th class="table-headers">銘柄名</th>
                        <th class="table-headers">株価(円)</th>
                        <th class="table-headers">在庫変動</th>
                    </tr>
                </thead>
                <tbody id="stock-market-table-body">

                </tbody>
                
            </table>
        </div>
    </section>

    <script src="../assets/js/buying-stocks-sys.js"></script>
    
</body>
</html>