<?php
//建立首頁products list
$maxRows_rs = 12; //分頁設定數量
$pageNum_rs = 0; //起始頁
if (isset($_GET['pageNum_rs'])) {
    $pageNum_rs = $_GET['pageNum_rs'];
}
$startRow_rs = $pageNum_rs * $maxRows_rs;

if (isset($_GET['search_name'])) {
    //使用關鍵字查詢
    $queryFirst =  sprintf("SELECT * FROM product, product_img, pyclass WHERE p_open = 1 AND product_img.sort = 1 AND product.p_id = product_img.p_id AND product.classid = pyclass.classid AND product.p_name LIKE '%s'  ORDER BY product.p_id DESC", '%' . $_GET['search_name'] . '%');
} elseif (isset($_GET['level']) && $_GET['level'] == 1) {
    //使用第一層類別查詢
    $queryFirst =  sprintf("SELECT * FROM product, product_img, pyclass WHERE p_open = 1 AND product_img.sort = 1 AND product.p_id = product_img.p_id AND product.classid = pyclass.classid AND pyclass.uplink ='%d' ORDER BY product.p_id DESC", $_GET['classid']);
} elseif (isset($_GET['classid'])) {
    //使用產品類別查詢
    $queryFirst =  sprintf("SELECT * FROM product, product_img WHERE p_open = 1 AND product_img.sort = 1 AND product.p_id = product_img.p_id AND product.classid = '%d' ORDER BY product.p_id DESC", $_GET['classid']);
} else {
    $queryFirst =  sprintf("SELECT * FROM product, product_img WHERE p_open = 1 AND product_img.sort = 1 AND product.p_id = product_img.p_id ORDER BY product.p_id DESC", $maxRows_rs);
}

$query = sprintf("%s LIMIT %d , %d", $queryFirst, $startRow_rs, $maxRows_rs);
$pList01 = $link->query($query);
$i = 1; //控制每列row 產生
?>
<?php if ($pList01->rowCount() != 0) { ?>
    <div class="row justify-content-start">
        <?php while ($pList01_Rows = $pList01->fetch()) { ?>
            <div class="product col-12 col-sm-3 col-xl-2 mb-4 mx-5">
                <div class="p-body">
                    <a href="product_page.php?p_id=<?= $pList01_Rows['p_id']; ?>"><img src="./product_img/<?= $pList01_Rows['img_file'] != NULL ? $pList01_Rows['img_file'] : 'default.jpg'; ?>" alt="<?= $pList01_Rows['p_name'] ?>" title="<?= $pList01_Rows['p_name'] ?>" class="img-fluid"></a>
                    <button type="button" class="btn-add-to-cart text-center">加入購物車</button>
                </div>
                <p class="card-title my-3 fs-5"><?= $pList01_Rows['p_name'] ?></p>
            </div>
        <?php } ?>
    </div>



    <div class="row mt-2">
        <?php //取得目前分頁數
        if (isset($_GET['totalRows_rs'])) {
            $totalRows_rs = $_GET['totalRows_rs'];
        } else {
            $all_rs = $link->query($queryFirst); //計算總筆數
            $totalRows_rs = $all_rs->rowCount();
        }
        $totalPages_rs = ceil($totalRows_rs / $maxRows_rs) - 1;
        // 呼叫分頁功能
        $prev_rs = "&laquo";
        $next_rs = "&raquo";
        $separator = "|";
        $max_links = 20;
        $pages_rs = buildNavigation($pageNum_rs, $totalPages_rs, $prev_rs, $next_rs, $separator, $max_links, true, 3, "rs");
        ?>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <?= $pages_rs[0] . $pages_rs[1] . $pages_rs[2] ?>
            </ul>
        </nav>
    </div>

<?php } else { ?>
    <div class="alert alert-danger" role="alert">
        很抱歉，目前分類沒有相關產品上架。
    </div>
<?php } ?>