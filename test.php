<?
/* Массив $arr для копирования
$arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$arr = ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'];
*/
/* if-else сравнение значений и типов переменной
	$a = 1;
	if($a == 0) echo 'Верно'.'<br>';
	else echo 'Неверно'.'<br>';
	if($a < 0) echo 'Верно'.'<br>';
	else echo 'Неверно'.'<br>';
	if($a >= 0) echo 'Верно'.'<br>';
	else echo 'Неверно'.'<br>';
	if($a <= 0) echo 'Верно'.'<br>';
	else echo 'Неверно'.'<br>';
	if($a !== 0) echo 'Верно'.'<br>';
	else echo 'Неверно'.'<br>';
	if($a == 'test') echo 'Верно'.'<br>';
	else echo 'Неверно'.'<br>';
	if($a === 1) echo 'Верно'.'<br>';
	else echo 'Неверно'.'<br>';
*/
/* empty-isset проверка на существование переменной и ее заполнение
	$a = true; //переменная пуста, если значение null или false или '' 
	if(empty($a)) echo 'Верно'.'<br>'; //проверка на пустое значение переменной
	else echo 'Неверно'.'<br>';
	$a = true;  
	if(!empty($a)) echo 'Верно'.'<br>';//проверка на непустую переменую (!)
	else echo 'Неверно'.'<br>';
	$a = null;
	if(isset($a)) echo 'Верно'.'<br>'; //проверка на существование переменной (не null)
	else echo 'Неверно'.'<br>';
	$a = null;
	if(!isset($a)) echo 'Верно'.'<br>'; //проверка на несуществование переменной (null)
	else echo 'Неверно'.'<br>';
*/
/* if-else сравнение значение логических переменных
	$var = 'true';
	if($var == 'true') echo 'Верно'.'<br>';
	else echo 'Неверно'.'<br>';
	$var = 'true';
	if($var !== 'true') echo 'Верно'.'<br>';
	else echo 'Неверно'.'<br>';
*/
/* or-and сравнение нескольких значений
	$a =1;
	if($a > 0 and $a < 5) echo 'Верно'.'<br>';//сравнение значения переменной более чем по одному значению
	else echo 'Неверно'.'<br>';
	$a = 2;
	if($a == 0 or $a == 2) $a+=7;//сравнение значение по одному из нескольких значений
	else $a/=10;
	echo $a.'<br>';
	$a = 3;
	$b = 5;
	if($a <=1 and $b >=3) echo $a+$b.'<br>';//сравнение двух переменных по разным значениям
	else echo $a-$b.'<br>';
	$a = 4;
	$b = 13;
	if($a > 2 and $a < 11 or $b >= 6 and $b <14) echo 'Верно'.'<br>';// сравнение двух переменных по нескольким разным значениям
	else echo 'Неверно'.'<br>'
*/
/* switch-case сравнение значений переменной (для больших объемов)
$num = 4;
	switch($num){	//switch выбирает переменную для сравнения; case проверяет значение выбранной переменной и выполняет действия
		case 1:
			$result = 'зима';
		break; //break останавливает зону case
		case 2:
			$result = 'лето';
		break;
		case 3:
			$result = 'весна';
		break;
		case 4:
			$result = 'осень';
		break;
		}
		echo $result;
*/
/* elseif сокращенное elseif
	$day = 21;
	if($day >= 1 and $day <= 10) {
		echo 'Первая декада'.'<br>';
	}elseif($day >= 11 and $day <= 20) {
		echo 'Вторая декада'.'<br>';
	}elseif($day >= 21 and $day <= 31) {
		echo 'Третья декада'.'<br>';
	}
	$month = 1;
	if($month >= 1 and $month <= 3) {
		echo 'Зима'.'<br>';
	}elseif($month >= 4 and $month <= 6) {
		echo 'Весна'.'<br>';
	}elseif($month >= 7 and $month <= 9) {
		echo 'Лето'.'<br>';
	}elseif($month >= 10 and $month <= 12) {
		echo 'Осень'.'<br>';
	}
*/
/* какая-то херня с if
$year = 2020;
	if (($year%4==0 && $year%100!=0) or $year%400==0) echo $year.' ебаное говно';
	else echo 'фак офф';
*/
/* сравнение отдельного эл. переменной
$a = 'abcde';
	if($a[0]=='a'){
		echo 'да'.'<br>';
	}
		else echo 'нет'.'<br>';
*/
/*	$a = '12345';
	if($a[0]==1 or $a[0]==2 or $a[0]==3){
		echo 'да';
	} else echo 'нет';
*/
/* in_array - ????
	$a = '12345'; 
	if(in_array($a[0],[1,2,3])){
		echo 'да';
	} else echo 'нет';
*/	
/* сложение элементов
$a = '123';
	$result = $a[0]+$a[1]+$a[2];
	echo $result;
*/
/*	$a = '123456';

	$b = $a[0]+$a[1]+$a[2];
	$c = $a[3]+$a[4]+$a[5];
	if($b == $c) {
		echo 'да';
	} else {echo 'нет';}
*/
dopdsufdsofhsdlkfhsdkl
 test
?>