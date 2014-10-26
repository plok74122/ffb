<html>
<head>
<title>橫式除法心算測驗電腦評分</title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>

<body bgcolor="#FFCCCC" text="#FF9966">
<div align="center">
  <p><font size="4" color=blue><b>橫式除法心算測驗電腦評分</b></font></p>


<?
echo "<table  border=0 width=90%><font color=black></font>";

echo $q1;
echo $ans1[0];
  if($ans1[0] == $q1){
    echo "你答對第1題！";
  }else{
    echo "第1題答錯了！正確答案是：",$ans1[0];
  };
 
echo "</table>";

?>

</div>
</body>
</html>
