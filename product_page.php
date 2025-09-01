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

                    <div class="card mb-3 col-10" style="height:800px;">
                        <div class="row g-0 mt-3">
                            <div class="col-md-3 ms-3 ">
                                <?php
                                //取得產品圖片檔名資料
                                $SQLstring = sprintf("SELECT * FROM product_img WHERE product_img.p_id = %d ORDER BY sort", $_GET['p_id']);
                                $img_rs = $link->query($SQLstring);
                                $imgList = $img_rs->fetch();
                                ?>
                                <img id="showGoods" name="showGoods" src="product_img/<?= $imgList['img_file'] != NULL ? $imgList['img_file'] : 'default.jpg'; ?>" class="img-fluid rounded-3 m-3" alt="<?= $data['p_name']; ?>" title="<?= $data['p_name']; ?>">
                                <div class="row mt-2">
                                    <?php
                                    do { ?>
                                        <div class="col-md-4">
                                            <a href="product_img/<?= $imgList['img_file']; ?>" rel="group" class="fancybox" title="<?= $data['p_name']; ?>">
                                                <img src="product_img/<?= $imgList['img_file'] != NULL ? $imgList['img_file'] : 'default.jpg'; ?>" alt="<?= $data['p_name']; ?>" title="<?= $data['p_name']; ?>" class="img-fluid ms-3">
                                            </a>
                                        </div>
                                    <?php } while ($imgList = $img_rs->fetch()) ?>
                                </div>
                            </div>
                            <div class="col-md-8 ps-3">
                                <div class="card-body">
                                    <h3 class="card-title"><?= $data['p_name']; ?></h3>
                                    <p class="card-text"><?= $data['p_intro']; ?></p>
                                    <h4 class="color-e600a0">$<?= $data['p_price']; ?></h4>
                                    <div class="row mt-3">
                                        <div class="my-3">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>請選擇款式</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-text color-success" id="inputGroup-sizing-lg">數量</span>
                                                <input type="number" id="qty" name="qty" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" value="1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button name="button01" id="button01" type="button" class="btn btn-success btn-lg color-success">加入購物車</button>
                                        </div>
                                        <p class="my-4 p_content"><?= $data['p_content']; ?></p>
                                    </div>
                                </div>
                                <div class="row ms-3">
                                    <div class="col mx-1">
                                        <h5 class="mx-0">圖紋介紹</h5>
                                        <hr class="border-bottom border-success border-3">
                                        <p></p>
                                    </div>
                                    <div class="col mx-3">
                                        <h5>規格說明</h5>
                                        <hr class="border-bottom border-success border-3">
                                        <p>
                                            材質：帆布 <br>
                                            工藝：印刷 <br>
                                            尺寸：Ｗ30xＨ38xＤ6cm
                                        </p>
                                    </div>
                                </div>
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