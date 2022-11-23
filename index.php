<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="./images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/st.css">
    
    <title>Календарь</title><!-- href = '$self?month=".$next_month."&year=".$next_year."' -->
    <!-- <script src="./form.php"></script> -->
    <!-- require_once -->
  </head>
  <body background="./images/fon.png">
    <div class="container-fluid">
      <span class="navbar-brand" style="background-color:cadetblue; margin-left:25px; padding-left:10px;padding-right:10px;">
      Календарь экзаменов</span>
    </div>
    
    <div class="conteiner" class = "row">
      <div class="col-5" class="fon2" style="background-color:cadetblue; margin-left:25px; padding-left:10px;width:115px">
        <?php include "form.php";
        echo $mon1?>
      </div>
      
      <div class = "row">
        <div class="container2" style="margin-left:15px">
          <div class="row row-cols-7">
            <div class="col">Пн</div>
            <div class="col">Вт</div>
            <div class="col">Ср</div>
            <div class="col">Чт</div>
            <div class="col">Пт</div>
            <div class="col" style="color: red;">Сб</div>
            <div class="col" style="color: red;">Вс</div>
          </div>
            
          <?php include "form.php";foreach($class as $key=>$value):?>
          <div class="row row-cols-7">
            <?php 
              foreach($class[$key] as $key2):?>
              <div class="col"><a style="color:azure" href='/func.php?month="$month"&year="$year"'><?=$key2?></a></div>
            <?php endforeach;?>
          </div>
          <?php endforeach;?>
        </div>

        <?php include "form.php"; if($month != date('m') || $year != date('Y'))
          echo "<a style='float: left; margin-left: 10px; font-size: 12px; padding-top: 5px;' 
          href='?month=".date('m')."&year=".date('Y')."'><< Вернуться к текущей дате</a>";
        ?>

        <div class="zap" style="background-color:cadetblue; padding-left:25px; padding-bottom:5px;width:725px">
          <b>Добавление новой записи</b>
          <form method="POST">
            Дата: <input type="date" name="data">
            Время: <input type="time" name="time">
            Предмет: <input type="text" name="predmet">
            <input type="submit" value="Отправить">    
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </body>
</html>