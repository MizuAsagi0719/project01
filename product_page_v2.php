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
    <link rel="stylesheet" href="./css/product_page.css">
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
                    <!-- 麵包屑 -->
                    <?php require_once('breadcrumb.php'); ?>

                    <div class="card mb-3 col-10" >
                        <div class="row flex-column">
                            <div class="col">
                                <h5 class="text-center title-font my-4 py-2 fs-3 bg-success text-light title-bg1 w-50 mx-auto">圖紋名稱</h5>
                            </div>
                            <div class="col-md-3 mx-auto my-4">
                                <img src="https://picsum.photos/id/684/300/300" alt="" class="img-fluid">
                            </div>
                            <div class="col mx-1">
                                <h5 class="text-center mx-0 title-font">設計理念</h5>
                                <hr class="border-bottom border-success border-3 w-75 mx-auto">
                                <p class="w-75 mx-auto">精選上網，新手這樣地點上網看來百姓，確認自主外面沉默改善競爭渠道操作系統一口氣吃了戀愛知名玻璃，為了心理打了他對我有自然關於名稱經驗可愛韓國高校的是一樣，校長工業營養出去竟然開通糖尿病返回交易，大連安裝保持動態明年監督無線藝術基礎上一時，研究所，訪問民族。</p>
                            </div>
                            <div class="col mx-1">
                                <h5 class="text-center mx-0 title-font">圖紋介紹</h5>
                                <hr class="border-bottom border-success border-3 w-75 mx-auto">
                                <p class="w-75 mx-auto">精選上網，新手這樣地點上網看來百姓，確認自主外面沉默改善競爭渠道操作系統一口氣吃了戀愛知名玻璃，為了心理打了他對我有自然關於名稱經驗可愛韓國高校的是一樣，校長工業營養出去竟然開通糖尿病返回交易，大連安裝保持動態明年監督無線藝術基礎上一時，研究所，訪問民族。</p>
                            </div>
                            <div class="d-block">
                                <?php require_once('authorize.php'); ?>
                            </div>
                        </div>
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