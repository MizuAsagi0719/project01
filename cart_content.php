<?php
//建立購物車查詢
$SQLstring = "SELECT * FROM cart,product,product_img WHERE ip='" . $_SERVER['REMOTE_ADDR'] . "' AND orderid IS NULL AND cart.p_id=product_img.p_id AND cart.p_id=product.p_id AND product_img.sort=1 ORDER BY cartid DESC";
$cart_rs = $link->query($SQLstring);
$ptotal = 0; //設定累加變數，初始=0
?>

<h3>購物車</h3>
<?php if ($cart_rs->rowCount() != 0) { ?>
    <a href="allproducts_menu.php" id="btn01" name="btn01" class="btn btn-primary">繼續購物</a>
    <!-- <button type="button" id="btn02" name="btn02" class="btn btn-info" onclick="window.history.go(-1)">回到上一頁</button> -->
    <button type="button" id="btn03" name="btn03" class="btn btn-danger" onclick="btn_confirmLink('確定清空購物車？','shopcart_del.php?mode=2');">清空購物車</button>
    <a href="checkout.php" id="btn04" name="btn04" class="btn btn-success">前往結帳</a>
    <div class="table-responsive-md">
        <table class="table table-hover mt-3">
            <thead>
                <tr class="table-secondary">
                    <td width="10%">項目</td>
                    <td width="10%">圖片</td>
                    <td width="25%">名稱</td>
                    <td width="15%">價格</td>
                    <td width="10%">數量</td>
                    <td width="15%">小計</td>
                    <td width="15%">下次再買</td>
                </tr>
            </thead>
            <tbody>
                <?php $index = 1;
                 while ($cart_data = $cart_rs->fetch()) { ?>
                    <tr>
                        <td><?= $index++; ?></td>
                        <td>
                            <img src="./product_img/<?= $cart_data['img_file']; ?>" alt="<?= $cart_data['p_name']; ?>" class="img-fluid">
                        </td>
                        <td><?= $cart_data['p_name']; ?></td>
                        <td>
                            <h5 class="color-e600a0 pt-1">$<?= $cart_data['p_price']; ?></h5>
                        </td>
                        <td style="min-width: 100px;">
                            <div class="input-group">
                                <input type="number" class="form-control" id="qty[]" name="qty[]" value="<?= $cart_data['qty']; ?>" min="1" max="49" cartid="<?= $cart_data['cartid']; ?>" required>
                            </div>
                        </td>
                        <td>
                            <h5 class="color-e600a0 pt-1">$<?= $cart_data['p_price'] * $cart_data['qty']; ?></h5>
                        </td>
                        <td><button type="button" id="btn[]" name="btn[]" class="btn btn-danger" onclick="btn_confirmLink('確定刪除這筆資料？','shopcart_del.php?mode=1&cartid=<?= $cart_data['cartid']; ?>');">取消</button></td>
                    </tr>
                <?php $ptotal += $cart_data['p_price'] * $cart_data['qty'];
                } ?>
            </tbody>
            <tfoot >
                <tr >
                    <td colspan="7" class="text-end pe-5">累計：<?= $ptotal; ?></td>
                </tr>
                <tr >
                    <td colspan="7" class="text-end pe-5">運費：100</td>
                </tr>
                <tr>
                    <td colspan="7" class="text-end pe-5 text-danger" >總計：<?= $ptotal + 100; ?></td>
                </tr>
            </tfoot>
        </table>
    </div>
<?php } else { ?>
    <div class="alert alert-warning" role="alert">
        目前購物車內沒有產品，快來加入購物車吧！
    </div>
<?php } ?>

