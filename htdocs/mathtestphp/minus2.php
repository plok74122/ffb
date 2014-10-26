<html>
<head>
<title>直式減法測驗卷 </title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>

<body bgcolor="#FFCCCC" text="#FF9966">
<div align="center">
  <p><font size="4" color=black><b>直式減法測驗卷</b></font></p>
  <form action="minus3.php" method="post" name="form1" >

<?
if($m1<1 or $m2<1){          //出題條件的判斷
    echo "<font color=red>出題條件錯誤！最少須為 1 位數的減法......","<br><br>","請按上一頁重新出題......</font>";
}elseif($m1 < $m2){
    echo "<font color=red>出題條件錯誤！被減數需大於減數......","<br><br>","請按上一頁重新出題......</font>";
}elseif($m1>4 or $m2>4){
    echo "<font color=red>出題條件錯誤！本程式只練習到 4 位數的減法......","<br><br>","請按上一頁重新出題......</font>";
}else{

	srand((double)microtime()*1000);          //程式開始
	for($i=1; $i<=40; $i++){                  //此迴圈產生被減數與減數
  	$minus1[$i-1] = rand(pow(10,$m1-1),pow(10,$m1)-1);         //亂數產生被減數   
  	$minus2[$i-1] = rand(pow(10,$m2-1),pow(10,$m2)-1);         //亂數產生減數  

  	if($minus1[$i-1] < $minus2[$i-1]){                 //若被減數 < 減數，則互換位置
    	$tmp = $minus1[$i-1];
    	$minus1[$i-1] = $minus2[$i-1];
    	$minus2[$i-1] = $tmp;
  	};
	}; // end of for

	echo "<table  align=center border=0 cellpading=0 cellspacing=0 width=75%><font size=3 color=black>";
	for($j=1; $j<=40; $j++){    //此迴圈出考卷
		if ($j % 2 == 1){                    //畫表格啟始線
    	echo "<tr><td height=20><font size=3 color=black>(",$j,") ",$minus1[$j-1]," － ",$minus2[$j-1]," ＝ ______________</font></td>";
  	}elseif($j % 2 == 0){
    	echo "<td height=20><font size=3 color=black>(",$j,") ",$minus1[$j-1]," － ",$minus2[$j-1]," ＝ ______________</font></td></tr>";
  	};   //end of if

  	$ans[$j-1] = $minus1[$j-1] - $minus2[$j-1];       //計算2個數的和
	};  //for
	echo "</table>";

 //此迴圈列解答
echo "<br><br><br><br><table  border=0 width=90%><font color=black>解答：</font>";     //此迴圈列解答
for($k=1; $k<=40; $k++){ 
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
