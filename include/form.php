<?php 
    // проверяем, если в переменная month была установлена в URL-адресе, 
    //либо используем PHP функцию date(), чтобы установить текущий месяц.
if(isset($_GET['month=']))
    $month = $_GET['month=']; 
elseif(isset($_GET['viewmonth']))
    $month = $_GET['viewmonth']; 
else $month = date('m'); 
 
    // Теперь мы проверим, если переменная года устанавливается в URL, 
    //либо использовать PHP функцию date(), 
    //чтобы установить текущий год, если текущий год не установлен в URL-адресе.
if(isset($_GET['year=']))
    $year = $_GET['year=']; 
elseif(isset($_GET['viewyear'])) 
    $year = $_GET['viewyear']; 
else $year = date('Y'); 

    //проверка месяца
if($month == '12')
$next_year = $year + 1; 
else $next_year = $year;
$first_of_month = mktime(0, 0, 0, $month, 1, $year); 
    // Массив имен всех дней в неделю
$day_headings = array('Sunday', 'Monday', 'Tuesday', 
'Wednesday', 'Thursday', 'Friday', 'Saturday'); 

$maxdays = date('t', $first_of_month); 
$date_info = getdate($first_of_month); 
$month = $date_info['mon']; 
$year = $date_info['year'];
$weekday = $date_info['wday'];
$Month_r = array(
    "01" => "Январь",
    "02" => "Февраль",
    "03" => "Март",
    "04" => "Апрель",
    "05" => "Май",
    "06" => "Июнь",
    "07" => "Июль",
    "08" => "Август",
    "09" => "Сентябрь",
    "10" => "Октябрь",
    "11" => "Ноябрь",
    "12" => "Декабрь"); 
$mon1 = "$Month_r[$month]  $year";
//$mon2 = "$Month_r[$next_month]  $next_year";    
    // Приводим числа к формату 1 - понедельник, ..., 6 - суббота
$weekday = $weekday-1; 
if($weekday == -1) $weekday=6;

    // станавливаем текущий день как единица 1
$day = 1; 
 $class = array(); $class[0] = array();
for($i = $weekday-1; $i>=0; $i--)
    array_push($class[0], " ");
$sch=0;

for($i = $weekday; $i<$maxdays+$weekday;$i++){
    if($i%7==0){ $sch+=1; $class[$sch] = array();}
    array_push($class[$sch], $day);
    $day++;
}
if(($weekday+$maxdays)%7!=0){
for($i = 0;$i<7-($weekday+$maxdays)%7;$i++)
    array_push($class[$sch], " ");
}
?>