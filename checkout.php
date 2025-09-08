<!-- 這是將資料庫,連線程式載人 -->
<?php require_once('Connections/conn_db.php'); ?>
<!-- 如果SESSION沒啟動,則啟動SESSION功能,這是跨網頁變數存取 -->
<?php (!isset($_SESSION)) ? session_start() : ""; ?>
<!-- 載入共用PHP函數庫 -->
<?php require_once("php_lib.php"); ?>

<!doctype html>
<html lang="zh-TW">

<head>
    <!-- 引入網頁標頭 -->
    <?php require_once('headfile.php'); ?>
</head>

<body>
    <header>
        <!-- 引入導覽列 -->
        <?php require_once('navbar.php'); ?>
        <div class="container-fluid" id="content">
            <section class="row">
                <div class="col-md-2 sidebar">
                    <!-- 引入sidebar分類導覽列 -->
                    <?php require_once('sidebar.php'); ?>
                    <a href="./allproducts_menu.php"><button class="btn btn-success w-100" id="allproducts">全部產品一覽</button></a>
                </div>
                <div class="col-md-10 products " style="margin-top:100px;">
                    <!-- 結帳模組 -->
                    <?php //require_once('checkout.php'); 
                    ?>
                    <h3>電商藥妝：會員結帳作業</h3>
                    <div class="row">
                        <div class="card col px-0">
                            <div class="card-header" style="color:#007bff;"><i class="fas fa-truck fa-flip-horizontal me-1"></i>配送資訊</div>
                            <div class="card-body">
                                <div class="card-title">收件人資訊：</div>
                                <div class="card-title">姓名：李小明</div>
                                <p class="card-text">電話：0912345678</p>
                                <p class="card-text">郵遞區號：407台中市西屯區</p>
                                <p class="card-text">地址：中正路1號</p>
                                <a href="#" class="btn btn-outline-primary">選擇其他收件人</a>
                            </div>
                        </div>
                        <div class="card col mx-3 px-0">
                            <div class="card-header" style="color:#000;"><i class="fas fa-credit-card me-1"></i>付款方式</div>
                            <div class="card-body">
                                <div class="card-title">收件人資訊：</div>
                                <div class="card-title">姓名：李小明</div>
                                <p class="card-text">電話：0912345678</p>
                                <p class="card-text">郵遞區號：407台中市西屯區</p>
                                <p class="card-text">地址：中正路1號</p>
                                <a href="#" class="btn btn-outline-primary">選擇其他收件人</a>
                            </div>
                        </div>

                    </div>
                    <div class="table-responsive-md">
                        <table class="table table-hover mt-3">
                            <thead>
                                <tr class="text-bg-primary">
                                    <td width="10%">項目</td>
                                    <td width="10%">圖片</td>
                                    <td width="30%">名稱</td>
                                    <td width="15%">價格</td>
                                    <td width="15%">數量</td>
                                    <td width="20%">小計</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td><img src="product_img/p009-1.jpg" alt="" class="img-fluid"></td>
                                    <td>產品名稱放這裡</td>
                                    <td>
                                        <h5 class="color-e600a0">$999</h5>
                                    </td>
                                    <td>10</td>
                                    <td>
                                        <h5 class="color-e600a0">$999</h5>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">累計：123456</td>
                                </tr>
                                <tr>
                                    <td colspan="7">運費：100</td>
                                </tr>
                                <tr>
                                    <td colspan="7" class="color_red">總計：123456</td>
                                </tr>
                                <tr>
                                    <td colspan="7"><button type="button" class="btn btn-danger"><i class="fas fa-cart-arrow-down pr-2"></i>確認結帳</button></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </header>

    <!-- 頁尾 -->
    <?php require_once('footer.php'); ?>
    <!-- js檔 -->
    <?php require_once('jsfile.php'); ?>


</body>