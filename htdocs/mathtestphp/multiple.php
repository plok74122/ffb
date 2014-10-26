<html>
<head>
<title>最小公倍數測驗卷 </title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>

<body bgcolor="#FFCCCC" text="#FF9966">
<div align="center">
  <form action="num3.php" method="post" name="form1" >

<?
$zhi[0] = 2;
$zhi[1] = 3;
$zhi[2] = 5;
$zhi[3] = 7;
$zhi[4] = 11;
$zhi[5] = 13;
$zhi[6] = 17;
$zhi[7] = 19;
$zhi[8] = 23;
$zhi[9] = 29;
$zhi[10] = 31;
$zhi[11] = 37;
$zhi[12] = 41;
$zhi[13] = 43;
$zhi[14] = 47;

switch ($level) {
  case "basic":	                               //初級：質因數 2~11、2個質因數、2個數
    srand((double)microtime()*10000);          //程式開始
    
		for($i=1; $i<=20; $i++){           //此迴圈產生2個數
 			
 			$temp[0] = rand(2,3);      //第1組-介於2~3的因數   
 			$temp[1] = rand(2,11);     //第2組-介於2~11的因數
 			
 			$seed1 = rand(2,5);        //第3組-5以內互質的數
 			$seed2 = rand(2,5);
 			for($k=0; $k<=2; $k++){
 				while(($seed1 % $zhi[$k] == 0) AND ($seed2 % $zhi[$k] == 0)){
 					$seed2 = rand(2,5);
 				}
 			}
 			
  		$num1[$i-1] = $zhi[$temp[0]] * $zhi[$temp[1]] * $seed1;   	//產生2個數
  		$num2[$i-1] = $zhi[$temp[0]] * $zhi[$temp[1]] * $seed2;   
  		$ans[$i-1] =  $zhi[$temp[0]] * $zhi[$temp[1]] * $seed1 * $seed2;   
		};
  	break;
//-----------------------------------------------------------------------
  case "medium":                               //中級：質因數 2~11、2個質因數、2個數
    srand((double)microtime()*10000);          //程式開始
    
		for($i=1; $i<=20; $i++){                 //此迴圈產生
 			
 			$temp[0] = rand(2,3);            //第1組-介於2~3的因數 
 			$temp[1] = rand(2,11);           //第2組-介於2~11的因數
 			
 			$seed1 = rand(2,5);              //第3組-產生5以內互質的數
 			$seed2 = rand(2,5);
 			$seed3 = rand(2,5);
 			for($k=0; $k<=2; $k++){
 				while(($seed1 % $zhi[$k] == 0 AND $seed2 % $zhi[$k] == 0 AND $seed3 % $zhi[$k] == 0) OR ($seed1==$seed2) OR ($seed2==$seed3) OR ($seed1==$seed3)){
 					$seed2 = rand(2,5);
 					$seed3 = rand(2,5);
 				}
 			}
echo "<br>" , $temp[0] , " " , $temp[1] , " " , $seed1 , " " , $seed2 ; 

 			$num1[$i-1] = $zhi[$temp[0]] * $zhi[$temp[1]] * $seed1;   	//求最小公倍數的3個數
  		$num2[$i-1] = $zhi[$temp[0]] * $zhi[$temp[1]] * $seed2;      
			$num3[$i-1] = $zhi[$temp[0]] * $zhi[$temp[1]] * $seed3; 
			
 			$div = 1;     //若 $seed1、$seed2、$seed3 互質，則除以1
 			for($j=0; $j<=2; $j++){
 			  if($seed1 % $zhi[$j] ==0 AND $seed2 % $zhi[$j] ==0 AND $seed3 % $zhi[$j] ==0){
 			  	$div = $zhi[$j] * $zhi[$j];
 			  }elseif(($seed1 % $zhi[$j] ==0 AND $seed2 % $zhi[$j] ==0) OR ($seed2 % $zhi[$j] ==0 AND $seed3 % $zhi[$j] ==0) OR ($seed1 % $zhi[$j] ==0 AND $seed3 % $zhi[$j] ==0)){
 			  	$div = $zhi[$j];
				}
 			}
 			$ans[$i-1] = ($ans[$i-1] * $seed1 * $seed2 * $seed3) / $div;
		};
  	break;
//-----------------------------------------------------------------------
  case "advanced":								//質因數 2~29、2個質因數、3個數
    srand((double)microtime()*10000);          //程式開始
    
		for($i=1; $i<=20; $i++){                  //此迴圈產生
 			
 			$temp[0] = rand(0, 2);							//第1組質因數介於2~5 
 			$temp[1] = rand(0, 9);							//第2組質因數介於2~29
 			$ans[$i-1] =  $zhi[$temp[0]] * $zhi[$temp[1]];
 			
 			$seed1 = rand(2,5);                //第3組數是5以內的數
 			$seed2 = rand(2,5);
 			$seed3 = rand(2,5);
 			while($seed1==$seed2 OR $seed2==$seed3 OR $seed1==$seed3){     //這3組數必須不相等
 				$seed2 = rand(2,5);
 				$seed3 = rand(2,5);
 			}
 			$num1[$i-1] = $zhi[$temp[0]] * $zhi[$temp[1]] * $seed1;   	//要求最小公倍數的3個數
  		$num2[$i-1] = $zhi[$temp[0]] * $zhi[$temp[1]] * $seed2;      
			$num3[$i-1] = $zhi[$temp[0]] * $zhi[$temp[1]] * $seed3; 
 			
 			$div = 1;     //若 $seed1、$seed2、$seed3 互質，則除以1
 			for($j=0; $j<=2; $j++){
 			  if($seed1 % $zhi[$j] ==0 AND $seed2 % $zhi[$j] ==0 AND $seed3 % $zhi[$j] ==0){
 			  	$div = $zhi[$j] * $zhi[$j];
 			  }elseif(($seed1 % $zhi[$j] ==0 AND $seed2 % $zhi[$j] ==0) OR ($seed2 % $zhi[$j] ==0 AND $seed3 % $zhi[$j] ==0) OR ($seed1 % $zhi[$j] ==0 AND $seed3 % $zhi[$j] ==0)){
 			  	$div = $zhi[$j];
				}
 			}
 			$ans[$i-1] = ($ans[$i-1] * $seed1 * $seed2 * $seed3) / $div;
		};
    break;
}      

echo "<font size=4 color=black><center><b>求下列各數的最小公倍數:</b></center></font><br>";
echo "<table  border=0 width=90%><font size=3 color=black>";    //出考題
for($j=1; $j<=20; $j++){              //出考題的迴圈
  if ($j % 4 ==1){                    //畫表格啟始線
    echo "<tr><td><p>";
  }else{
    echo "<td><p>";
  };

  echo "<p align=left><font size=3 color=black>(",$j,") ";
  if($level=="basic"){
    echo '&nbsp;&nbsp;&nbsp;', $num1[$j-1],", ", $num2[$j-1]," <br><br><br><br><br><br><br><br><br>";
  }elseif($level=="medium"){
  	echo '&nbsp;&nbsp;&nbsp;',$num1[$j-1],", ", $num2[$j-1],", ", $num3[$j-1]," <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
  }elseif($level=="advanced"){
  	echo '&nbsp;&nbsp;&nbsp;',$num1[$j-1],", ", $num2[$j-1],", ", $num3[$j-1]," <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
  }	
  echo "</td></font>";
  
  if($j % 4 == 0){
    echo " </tr>";
  }; 
};  //出考題的迴圈
echo "</font></table>";


echo "<table  border=0 width=90%><font color=black>解答：</font>";     //此迴圈列解答
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
?>

</form>
</div>
</body>
</html>