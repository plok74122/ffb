<html>
<head>
<title>小數乘法測驗卷 </title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>

<body bgcolor="#FFCCCC" text="#FF9966">
<div align="center">
  <p><font size="4" color=black><b>小數乘法測驗卷</b></font></p>
  <form action="multi3.php" method="post" name="form1" >

<?
$mm1 = $mm11+$mm12;
$mm2 = $mm21+$mm22;

if($mm1<1 or $mm2<1){          //出題條件的判斷
    echo "<font color=red>出題條件錯誤！最少須為 1 位數的乘法......","<br><br>","請按上一頁重新出題......</font>";
}elseif($mm1>5 or $mm2>5){
    echo "<font color=red>出題條件錯誤！本程式只練習到 5 位數的乘法......","<br><br>","請按上一頁重新出題......</font>";
}else{


srand((double)microtime()*1000);          //程式開始
for($i=1; $i<=20; $i++){                  //此迴圈產生被乘數與乘數
  $multi1[$i-1] = (rand(pow(10,$mm1-1),pow(10,$mm1)-1)) / pow(10,$mm12);         //亂數產生被乘數   
  $multi2[$i-1] = (rand(pow(10,$mm2-1),pow(10,$mm2)-1)) / pow(10,$mm22);         //亂數產生乘數  
};



echo "<table  border=0 width=90%><font size=3 color=black>";    //出考題
for($j=1; $j<=20; $j++){              //出考題的迴圈
  if ($j % 4 ==1){                    //畫表格啟始線
    echo "<tr><td><p>";
  }else{
    echo "<td><p>";
  };

  echo "<p align=left><font size=3 color=black>(",$j,") ";
  echo $multi1[$j-1]," × ", $multi2[$j-1]," ＝ <br><br><br><br><br><br><br><br><br>";
  $ans[$j-1] = $multi1[$j-1] * $multi2[$j-1];       //計算2個數的積
  echo "</td></font>";
  
  if($j % 4 == 0){
    echo " </tr>";
  }; 
};  //出考題的迴圈
echo "</font></table>";



echo "<br><br><br><br><table  border=0 width=90%><font color=black>解答：</font>";     //此迴圈列解答
for($k=1; $k<=20; $k++){ 
  if($k % 5 == 1){ 
    echo "<tr>";
  };

  echo "<td><font color=black>(",$k,")</font></td>";
  echo "<td><font color=black>",$ans[$k-1],"</font></td>";

  if($k %5 == 0){ 
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

  

