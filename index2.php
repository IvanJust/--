<!DOCTYPE html>
<html lang="ru">
  <head>
    <?php include 'include/database.php';
    # $sql_connect = mysqli_connect("sql301.epizy.com","epiz_33056750","qqXZJh9pi0","epiz_33056750_TZ");
    $sql_connect = mysqli_connect("localhost", "root", "pop1936Hv534", "epiz_33056750_TZ");
    if (!isset($sql_connect))
    echo "Ошибка подключения к MySQL: ", mysqli_connect_errno(), mysqli_connect_error();
    mysqli_close($sql_connect);
  ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="./images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/st.css">
    
    <title>Календарь</title>
  </head>
  <body background="./images/fon.png">
    <div class="row">
        <div class="examens"><?php viv($sql_connect)?></div>
        <div class="back"><?php back()?></div>
    </div>
    <?php mysqli_close($sql_connect);?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </body>