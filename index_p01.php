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
            <div class="row">
                <div class="col-md-2 sidebar">
                    <!-- 引入sidebar分類導覽列 -->
                    <?php require_once('sidebar.php'); ?>
                </div>
                <div class="col-md-10">
                    <!-- 廣告輪播 -->
                    <?php require_once('carousel_1.php'); ?>
                </div>
            </div>
        </div>
    </header>
    <section class="container-fluid">
        <div class="row text-center my-5">
            <div class="col-md-8 mx-auto">
                <hr>
                <p id="slogan">「花現生活，發現美一天。」</p>
                <hr>
            </div>
        </div>
        <div class="row col-md-10 mx-auto mb-5 container">
            <!-- 廣告輪播2 -->
            <?php require_once('carousel_2.php'); ?>
        </div>
        <div class="container-fluid brand ">
            <div class="row col-md-10 mx-auto ">
                <div class="col-8 my-5">
                    <h4 class="fs-2 px-3 to-animate opacity-0" data-animation="animate__fadeInUp">品牌理念</h4>
                    <p class="fs-4 px-3 to-animate opacity-0" data-animation="animate__fadeInUp" data-delay="animate__delay-1s">花現小錄致力於將創意與藝術融入日常生活，透過精心設計的印花圖紋，讓每一件商品都成為獨特的藝術品。每一款印花圖案都源自對自然、文化和個性化風格的探索，旨在為消費者帶來不僅是商品，更是一種表達自我的方式。無論是日常穿著還是居家裝飾，希望每一件商品都能傳遞出個人獨特的態度，並讓每個細節都閃耀出無限的創造力與生活品味。</p>
                </div>
                <div class="col-4 to-animate opacity-0 my-5" data-animation="animate__zoomIn" data-delay="animate__delay-2s">
                    <img src="./images/brand.jpg" alt="" class="img-fluid ps-1">
                </div>
            </div>
        </div>
        <div class="container-fluid products ">
            <h4 class="text-center my-3">產品展示</h4>
            <hr class="my-4">
            <!-- 產品列表 -->
            <?php require_once('products_list.php'); ?>

        </div>
    </section>
    <!-- 頁尾 -->
    <?php require_once('footer.php'); ?>
    <!-- js檔 -->
    <?php require_once('jsfile.php'); ?>


</body>