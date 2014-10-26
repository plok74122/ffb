<html>
<head>
<title>小數減法測驗卷 </title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>

<body bgcolor="#FFCCCC" text="#FF9966" );">
<div align="center">
  <p><font size="4" color=black><b>小數減法測驗卷</b></font></p>
  <form action="ans3.php" method="post" name="form1" >

<?
$t1 = $mi1+$mi2;

if($t1>=6){          //出題條件的判斷
    echo "<font color=red>出題條件錯誤！本系統最多只練習到4位數字的減法(含小數)......","<br><br>","請按上一頁重新出題......</font>";
}else{

srand((double)microtime()*1000); 
echo "<table  border=0 width=90%><font size=3 color=black>";
for($i=1; $i<=20; $i++){    //此迴圈產生被加數與加數
  $minus1[$i-1] = (rand(pow(10,$t1-1),pow(10,$t1)-1)) / pow(10,$mi2);         //亂數產生被減數   
  $minus2[$i-1] = (rand(pow(10,$t1-1),pow(10,$t1)-1)) / pow(10,$mi2);         //亂數產生減數  

  if($minus1[$i-1] < $minus2[$i-1]){                 //若被減數 < 減數，則互換位置
     $tmp = $minus1[$i-1];
     $minus1[$i-1] = $minus2[$i-1];
     $minus2[$i-1] = $tmp;
  };
};
echo "</font>";

echo "<table  border=0 width=90%><font size=3 color=black>";    //出考題
for($j=1; $j<=20; $j++){              //出考題的迴圈
  if ($j % 4 ==1){                    //畫表格啟始線
    echo "<tr><td><p>";
  }else{
    echo "<td><p>";
  };

  echo "<p align=left><font size=3 color=black>(",$j,") ",$minus1[$j-1],"－",$minus2[$j-1],"＝";
  echo "<br><br><br><br><br><br><br><br><br></td>";
  $ans[$j-1] = $minus1[$j-1] - $minus2[$j-1];       //計算2個數的差
  echo "</td></font>";
  
  if($j % 4 == 0){
    echo " </tr>";
  }; 
};  //出考題的迴圈
echo "</table>";

echo "<br><br><br><br><table  border=0 width=90%><font color=black>解答：</font>";     //此迴圈列解答
for($k=1; $k<=20; $k++){ 
  if($k % 10 == 1){ 
    echo "<tr>";
  };
  echo "<td><font color=black>(",$k,")</font></td>";
  echo "<td><font color=black>",$ans[$k-1],"</font></td>";

  if($k %10 == 0){ 
    echo "</tr>";
  };
};    
echo "</table>";

};   //出題條件的判斷，勿刪！
?>

</form>
</div>
</body>
</html>


