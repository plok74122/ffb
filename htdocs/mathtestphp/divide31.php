<html>
<head>
<title>整除的直式除法測驗卷</title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>

<body bgcolor="#FFCCCC" text="#FF9966">
<div align="center">
  <p><font size="4" color=black><b>整除的直式除法測驗卷</b></font></p>
  <form action="divide3.php" method="post" name="form1" >

<?
if($d1<1 or $d2<1){          //出題條件的判斷
    echo "<font color=red>出題條件錯誤！最少須為 1 位數的除法......","<br><br>","請按上一頁重新出題......</font>";
}elseif($d1>4 or $d2>4){
    echo "<font color=red>出題條件錯誤！本程式只練習到 4 位數的除法......","<br><br>","請按上一頁重新出題......</font>";
}elseif($d1 < $d2){
    echo "<font color=red>出題條件錯誤！被除數須大於除數......","<br><br>","請按上一頁重新出題......</font>";
}else{

srand((double)microtime()*1000);          //程式開始
for($i=1; $i<=20; $i++){                  //此迴圈產生被除數與除數
  do{                                                   
    $divide1[$i-1] = rand(pow(10,$d1-1),pow(10,$d1)-1);         //亂數產生被除數  
    $divide2[$i-1] = rand(pow(10,$d2-1),pow(10,$d2)-1);         //亂數產生除數
    if($divide2[$i-1] == 1){
      $divide2[$i-1] = 7; 
    };  
  }while($divide1[$i-1] % $divide2[$i-1] != 0);
  
  if($divide1[$i-1] < $divide2[$i-1]){                 //若被除數 < 除數，則互換位置
     $tmp = $divide1[$i-1];
     $divide1[$i-1] = $divide2[$i-1];
     $divide2[$i-1] = $tmp;
  }; 
};



echo "<table  border=0 width=90%><font size=3 color=black>";    //出考題
for($j=1; $j<=20; $j++){              //出考題的迴圈
  if ($j % 4 ==1){                    //畫表格啟始線
    echo "<tr><td><p>";
  }else{
    echo "<td><p>";
  };

  echo "<p align=left><font size=3 color=black>第 ",$j," 題<br>";
  for($d=$d2; $d>=0; $d--){             //此迴圈產生除號線前的空白
    echo "&nbsp;&nbsp;";  
  };
  echo "________<br>";
  echo "&nbsp;",$divide2[$j-1],"&nbsp;)&nbsp;",$divide1[$j-1],"<br><br><br><br><br><br><br></td>";
  $ans1[$j-1] = $divide1[$j-1] / $divide2[$j-1];       //求商
  $ans2[$j-1] = $divide1[$j-1] % $divide2[$j-1];       //求餘數
  echo "</td></font>";
  
  if($j % 4 == 0){
    echo " </tr>";
  }; 
};  //出考題的迴圈
echo "</font></table>";



echo "<br><br><br><br><table  border=0 width=90%><font color=black>解答：</font>";     //此迴圈列解答
for($k=1; $k<=20; $k++){ 
  if($k % 10 == 1){ 
    echo "<tr>";
  };

  echo "<td><font color=black>(",$k,")</font></td>";
  echo "<td><font color=black>",$ans1[$k-1],"</font></td>";

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
