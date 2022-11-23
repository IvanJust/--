<?php
    include "index.php";
    $sql = "SELECT subjects.title, schedule.date, specialities.code, specialities.title as `nazv spec`
        FROM schedule
        INNER JOIN subjects ON subjects.id = schedule.id_subject  
        INNER JOIN subject_to_specialities ON  subject_to_specialities.id_subject = subjects.id
        INNER JOIN specialities ON specialities.id = subject_to_specialities.id_speciality 
        WHERE DAYOFMONTH(date) = " . $_GET['$key2'] . ";";
    $result = $sql_connect->query($sql);

    

    mysqli_close($sql_connect);
    if(isset($_GET['$key2'])) echo "<a style='float: left; margin-left: 10px; font-size: 12px; padding-top: 5px;' 
        href='/index.php'><< Вернуться к текущей дате</a>";    
?>