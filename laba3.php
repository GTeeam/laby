<html>
<head>
<title>Лаб-раб3</title>
</head>
</html>
<?php

/*Задание №3-1*/
$names = array('num1' => 'Петя',
			   'num2' => 'Вася',
			   'num3' => 'Иван',
			   'num4' => 'Саша',
			   'num5' => 'Петя',
			   'num6' => 'Вася',
			   'num7' => 'Вася',
			   );
			   echo "<b>Подсчет Вась</b><br>";
			   $vasy_keys = array_keys($names,"Вася");
			   echo "Количество Вась в массиве - ",count($vasy_keys),"<br>";
			foreach($vasy_keys as $val){
					echo "Вася есть в массиве под номером: $val<br>";
						}
						
						
			/*Удаляю все похожие значения*/		
			echo"<br>";
 echo "<b>Убираем похожие значения массива</b><br>";			
			  $new_array = array_unique($names);
			  foreach($new_array as $key => $val){
			  echo $key," ",$val,"<br> ";
			  }
			  echo"<br>";
			   echo "<b>Удаляем Васю</b><br>";
			   
			   
			  /*Удаляю последнего Васю и вывожу оставшихся*/
			  unset($new_array['num2']);
			  foreach($new_array as $key => $val){
			  echo $key," ",$val,"<br>";
			  }
			  
			  
			/*Проверяю, действительно ли васи нет*/
			 $del = array_search("Вася",$new_array);
				echo"<br>";
			  echo "<b>Сортирую массив по убыванию</b><br>";
			  
			  
			 /*Сортировка*/
			 $sorting = rsort($new_array);
				foreach($new_array as $key => $val){
				
				echo $key," ",$val,"<br>";
				}
			
			 
			/*Задание №3-2*/
					/*array_chunk*/
					echo "<br><b>array_chunk</b><br>";
					echo "<br><b>Делим массив на под группы</b>";
					$new_names = array('Василий','Александр','Андрей','Валерий','Владимир');
						$two_person = array_chunk($new_names,2);
						
						foreach($two_person as $key => $val){
						
						echo "<br>Группа ",$key,"<br>";
						
						foreach($val as $pers){
						echo $pers,"<br>";
						}
			
				}
				
				/* array_slice*/
				echo "<br><b>array_slice</b><br>";
					$for_array_slice = array_slice($new_names,2);
						echo"<br>";
							foreach($for_array_slice as $key => $val){
								echo $key," ",$val,"<br>";	
							}
							
							/*Задание №3-3*/
							echo "<br> <b>Массив внутри массива</b>";
							$country_array = array(
							'Россия' => array('Москва','Ростов на дону','Санкт-Петербург','Краснодар'),
							'Германия' => array ('Берлин','Мюнхен','Гарбург','Дрезден'),
							'Италия' => array( 'Рим','Неаполь','Флоренция','Венеция'));
								foreach($country_array as $key => $val)
								{
										echo "<h3>",$key,"</h3><br>";
										
										foreach($val as $new_key => $new_val)
											{
												echo $new_val," ";
							
											}
											
								}
								echo"<br>";
								
								/*Задание №3-4*/
								
							$company_array = array(
							'Имя' => array('Александр','Андрей','Валерий','Василий'),
							'Фамилия' => array ('Петров','Алексеев','Ватсон','Дени цепной пес'),
							'Возраст' => array( '35','28','43','23'),
							'Телефон' => array('122-32-33','555-23-32','323-32-18','992-15-42'),
							'Адрес' => array('Ул.Кирова 43','Ул.Варфаламеева 43','Ул.Пушкина 12','Ул.Гагарина 77'),
							'Выручка за день' => array('5000','3300','7800','4500')
							);
							
						foreach($company_array as $k => $values)
								{echo "<table border=1 align='center' width='800' cellpadding='5'><tr>";
										echo "<td width='30%' valign='middle' aling='center'><h3>",$k,"</h3></td>";
										
										foreach($values as $new_k => $new_values)
											{
												echo "<td height='50' width='130' valign='middle' aling='center'>",
												$new_values,"</td>";
											}
											echo "</tr></table>";
										
								}	
								
								
								echo 'Сумма общей выручки за день = ',$sum_array = array_sum($company_array['Выручка за день']);
			 
			   ?>