<html>
<head>
<title>直式乘法測驗卷 </title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>

<body bgcolor="#FFCCCC" text="#FF9966">
  <p align="center"><font size="4" color=black><b>直式乘法測驗卷</b></font></p>

<?
if($mm1 < $mm3){                 //若被乘數 < 乘數，則互換位置
     $tmp = $mm1;
     $mm1 = $mm3;
     $mm3 = $tmp;
};
if($mm1<1 or $mm3<1){          //出題條件的判斷
    echo "<font color=red>出題條件錯誤！最少須為 1 位數的乘法......","<br><br>","請按上一頁重新出題......</font>";
}elseif($mm1>4 or $mm3>2){
    echo "<font color=red>出題條件錯誤！本程式只練習到被乘數 4 位數、乘數 2 位數的乘法......","<br><br>","請按上一頁重新出題......</font>";
}else{


srand((double)microtime()*1000);          //程式開始
for($i=1; $i<=20; $i++){                  //此迴圈產生被乘數與乘數
  $multi1[$i-1] = (rand(pow(10,$mm1-1),pow(10,$mm1)-1)) / pow(10,$mm2);         //亂數產生被乘數   
  $multi2[$i-1] = (rand(pow(10,$mm3-1),pow(10,$mm3)-1)) / pow(10,$mm4);         //亂數產生乘數  
};



echo "<font size=3 color=black>";    //出考題
for($j=1; $j<=20; $j++){              //出考題的迴圈
  echo "<p align=center><font size=3 color=black>(",$j,") ",$multi1[$j-1]," × ",$multi2[$j-1]," ＝ ____________</p></font>"; 
  $ans[$j-1] = $multi1[$j-1] * $multi2[$j-1];       //計算2個數的積
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


};   //出題條件的判斷，勿刪！
?>

</body>
</html>

  

