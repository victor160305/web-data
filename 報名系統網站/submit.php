<?php
// 檢查是否有 POST 資料
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 取得 POST 資料
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $time = $_POST["time"];

    // 檢查時段是否已被選擇
    $filename = "data.txt";
    $file = fopen($filename, "r");
    $contents = fread($file, filesize($filename));
    fclose($file);
    if (strpos($contents, $time) !== false) {
        echo "此時段已被選擇，請選擇其他時段。";
    } else {
        // 寫入資料到檔案
        $data = "$name,$email,$phone,$time\n";
        $file = fopen($filename, "a");
        fwrite($file, $data);
        fclose($file);
        echo "報名成功！";
    }
}
?>