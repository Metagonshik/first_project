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
/* foreach цикл работающий со всеми элементами массива
	$arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];
	foreach ($arr as $key=>$elem) {
		echo $key.'-'.$elem.'<br>'; //выведет: 'a-1', 'b-2', 'c-3' и так далее...
	}
*/
/* while цикл выполнящийския пока верно условие
	$i = 1; // счетчик цикла
		while ($i <= 5) { //цикл закончится, когда $i станет больше 5-ти
		
			echo $i.'<br>';
			$i++;
			}
*/
/* вывод элементов на экран (foreach)
	$arr = ['html','css', 'php', 'js', 'jq'];
	foreach($arr as $result) {
		echo $result.'<br>';
	}
*/
/* суммируем элементы массива (foreach)
	$arr = [10,20,15,17,24,35];
	$result = 0;
	foreach($arr as $elem) {
		$result = $result+$elem;
	}
	echo $result;
*/
/* while выводим на экран числа от 1 до 100
	$a = 1;
	while($a <= 100) {
		echo $a.'<br>';
		$a++;
	}
*/
/* for выводи на экран числа от 1 до 100
	for($a = 1;$a <=100; $a++) {
		echo $a.'<br>';
	}
*/
/* практика с циклами
	$arr = ['html','css', 'php', 'js', 'jq'];
	foreach($arr as $elem) {
		echo $elem.'<br>';
	}
	$arr = [1,2,3,4,5];
	$result = 0;
	foreach($arr as $elem) {
		$result = $result + $elem;
		}
		echo $result;
	$arr = [1,2,3,4,5];
	$result = 0;
	foreach($arr as $elem) {
		$result = $result + $elem*2;
	}
	echo $result;
*/
/* ассоциативный массив (foreach)
$arr = ['green' => 'зеленый','red' => 'красный', 'yellow' => 'желтый'];
	foreach($arr as $key=>$elem){
		echo $key.' - '.$elem.'<br>';
	}
	$arr = ['Коля'=>'200', 'Вася'=>'300', 'Петя'=>'400'];
	foreach($arr as $key=>$elem){
		echo $key.' - '.'зарплата '.$elem.' долларов.'.'<br>';
	}
*/
/*			Практика (циклы while и for)
$a = 1;
	while($a <=100){
		echo $a.'<br>';
		$a++;
	}
	for($a = 1; $a <=100; $a++){
		echo $a.'<br>';
	}
	$a = 11;
	while($a <=33){
		echo $a.'<br>';
		$a++;
	}
	for($a = 11;$a <= 33;$a++) {
		echo $a.'<br>';
	}
	$a = 0;
	while($a <= 100){
		echo $a.'<br>';
		$a += 2;
	}
	for($a =0;$a <=100;$a += 2){
		echo $a.'<br>';
	}
// 8 задача
	$a = 1;
	$result = 0;
	while($a <= 100){
		$result = $result+$a;
		$a++;
	}
	echo $result;
// 9 задача
	$result = 0;
	for($a=1;$a<=100;$a++){
		$result = $result+$a;
	}
	echo $result;
// 10 задача
	$arr = [2, 5, 9, 15, 0, 4];
	foreach($arr as $elem){
		if($elem > 3 and $elem <10){
			echo $elem.'<br>';
		}
		else {
			null;
		}
	}
// 11 задача
	$arr = [2, 5, 9, 15, 0, 4, -2, -5, -9, -15, -0, -4];
	$result = 0;
	foreach($arr as $elem){
		if($elem >=0){
			$result = $result + $elem;
			
		}
		else {
			null;
		}
		
	}
		echo $result.'<br>';
// 12 задача
	$arr = [1, 2, 5, 9, 4, 13, 4, 10];
	foreach($arr as $elem){
		if($elem === 4) {
			echo 'Есть!'.'<br>';
		}
		else {
			null;
		}
	}
// 13 задача
	$arr = ['10', '20', '30', '50', '235', '3000'];
	foreach($arr as $elem){
		if($elem[0] == 1) {
			echo $elem.'<br>';
		} elseif($elem[0] == 2) {
			echo $elem.'<br>';
		} elseif($elem[0] == 5) {
			echo $elem.'<br>';
		}
	}
// 14 задача
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	$result = '';
	$min = '-';
	$result.=$min;
	foreach($arr as $elem) {
		$result .= $elem.$min;
		}
		echo $result;
// 15 задача
/*	$arr = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресение'];
	foreach($arr as $elem){
		if($elem != $arr[5] and $elem != $arr[6]){
			echo $elem.'<br>';
		} else {
			echo '<b>'.$elem.'</b>''<br>';
		}
	}
// 16 задача
	$arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
	$day = 'пн';
	foreach($arr as $elem) {
		if($elem == $day) {
			echo '<i>'.$elem.'</i><br>';
		} else {
			echo $elem.'<br>';
		}
	}
// 17 задача
	for($a=1;$a<=100;$a++){
		$arr[] = $a;
		}
	var_dump($arr);
// 18 задача
	$arr=['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
	$en=[];
	$ru=[];
	foreach($arr as $key=>$elem){
		$en[] = $key;
		$ru[] = $elem;
	}
	var_dump($en);
	var_dump($ru);
// 19 задача
	$num=1000;
	$i=1;
	$result = 0;
	while($result < 50){
		$result = $i*2;	
		$i++; 
		}
	echo $result.'<br>';
	echo $i;
	$num=1000;
	$result=0;
	for($i=1;$result<50;$i++){
		$result=$i*2;
	}
	echo $result.'<br>';
	echo $i;
*/
/*	мат. функции
echo sqrt(2).'<br>';
	echo round(sqrt(2), 2).'<br>';
	echo ceil(round(sqrt(2), 2)).'<br>';
	echo mt_rand(1, 1500);
	echo sqrt(1000).'<br>';
	echo floor(sqrt(1000)).'<br>';
	echo ceil(sqrt(1000)).'<br>';
	$arr[1] = sqrt(1000);
	$arr[2] = floor(sqrt(1000));
	$arr[3] = ceil(sqrt(1000));
	var_dump($arr);
	
	for($i=0;$i!=30;$i++){
		$arr[]= mt_rand(1,10);
		
	}
	echo '<pre>';print_r($arr);echo '<pre>';
	$a=7;
	$b=3;
	if($a%$b==0){
		echo 'Делится на '.($a%$b==0);
	} else {
		echo 'Делится с остаткосм '.fmod($a,$b);
	}
	$st=pow(2,10);
	echo $st.'<br>';
	echo sqrt(245).'<br>';
	$arr = [4, 2, 5, 19, 13, 0, 10];
	$result=0;
	foreach($arr as $elem){
		$result = $result + pow($elem,2);
	}
	echo sqrt($result);
	echo sqrt(379).'<br>';
	echo round(sqrt(379),0).'<br>';
	echo round(sqrt(379),1).'<br>';
	echo round(sqrt(379),2).'<br>';
	echo sqrt(587).'<br>';
	echo floor(sqrt(587)).'<br>';
	echo ceil(sqrt(587)).'<br>';
	$arr=['floor'=>floor(sqrt(587)),'ceil'=>ceil(sqrt(587))];
	echo '<pre>';print_r($arr);echo '<pre>';
	$arr=[4, -2, 5, 19, -130, 0, 10];
	echo min($arr).'<br>';
	echo max($arr).'<br>';
	echo mt_rand(1,100).'<br>';
	for($i=0;$i<=10;$i++){
		$arr1[]=mt_rand(1,100);
	}
	echo '<pre>';print_r($arr1);echo '<pre>';
	$a=10;
	$b=30;
	echo abs($a-$b);
	$arr2=[1, 2, -1, -2, 3, -3];
	foreach($arr2 as $key=>$elem){
		$arr2[$key]=abs($elem);
	}
	echo '<pre>';print_r($arr2);echo '<pre>';
	$arr =[];
	$a=1000000;
	for($i=1;$i<=1000000;$i++){
		if($a%$i==0) $arr[]=$i;
	}
	echo '<pre>';print_r($arr);echo '<pre>';
	$arr=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	foreach($arr as $elem) {
		$result = $result + $elem;
		$i++;
			if($result > 10){
				break;
			}
	}
	echo $i;
*/
// Функции работы со строками
/* [strtolower, strtoupper, ucfirst, lcfirst, ucwords]
	echo strtoupper('minsk').'<br>';//функция преобразования строки в ВЕРХНИЙ регистр(не кирилица)
	echo mb_strtoupper('минск').'<br>';//функция преобразования строки в ВЕРХНИЙ регистр (кирилица)
	echo ucfirst(strtolower('MINSK')).'<br>';
	$date='31-12-2030';
	$arr = explode('-', $date);
	echo $arr[2].'.'.$arr[1].'.'.$arr[0].'<br>';
	echo strtoupper('php').'<br>';
	echo strtolower(strtoupper('php')).'<br>';// БУГАГАШЕНЬКИ =)
	echo ucfirst('london').'<br>';
	echo lcfirst('London').'<br>';
	echo ucwords('london is the capital of great britain').'<br>';
	echo ucfirst(strtolower('LONDON')).'<br>';
*/
/* [stlen]
	echo strlen('html css php').'<br>';
	$password='ivet';
	if(strlen($password)>=5 and strlen($password)<=10) {
		echo 'Пароль подходит!'.'<br>';
	} else {
		echo 'Нужно придумать другой пароль!!!'.'<br>';
	}
*/
/* [substr]
	echo substr('html css php',0,4).'<br>';
	echo substr('html css php',5,3).'<br>';
	echo substr('html css php',8,4).'<br>';
	echo substr('html css php',-3).'<br>';

//Дана строка. Проверьте, что она начинается на 'http://'. Если это так, выведите 'да', если не так - 'нет'.
//Дана строка. Проверьте, что она начинается на 'http://' или на 'https://'. Если это так, выведите 'да', если не так - 'нет'.
	$a='https://mail.ru';
	if(substr($a,0,7)=='http://' or substr($a,0,8)=='https://'){
		echo 'да'.'<br>';
	} else {
		echo 'нет'.'<br>';
	}

//Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.
//Дана строка. Проверьте, что она заканчивается на '.png' или на '.jpg'. Если это так, выведите 'да', если не так - 'нет'.
	$a='dickpickalehi.jpg';
	if(substr($a,13,4)=='.png' or substr($a,13,4)=='.jpg'){
		echo 'да'.'<br>';
	} else {
		echo 'нет'.'<br>';
	}

//Дана строка. Если в этой строке более 5-ти символов - вырежите из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.
	$b='123456789';
	if(strlen($b)>=5){
		echo substr($b,5,strlen($b)-5).'...'.'<br>';
	}
*/
/* [str_replace]
//Дана строка '31.12.2013'. Замените все точки на дефисы.
	$a='31.12.2013';
	echo str_replace('.','-',$a).'<br>';
//Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.
	$str='abc';
	echo str_replace(['a','b','c'],[1,2,3],$str).'<br>';
//Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры. То есть в нашем случае должна получится строка 'abcbdefgh'.
	$cheee='1a2b3c4b5d6e7f8g9h0';
	echo str_replace([1,2,3,4,5,6,7,8,9,0],'',$cheee).'<br>'
*/
/* [strtr]
//Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3. Решите задачу двумя способами работы с функцией strtr (массив замен и две строки замен).
	$str='abc';
	echo strtr($str,['a'=>1,'b'=>2,'c'=>3]).'<br>';
	str_replace($str,['a','b','c'],[1,2,3]).'<br>';// хуитааа
	echo '<pre>';print_r(str_replace($str,['a','b','c'],[1,2,3]));echo '<pre>';
*/
/* [substr_replace]
// Дана строка $str. Вырежите из нее подстроку с 3-го символа (отсчет с нуля), 5 штук и вместо нее вставьте '!!!'.
	$str='12345677897869';
	echo str_replace(substr($str,2,5),'!!!',$str).'<br>';
*/
/* [strpos, strrpos]
//Дана строка 'abc abc abc'. Определите позицию первой буквы 'b'.
	$a='abc abc abc';
	echo strpos($a,'b').'<br>';
//Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
	$a='abc abc abc';
	echo strpos($a,'b',7).'<br>';
//Дана строка 'abc abc abc'. Определите позицию первой найденной буквы 'b', если начать поиск не с начала строки, а с позиции 3.
	$a='abc abc abc';
	echo strpos($a,'b',3).'<br>';
//Дана строка 'aaa aaa aaa aaa aaa'. Определите позицию второго пробела.
	$a='aaa aaa aaa aaa aaa';
	echo strpos($a,' ',6).'<br>';
//Проверьте, что в строке есть две точки подряд. Если это так - выведите 'есть', если не так - 'нет'.
	$lol='..123';
	if(strpos($lol,'..')!==false){
		echo 'да'.'<br>';
	} else { 
		echo 'нет'.'<br>';
	}
	
//Проверьте, что строка начинается на 'http://'. Если это так - выведите 'да', если не так - 'нет'.
	$link='http://mail.ru';
	if(strpos($link,'http://')===0){
		echo 'да'.'<br>';
	} else { 
		echo 'нет'.'<br>';
	}
*/
/* [explode, implode]
//Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.
	$lang='html css php';
	echo '<pre>';print_r(explode(' ', $lang));echo '<pre>';
//Дан массив с элементами 'html', 'css', 'php'. С помощью функции implode создайте строку из этих элементов, разделенных запятыми.
	$arr=['html', 'css', 'php'];
	echo '<pre>';print_r(implode(',', $arr));echo '<pre>';
//В переменной $date лежит дата в формате '2013-12-31'. Преобразуйте эту дату в формат '31.12.2013'.
	$date='2013-12-31';
	echo '<pre>';print_r($arr = explode('-', $date));echo '<pre>';
	echo '<pre>';print_r(implode('.', array_reverse($arr)));echo '<pre>';
*/

























