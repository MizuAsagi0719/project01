<?php
header('Content-Type: application/json');  // 設定返回格式為 JSON

require_once('Connections/conn_db.php'); // 載入資料庫連線

// 取得來自 AJAX 的 p_id 和 pat_id 參數
$p_id = isset($_GET['p_id']) ? $_GET['p_id'] : null;
$pat_id = isset($_GET['pat_id']) ? $_GET['pat_id'] : null;

// 檢查是否傳入了所需的參數
if ($p_id && $pat_id) {
    // 查詢資料庫以取得相對應的圖片路徑
    $query = "SELECT img_file FROM product_img WHERE p_id = :p_id AND pat_id = :pat_id";
    
    $stmt = $link->prepare($query);
    $stmt->bindParam(':p_id', $p_id, PDO::PARAM_INT);
    $stmt->bindParam(':pat_id', $pat_id, PDO::PARAM_INT);
    $stmt->execute();

    // 檢查是否找到了對應的圖片
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // 取得圖片檔案名稱
        $imgSrc = 'product_img/' . $row['img_file']; // 例如：p001-1.jpg
        echo json_encode(['imgSrc' => $imgSrc]);  // 回傳圖片路徑
    } else {
        // 如果沒有找到圖片，返回預設圖片
        echo json_encode(['imgSrc' => 'product_img/default.jpg']);
    }
} else {
    // 如果沒有傳入 p_id 或 pat_id，返回錯誤
    echo json_encode(['error' => 'Missing parameters']);
}
?>
