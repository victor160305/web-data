<?php
// 讀取儲存的資料
$data = file_get_contents('data.json');

// 解析 JSON 格式的資料
$jsonData = json_decode($data);

// 回傳資料
echo json_encode($jsonData);
?>
