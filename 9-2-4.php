<html>
<head><title>URL參數傳遞資料</title></head>
<body background="../bg/10_07_061.jpg">
<p><font color="red">
  <?
//  取得URL參數
$username = $_GET["Username"];
$pass = $_GET["Password"];
// 顯示參數值
echo "使用者名稱: " . $username . "<br>";
echo "使用者密碼: " . $pass . "<br>";
?>
</font></p>
<p>看到此頁代表成功</p>
</body>
</html>