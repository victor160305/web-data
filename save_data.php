<?php
$data = file_get_contents('php://input');
$jsonData = json_decode($data);

// 設定儲存資料的檔案路徑
$filePath = 'data.json';

// 將資料轉換成 JSON 格式
$jsonData = json_encode($jsonData, JSON_PRETTY_PRINT);

// 儲存資料到檔案中
file_put_contents($filePath, $jsonData);

// 回傳成功訊息
echo 'Data saved successfully.';
?>
