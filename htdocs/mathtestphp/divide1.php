<html>
<head>
<title>橫式除法心算測驗</title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>

<body bgcolor="#FFCCCC" text="#FF9966">
  <p align="center"><font size="4" color=black><b>橫式除法心算測驗</b></font></p>

<?
if($d1<1){          //出題條件的判斷
    echo "<font color=red>出題條件錯誤！被除數最少須為 1 位數......","<br><br>","請按上一頁重新出題......</font>";
}elseif($d1>4){
    echo "<font color=red>出題條件錯誤！本程式只練習到 4 位數的除法......","<br><br>","請按上一頁重新出題......</font>";
}else{

srand((double)microtime()*1000);          //程式開始
for($i=1; $i<=20; $i++){                  //此迴圈產生被除數與除數
    $divide1[$i-1] = rand(pow(10,$d1-1),pow(10,$d1)-1);         //亂數產生被除數
    $divide2[$i-1] = rand(2,9);         //亂數產生除數

    if($divide2[$i-1] == 1){
      $divide2[$i-1] = 7; 
    };  
  
  if($divide1[$i-1] < $divide2[$i-1]){                 //若被除數 < 除數，則互換位置
     $tmp = $divide1[$i-1];
     $divide1[$i-1] = $divide2[$i-1];
     $divide2[$i-1] = $tmp;
  }; 
};

for($j=1; $j<=20; $j++){  
  echo "<p align=center><font size=3 color=black>　　　(",$j,") ",$divide1[$j-1]," ÷ ",$divide2[$j-1]," ＝ ____________</font></p>";
  $ans[$j-1] = $divide1[$j-1] / $divide2[$j-1];       //計算2個數的商
};  //出考題的迴圈


echo "<br><br><table  border=0 width=90%><font color=black>解答：</font>";     //此迴圈列解答
for($k=1; $k<=20; $k++){ 
  if($k % 4 == 1){ 
    echo "<tr>";
  };

  echo "<td><font color=black>",$k,".</font></td>";
  echo "<td><font color=black>",$ans[$k-1],"</font></td>";

  if($k %4 == 0){ 
    echo "</tr>";
  };
};    
echo "</table>";

};  // end of 出題條件的判斷

?>

</body>
</html>
