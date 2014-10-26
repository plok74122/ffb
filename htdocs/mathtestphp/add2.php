<html>
<head>
<title>考卷式加法心算測驗</title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>

<body bgcolor="#FFCCCC" text="#FF9966" );">
<div align="center">
  <p><font size="4" color=black><b>考卷式加法心算測驗</b></font></p>
  <form action="ans3.php" method="post" name="form1" >

<?
// $t1=幾位數的加法, $t2=幾位數連加

if($t1<1 or $t1>4){          //出題條件的判斷
    echo "<font color=red>出題條件錯誤！本系統只練習1位數～4位數的加法......","<br><br>","請按上一頁重新出題......</font>";
}elseif($t2<2 or $t2>4){
    echo "<font color=red>出題條件錯誤！本系統只練習2個～4個數字的加法......","<br><br>","請按上一頁重新出題......</font>";
}else{

srand((double)microtime()*1000); 
for($i=1; $i<=20; $i++){    //此迴圈產生被加數與加數
  $add1[$i-1] = rand(pow(10,$t1-1),pow(10,$t1)-1);         //亂數產生被加數   
  $add2[$i-1] = rand(pow(10,$t1-1),pow(10,$t1)-1);         //亂數產生加數1  
  $add3[$i-1] = rand(pow(10,$t1-1),pow(10,$t1)-1);         //亂數產生加數2 
  $add4[$i-1] = rand(pow(10,$t1-1),pow(10,$t1)-1);         //亂數產生加數3 
};
echo "</font>";

echo "<table  align=center border=0 cellpading=0 cellspacing=0 width=60%><font size=3 color=black>";
for($j=1; $j<=20; $j++){    //此迴圈出考卷
    if($t2-2 == 0){ 
      echo "<tr><td height=20><p align=center><font size=3 color=black>(",$j,") ",$add1[$j-1]," ＋ ",$add2[$j-1]," ＝ ______________</font></td></tr>";
      $sum[$j-1] = $add1[$j-1] + $add2[$j-1];       //計算2個數的和
    }elseif($t2-2 == 1){
      echo "<tr><td height=20><p align=center><font size=3 color=black>(",$j,") ",$add1[$j-1]," ＋ ",$add2[$j-1]," ＋ ",$add3[$j-1]," ＝ ______________</font></td></tr>";
      $sum[$j-1] = $add1[$j-1] + $add2[$j-1]+ $add3[$j-1];       //計算3個數的和
    }else{
      echo "<tr><td height=20><p align=center><font size=3 color=black>(",$j,") ",$add1[$j-1]," ＋ ",$add2[$j-1]," ＋ ",$add3[$j-1]," ＋ ",$add4[$j-1]," ＝ ______________</font></td></tr>";
      $sum[$j-1] = $add1[$j-1] + $add2[$j-1] + $add3[$j-1] + $add4[$j-1];       //計算4個數的和
    echo "</font>";
    };
};  //for
echo "</table>";

//此迴圈列解答
echo "<br><br><table  border=0 width=90%><font color=black>解答：</font>";     //此迴圈列解答
for($k=1; $k<=20; $k++){ 
  if($k % 10 == 1){ 
    echo "<tr>";
  };

  echo "<td><font color=black>(",$k,")</font></td><td><font color=black>",$sum[$k-1],"</font></td>";

  if($k % 10 == 0){ 
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