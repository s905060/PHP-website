<html>
<head><title>選擇鈕的PHP程式</title></head>
<body>
<? 
$ok = $_POST["OK"];
switch ($ok) {
   case "not_ok":
      print "我不滿意，要加把勁<br>";
      break;
   case "ok":
      print "我很滿意，但還可以更好<br>";
      break;
} 
?>
</body>
</html>