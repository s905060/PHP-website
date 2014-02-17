<html>
<head><title>清單方塊的PHP程式</title></head>
<body>
<? 
$webs = $_POST["Webs"];  // 取得表單欄位的陣列
// 取得清單方塊選項陣列的各元素
foreach ($webs as $value) {
   switch (trim($value)) {
     case "w1":
        print "台灣大學<br>";
        break;
     case "w2":
        print "清華大學<br>";
        break;
     case "w3":
        print "交通大學<br>";
        break;
     case "w4":
        print "文化大學<br>";
        break;
   }
}
?>
</body>
</html>