<html>
<head>
<title>Лаб-раб2</title>
</head>
<body>
<form action="laba2.php" method="get">
<input type="text" name="age"><br>
<input type="submit">
</form>
<?php
/*Задание №2-1*/
error_reporting( E_ERROR );
$age = $_GET['age'];
if($age >=18 and $age<=59){
echo"Вам ещё работать и работать";
}
elseif($age>59){
echo "Вам пора на пенсию";
}
elseif($age>=1 and $age<=17){
echo "Вам ещё рано работать";
}
elseif(gettype($age) != "integer"){
echo "Неизвенный возраст";
}



/* Задание №2-2*/
echo "<table align='center' border=1 cellpadding='5' bordercolor='white' style='color:white'  bgcolor='#4B0082'<tr>";
$cols = 10;
$rows = 10;
	function chetnost($num){
	
	$v = $num/2;
		
	if(gettype($v) == 'integer'){
		return true;
	}
}


	for($i=1; $i<=$cols;$i++){
			for($j=1; $j<=$rows;$j++){
					if($j == 1){echo "<td bgcolor='#071871' height='40' width='50' align='center' valign='middle'>";}
					elseif($i == 1){echo "<td bgcolor='#071871' height='10' width='50' align='center' valign='middle'>";}
					
					elseif(chetnost($i)){
						echo "<td bgcolor='7080D7' height='40' width='50' align='center' valign='middle'>";
						}
						else{echo "<td bgcolor='#4B0082' align='center' valign='middle'>";}
			echo ($i*$j),"</td>";}
			echo "</tr>";
	};
	echo "</tr></table>";
?>
</body>
</html>