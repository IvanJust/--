<?php
function viv($sql_connect){
    $sql = "SELECT subjects.title as `title`, schedule.date as `data`, specialities.code as `code`, specialities.title as `specialities`
        FROM schedule
        INNER JOIN subjects ON subjects.id = schedule.id_subject  
        INNER JOIN subject_to_specialities ON  subject_to_specialities.id_subject = subjects.id
        INNER JOIN specialities ON specialities.id = subject_to_specialities.id_speciality 
        WHERE DAYOFMONTH(date) = " . $_GET['day='] . ";";
        var_dump($sql);
    $result = $sql_connect->query($sql);
    var_dump($result);
    if($result->num_rows>0){//"style="."border: 1px solid #020730;".
        $exams = "<div class="."exams"."style="."background-color: #5C8EB3;".">".
            "<div class="."title-exams".">Экзамены</div>
            <table>
                <tr>
                    <th><b>Время экзамена</b></th>
                    <th><b>Предмет</b></th>
                    <th><b>Код специальности</b></th>
                    <th><b>Название специальности</b></th>
                </tr>
            <table>
                <tr>";
        while($exam=$result->fetch_assoc()){
            $exams .= "
            <td class=" . "day " . "> " . $exam["data"] . "</td>
            <td class=" . "day " . "> " . $exam["title"] . "</td>
            <td class=" . "day " . "> " . $exam["code"] . "</td>
            <td class=" . "day " . "> " . $exam["specialities"] . "</td>
            </tr>";
        }
        $exams .= "</table>
        </div>
        </div>";
        echo $exams;
    }
    else{
        echo "Нет экзаменов в этот день!";
    }
}


function back(){
    if(isset($_GET['day='])) echo "<a style='float: left; margin-left: 10px; font-size: 12px; padding-top: 5px;' 
        href='/index.php'><< Вернуться к текущей дате</a>";    
}
?>