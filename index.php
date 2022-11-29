<!DOCTYPE html>
<html lang="ru">
  <head>
    <?php include 'include/func.php'; include 'include/database.php'; include 'include/form.php';?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="./images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/st.css">
    <title>Календарь</title>
  </head>
  <body background="./images/fon.png">
    <div class="container-fluid">
      <span class="navbar-brand">Календарь экзаменов</span>
    </div>
    
    <div class="conteiner" class = "row">
      <div class="col-5" class="fon2">
        <?php echo "$mon1";?>
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
            
          <?php foreach($class as $key=>$value):?>
          <div class="row row-cols-7">
            <?php 
              foreach($class[$key] as $key2):?>
              <div class="col"><a style="color:azure" href='index2.php?day=<?=$key2?>'><?=$key2?></a></div>
            <?php endforeach;?>
          </div>
          <?php endforeach;?>
        </div>

        <?php
        $sql_connect = mysqli_connect("sql308.epizy.com","epiz_33073180","mVGu7zFZqBG65l","epiz_33073180_exams");
        # $sql_connect = mysqli_connect("localhost", "root", "pop1936Hv534", "epiz_33056750_TZ");
        echo $sql_connect;
        if (!isset($sql_connect))
          echo "Ошибка подключения к MySQL: ", mysqli_connect_errno(), mysqli_connect_error();
          mysqli_close($sql_connect);
        ?>

        <div class="zap">
          <b>Добавление новой записи</b>
          <form method="POST">
            День: <select type="number" name="data"><? for($i=1; $i<$maxdays+1;$i++){?>
              <option value="<?echo $i;?>"><?echo $i;?></option><?}?></select>
            Время: <input type="time" name="time">
            Предмет: <select name="subject"><?php $result1 =getSub($sql_connect); while($rows =mysqli_fetch_array($result1)){?>
              <option value="<?php  echo $rows['subject'] ?>"><?php  echo $rows['subject'] ?></option><?php }?></select>
              <div><button type="submit" class="btn btn-primary" name="submitgo">Отправить</button></div>
          </form>
          <?php if(isset($_POST['submitgo'])){
          postex($sql_connect); $posti = postit($sql_connect);
          while ($row2 = $posti->fetch_assoc()) {
            $sql4 = "UPDATE schedule SET id_subjects = '". $row2['id'] ."' WHERE date ='".date('Y')."-".date('m')."-".$_POST['data']." ". $_POST['time'].":00';";
            mysqli_query($sql_connect, $sql4);
          }
          }?>
        </div>
        <?php mysqli_close($sql_connect);?>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </body>
</html>