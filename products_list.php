<?php
//建立首頁products list
$maxRows_rs = 8; //分頁設定數量
$pageNum_rs = 0; //起始頁
if (isset($_GET['pageNum_rs'])) {
    $pageNum_rs = $_GET['pageNum_rs'];
}
$startRow_rs = $pageNum_rs * $maxRows_rs;

if (isset($_GET['classid'])) {
    //使用產品類別查詢
    $queryFirst =  sprintf("SELECT * FROM product, product_img WHERE p_open = 1 AND product_img.sort = 1 AND product.p_id = product_img.p_id AND product.classid = '%d' ORDER BY product.p_id DESC", $_GET['classid']);
} else {
    $queryFirst =  sprintf("SELECT * FROM product, product_img WHERE p_open = 1 AND product_img.sort = 1 AND product.p_id = product_img.p_id ORDER BY product.p_id DESC", $maxRows_rs);
}

$query = sprintf("%s LIMIT %d , %d", $queryFirst, $startRow_rs, $maxRows_rs);
$pList01 = $link->query($query);
$i = 1; //控制每列row 產生
?>

<?php while ($pList01_Rows = $pList01->fetch()) { ?>
    <?php if ($i % 4 == 1) { ?>
        <div class="row justify-content-around  mx-auto"> <?php } ?>
        <div class="product col-md-2">
            <div class="p-body">
                <img src="./product_img/<?= $pList01_Rows['img_file'] != NuLL ? $pList01_Rows['img_file'] :'default.jpg'; ?>" alt="<?= $pList01_Rows['p_name'] ?>" title="<?= $pList01_Rows['p_name'] ?>" class="img-fluid">
                <button type="button" class="btn-add-to-cart text-center ">加入購物車</button>
            </div>
            <h5 class="card-title my-3"><?= $pList01_Rows['p_name'] ?></h5>
        </div>
        <?php if ($i % 4 == 0 || $i == $pList01->rowCount()) { ?>
        </div><?php } ?>
<?php $i++;
} ?>















<!-- <div class="row justify-content-around col-10 mx-auto">
    <div class="product col-md-2">
        <div class="p-body">
            <img src="./product_img/p001-1.jpg" alt="" class="img-fluid">
            <button type="button" class="btn-add-to-cart text-center ">加入購物車</button>
        </div>
        <h5 class="card-title my-3">春日派對印花抱枕</h5>
    </div>
    <div class="product col-md-2">
        <div class="p-body">
            <img src="./product_img/p002-1.jpg" alt="" class="img-fluid">
            <button type="button" class="btn-add-to-cart text-center ">加入購物車</button>
        </div>
        <h5 class="card-title my-3">【客製】璇木童趣藍天包</h5>
    </div>
    <div class="product col-md-2">
        <div class="p-body">
            <img src="./product_img/p003-1.jpg" alt="" class="img-fluid">
            <button type="button" class="btn-add-to-cart text-center ">加入購物車</button>
        </div>
        <h5 class="card-title my-3">帆布包訂做</h5>
    </div>
    <div class="product col-md-2">
        <div class="p-body">
            <img src="./product_img/p004-1.jpg" alt="" class="img-fluid">
            <button type="button" class="btn-add-to-cart text-center ">加入購物車</button>
        </div>
        <h5 class="card-title my-3">度假連身裙</h5>
    </div>
</div> -->