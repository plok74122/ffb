<html>
<head>
<title>考卷式的除法心算測驗</title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>

<body bgcolor="#FFCCCC" text="#FF9966">
<div align="center">
  <p><font size="4" color=black><b>考卷式的除法心算測驗</b></font></p>
  <form action="divide3.php" method="post" name="form1" >

<?
if($d1<1){          //出題條件的判斷
    echo "<font color=red>出題條件錯誤！最少須為 1 位數的除法......","<br><br>","請按上一頁重新出題......</font>";
}elseif($d1>4){
    echo "<font color=red>出題條件錯誤！本程式只練習到除數為 4 位數的除法......","<br><br>","請按上一頁重新出題......</font>";
}else{

srand((double)microtime()*1000);          //程式開始
for($i=1; $i<=40; $i++){                  //此迴圈產生被除數與除數
  $divide1[$i-1] = rand(pow(10,$d1-1),pow(10,$d1)-1);         //亂數產生被除數  
  $divide2[$i-1] = rand(2,9);         //亂數產生除數
 
  if($divide1[$i-1] < $divide2[$i-1]){                 //若被除數 < 除數，則互換位置
     $tmp = $divide1[$i-1];
     $divide1[$i-1] = $divide2[$i-1];
     $divide2[$i-1] = $tmp;
  }; 
};


echo "<table align=center border=0 width=80%><font size=3 color=black>";    //出考題
for($j=1; $j<=40; $j++){              //出考題的迴圈
	if ($j % 2 ==1){                    //畫表格啟始線
    echo "<tr>";
  };   //end of if

  echo "<td height=20><p align=left><font size=3 color=black> (",$j,") ",$divide1[$j-1]," ÷ ",$divide2[$j-1]," ＝________ … _____</font></td>";
  $ans1[$j-1] = floor($divide1[$j-1] / $divide2[$j-1]);       //求商
  $ans2[$j-1] = $divide1[$j-1] % $divide2[$j-1];       //求餘數

  if($j % 2 == 0){
    echo " </tr>";
  }; 
  
};  //出考題的迴圈
echo "</font></table>";



echo "<br><br><table  border=0 width=90%><font color=black>解答：</font>";     //此迴圈列解答
for($k=1; $k<=40; $k++){ 
  if($k % 5 == 1){ 
    echo "<tr>";
  };

  echo "<td><font color=black>(",$k,") ",$ans1[$k-1]," … ",$ans2[$k-1],"</font></td>";

  if($k % 5 == 0){ 
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
