<html>
<head><title>下拉式清單方塊的PHP程式</title></head>
<body>
<? 
$gender = $_POST["Gender"];  // 取得欄位址
switch (strtoupper($gender)) {
   case "MALE":
      print "使用者姓別-男<br>";
      break;
   case "FEMALE":
      print "使用者姓別-女<br>";
      break;
} 
?>
</body>
</html>