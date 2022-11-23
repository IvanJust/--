<!-- <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="./icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    background="./Penguins.jpg"
    <title>Календарь</title>
  </head>
  <body> 
  <nav class="navbar bg-light">
  <div class="container-fluid">
    <span class="navbar-brand">Календарь экзаменов</span> -->
    <!--<script src="./form.php"></script>
     <form class="d-flex" role="search">
      <input type="date" name="date" />
      <button class="btn btn-outline-success" type="submit">Поиск даты</button>
    </form> -->
    </div>
</nav>
    <!-- <div class = "container"><h1>Привет, Абитуриент!</h1></div> -->
<?php
// проверяем, если в переменная month была установлена в URL-адресе, 
//либо используем PHP функцию date(), чтобы установить текущий месяц.
if(isset($_GET['month']))
    $month = $_GET['month']; 
elseif(isset($_GET['viewmonth']))
    $month = $_GET['viewmonth']; 
else $month = date('m'); 
 
// Теперь мы проверим, если переменная года устанавливается в URL, 
//либо использовать PHP функцию date(), 
//чтобы установить текущий год, если текущий год не установлен в URL-адресе.
if(isset($_GET['year']))
    $year = $_GET['year']; 
elseif(isset($_GET['viewyear'])) 
    $year = $_GET['viewyear']; 
else $year = date('Y'); 
//проверка месяца
if($month == '12')
$next_year = $year + 1; 
else $next_year = $year; 

$Month_r = array(
    "1" => "январь",
    "2" => "февраль",
    "3" => "март",
    "4" => "апрель",
    "5" => "май",
    "6" => "июнь",
    "7" => "июль",
    "8" => "август",
    "9" => "сентябрь",
    "10" => "октябрь",
    "11" => "ноябрь",
    "12" => "декабрь"); 
     
    $first_of_month = mktime(0, 0, 0, $month, 1, $year); 
     
    // Массив имен всех дней в неделю
    $day_headings = array('Sunday', 'Monday', 'Tuesday', 
    'Wednesday', 'Thursday', 'Friday', 'Saturday'); 
     
    $maxdays = date('t', $first_of_month); 
    $date_info = getdate($first_of_month); 
    $month = $date_info['mon']; 
    $year = $date_info['year']; 

if(isset($_POST["name"])){
  
    $name = $_POST["name"];
}
if(isset($_POST["date"])){
  
    $date = $_POST["date"];
}
echo "Имя: $name <br> Дата: $date";
?> 
<h3>Форма ввода данных</h3>
<form method="GET">
    <p>Имя: <input type="text" name="name" /></p>
    <p>Возраст: <input type="number" name="age" /></p>
    <input type="submit" value="Отправить">
</form>
<!-- <div class="container">
  <div class = "row row-cols-7">
    <div class="col">Пн</div>
    <div class="col">Вт</div>
    <div class="col">Ср</div>
    <div class="col">Чт</div>
    <div class="col">Пт</div>
    <div class="col">Сб</div>
    <div class="col">Вс</div>
  </div>
  <div class = "row row-cols-7">

  </div>
</div>-->
<!-- <form method="POST">
    <p>Имя: <input type="text" name="name" /></p>
    <p>Дата: <input type="date" name="date" /></p>
    <input type="submit" value="Отправить">
</form> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html> 


<?php 
// проверяем, если в переменная month была установлена в URL-адресе, 
//либо используем PHP функцию date(), чтобы установить текущий месяц.
if(isset($_GET['month']))
    $month = $_GET['month']; 
elseif(isset($_GET['viewmonth']))
    $month = $_GET['viewmonth']; 
else $month = date('m'); 
 
// Теперь мы проверим, если переменная года устанавливается в URL, 
//либо использовать PHP функцию date(), 
//чтобы установить текущий год, если текущий год не установлен в URL-адресе.
if(isset($_GET['year']))
    $year = $_GET['year']; 
elseif(isset($_GET['viewyear'])) 
    $year = $_GET['viewyear']; 
else $year = date('Y'); 

//проверка месяца
if($month == '12')
$next_year = $year + 1; 
else $next_year = $year; 

$Month_r = array(
    "1" => "январь",
    "2" => "февраль",
    "3" => "март",
    "4" => "апрель",
    "5" => "май",
    "6" => "июнь",
    "7" => "июль",
    "8" => "август",
    "9" => "сентябрь",
    "10" => "октябрь",
    "11" => "ноябрь",
    "12" => "декабрь"); 
     
    $first_of_month = mktime(0, 0, 0, $month, 1, $year); 
     
    // Массив имен всех дней в неделю
    $day_headings = array('Sunday', 'Monday', 'Tuesday', 
    'Wednesday', 'Thursday', 'Friday', 'Saturday'); 
     
    $maxdays = date('t', $first_of_month); 
    $date_info = getdate($first_of_month); 
    $month = $date_info['mon']; 
    $year = $date_info['year']; 
     
    // Если текущий месяц это январь, 
    //и мы пролистываем календарь задом наперед число, 
    //обозначающее год, должно уменьшаться на один. 
     
    if($month == '1'): 
        $last_year = $year-1; 
    else: $last_year = $year; 
    endif; 
     
    // Вычитаем один день с первого дня месяца, 
    //чтобы получить в конец прошлого месяца
    $timestamp_last_month = $first_of_month - (24*60*60); 
    $last_month = date("m", $timestamp_last_month);
     
    // Проверяем, что если месяц декабрь, 
    //на следующий месяц равен 1, а не 13
    if($month == '12')
        $next_month = '1'; 
    else $next_month = $month+1; 


     
//     echo "<form style='float: right; margin-right: 10px;' action='$self' method='get'>
//     <select name='month'>";
     
//     for($i=0; $i<=11; $i++) {
//       echo "<option value='".($i+1)."'";
//       if($month == $i+1) 
//         echo "selected = 'selected'";
//       echo ">".$months[$i]."</option>";
//     }
     
//     echo "</select>";
//     echo "<select name='year'>";
     
//     for($i=date('Y'); $i<=(date('Y')+20); $i++)
//     {
//       $selected = ($year == $i ? "selected = 'selected'" : '');
     
//       echo "<option value=\"".($i)."\"$selected>".$i."</option>";
//     }
     
//     echo "</select><input type='submit' value='смотреть' /></form>";
     
//     if($month != date('m') || $year != date('Y'))
//       echo "<a style='float: left; margin-left: 10px; font-size: 12px; padding-top: 5px;' 
//       href='".$self."?month=".date('m')."&year=".date('Y')."'><< Вернуться к текущей дате</a>";
//     echo "</div>"; 
//  <div class="col"><a style="color:azure" href="<?=$key2?>">?>
