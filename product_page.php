<!-- 這是將資料庫,連線程式載人 -->
<?php require_once('Connections/conn_db.php'); ?>
<!-- 如果SESSION沒啟動,則啟動SESSION功能,這是跨網頁變數存取 -->
<?php (!isset($_SESSION)) ? session_start() : ""; ?>
<!-- 載入共用PHP函數庫 -->
<?php require_once("php_lib.php"); ?>

<?php
// 判斷 classid
$SQLclass = sprintf("SELECT classid FROM product WHERE p_id = %d", $_GET['p_id']);
$class_rs = $link->query($SQLclass);
$class_data = $class_rs->fetch();

// 如果 classid = 4，導向另一個版型
if ($class_data['classid'] == 4) {
    header("Location: product_page_v2.php?p_id=" . $_GET['p_id']);
    exit;
}
?>


<!doctype html>
<html lang="zh-TW">

<head>
    <!-- 引入網頁標頭 -->
    <?php require_once('headfile.php'); ?>
    <link rel="stylesheet" href="./css/product_page.css">
    <link rel="stylesheet" href="./fancybox-2.1.7/source/jquery.fancybox.css">
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
                                    do {
                                        if ($imgList['p_default'] == 1) {  // ✅ 只輸出 p_default == 1 的圖片
                                    ?>
                                            <div class="col-md-4">
                                                <a href="product_img/<?= $imgList['img_file']; ?>" rel="group" class="fancybox thumbnail" title="<?= $data['p_name']; ?>">
                                                    <img src="product_img/<?= $imgList['img_file'] != NULL ? $imgList['img_file'] : 'default.jpg'; ?>" alt="<?= $data['p_name']; ?>" title="<?= $data['p_name']; ?>" class="img-fluid ms-3">
                                                </a>
                                            </div>
                                    <?php }
                                    } while ($imgList = $img_rs->fetch()) ?>
                                </div>
                            </div>
                            <div class="col-md-8 ps-3">
                                <div class="card-body">
                                    <h3 class="card-title"><?= $data['p_name']; ?></h3>
                                    <p class="card-text"><?= $data['p_intro']; ?></p>
                                    <h4 class="color-e600a0">$<?= $data['p_price']; ?></h4>
                                    <div class="row mt-3">
                                        <div class="my-3">
                                            <?php
                                            // 撈 patterns (radio 按鈕用)
                                            $patternSQL = "SELECT * FROM patterns";
                                            $pattern_rs = $link->query($patternSQL);
                                            while ($patterns = $pattern_rs->fetch()) { ?>
                                                <input type="radio" class="btn-check" name="options" id="option<?= $patterns['pat_id'] ?>" autocomplete="off"
                                                    data-pid="<?= $_GET['p_id'] ?>"
                                                    data-pat="<?= $patterns['pat_id'] ?>">
                                                <label class="btn btn-secondary" for="option<?= $patterns['pat_id'] ?>"><?= $patterns['pat_name'] ?></label>
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-text color-success" id="inputGroup-sizing-lg">數量</span>
                                                <input type="number" id="qty" name="qty" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" value="1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button name="button01" id="button01" type="button" class="btn btn-success btn-lg color-success" id="qty" name="qty" onclick="addcart(<?= $data['p_id']; ?>)">>加入購物車</button>
                                        </div>
                                        <p class="my-4 p_content"><?= $data['p_content']; ?></p>
                                    </div>
                                </div>
                                <div class="row ms-3">
                                    <div class="col mx-1">
                                        <h5 class="mx-0 title-font">圖紋介紹</h5>
                                        <hr class="border-bottom border-success border-3">
                                        <p></p>
                                    </div>
                                    <div class="col mx-3">
                                        <h5 class="title-font">規格說明</h5>
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
    <script type="text/javascript" src="./fancybox-2.1.7/source/jquery.fancybox.js"></script>
    <script>
        $(function() {
            //定義在mouseover時將圖檔名填入主圖src
            $(".thumbnail").mouseover(function() {
                var imgsrc = $(this).children("img").attr("src");
                $("#showGoods").attr({
                    "src": imgsrc
                });
            });
        });

        //將子圖片放到lightbox展示
        $(".fancybox").fancybox();
    </script>
    <script>
        $(function() {
            // 點擊選擇不同的radio按鈕時，更新主圖（#showGoods）
            $(".btn-check").click(function() {
                var pid = $(this).data("pid"); // 取得 p_id
                var pat = $(this).data("pat"); // 取得 pat_id

                // 發送 AJAX 請求到伺服器，根據 p_id 和 pat_id 查找圖片
                $.ajax({
                    url: "get_image.php", // 伺服器端處理圖片查詢的檔案
                    method: "GET",
                    data: {
                        p_id: pid,
                        pat_id: pat
                    },
                    success: function(response) {
                        // 檢查回應是否包含 imgSrc
                        console.log("AJAX 回應:", response); // 檢查完整回應

                        if (response.imgSrc) {
                            var imgSrc = response.imgSrc;

                            // 在這裡處理可能的反斜線問題，替換所有的 '\/' 為 '/'
                            imgSrc = imgSrc.replace(/\\\//g, '/'); // 注意這個正則表達式：替換斜線

                            console.log("圖片路徑：", imgSrc); // 檢查圖片路徑

                            // 更新主圖
                            $("#showGoods").attr("src", imgSrc);

                            // 更新縮略圖
                            $(".fancybox").each(function() {
                                var thumbnailImgSrc = $(this).attr("href");
                                if (thumbnailImgSrc.indexOf(pat) !== -1) {
                                    // 更新縮略圖
                                    $(this).find("img").attr("src", thumbnailImgSrc);
                                }
                            });
                        } else {
                            console.error("錯誤：無法獲取圖片路徑！");
                            alert("圖片更新失敗，請稍後再試1");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX 錯誤：", status, error); // 打印錯誤訊息
                        alert("圖片更新失敗，請稍後再試2");
                    }
                });
            });






            // // 當點擊「加入購物車」按鈕時，更新圖片
            // $("#button01").click(function() {
            //     var selectedPatId = $("input[name='options']:checked").data("pat"); // 取得選中的圖案pat_id
            //     var selectedPid = $("input[name='options']:checked").data("pid"); // 取得選中的產品p_id

            //     // 查找對應的圖片
            //     var imgSrc = $("img[data-pid='" + selectedPid + "'][data-pat='" + selectedPatId + "']").attr("src");

            //     // 更新主圖
            //     $("#showGoods").attr("src", imgSrc);

            //     // 更新縮略圖
            //     $(".fancybox").each(function() {
            //         var thumbnailImgSrc = $(this).attr("href");
            //         if (thumbnailImgSrc.indexOf(selectedPatId) !== -1) {
            //             // 選擇符合的縮略圖並更換
            //             $(this).find("img").attr("src", thumbnailImgSrc);
            //         }
            //     });
            // });
        });
    </script>

</body>