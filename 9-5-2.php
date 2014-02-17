<html>
<head><title>核取方塊的PHP程式</title></head>
<body>
<b><p>今日完成工作項目：</p></b>
<p>
  <? 
if (isset($_POST["a"]))
   print "打卡<br>";
if (isset($_POST["b"]))
   print "開會<br>";
if (isset($_POST["c"]))
   print "會後跟老闆討論<br>";
   if (isset($_POST["d"]))
   print "設法解決問題<br>";
if (isset($_POST["e"]))
   print "尋求協助<br>";
if (isset($_POST["f"]))
   print "午餐/午休<br>";
   if (isset($_POST["g"]))
   print "再加把勁<br>";
if (isset($_POST["h"]))
   print "快完成了<br>";
if (isset($_POST["i"]))
   print "總算完成<br>";
   if (isset($_POST["j"]))
   print "下班走人<br>";
?>
</p>
</body>
</html>