<?php
header('Access-Control-Allow-Origin: *'); //設定 CORS（跨來源資源共享，Cross-Origin Resource Sharing）權限的。它告訴瀏覽器：允許「任意來源」的網頁或 JavaScript 來向這個伺服器發送請求（像是 AJAX、Fetch API 等）。
header('Content-Type: application/json;charset=utf-8'); //return json string

require_once('Connections/conn_db.php');
if (isset($_GET['p_id']) && isset($_GET['qty'])) {
    $p_id = $_GET['p_id'];
    $qty = $_GET['qty'];
    $u_ip = $_SERVER['REMOTE_ADDR'];
    //查詢是否有相同的產品編號
    $query = "SELECT * FROM cart WHERE p_id =" . $p_id . " AND ip='" . $_SERVER['REMOTE_ADDR'] . "' AND orderid IS NULL ";
    $result = $link->query($query);
    if ($result) {
        if ($result->rowCount() == 0) {
            $query = "INSERT INTO cart (p_id, qty, ip) VALUES (" . $p_id . "," . $qty . ",'" . $u_ip . "')";
        } else {
            $cart_data = $result->fetch();
            if ($cart_data['qty'] + $qty > 49) {
                $qty = 49; //上限
            } else {
                $qty = $qty + $cart_data['qty'];
            }
            $query = "UPDATE cart SET qty='" . $qty . "' WHERE cart.cartid=" . $cart_data['cartid'];
        }
        $result = $link->query($query);
        $retcode = array("c" => "1", "m" => '謝謝您！已將產品加入購物車！');
    } else {
        $retcode = array("c" => "0", "m" => '抱歉！資料無法寫入後台資料庫，請洽管理人員');
    }
    echo json_encode($retcode, JSON_UNESCAPED_UNICODE);
}
return;
