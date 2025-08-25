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
                        <!-- 麵包屑 -->
                        <?php require_once('breadcrumb.php'); ?>
                        <!-- 商品列表 -->
                        <?php require_once('menu.php'); ?>
                    </div>
                </section>
        </div>
    </header>

    <!-- 頁尾 -->
    <?php require_once('footer.php'); ?>
    <!-- js檔 -->
    <?php require_once('jsfile.php'); ?>


</body>