<?php
    #phpinfo();

    function getSub($sql_connect){
        $sql1="SELECT title FROM `subjects`";
        $result=mysqli_query($sql_connect,$sql1);
        return $result;
    }
    function postex($sql_connect){
        $sql2 = "INSERT INTO schedule(date) VALUES("."'".date('Y')."-".date('m')."-". $_POST['data']." ". $_POST['time'].":00'".");";
        $result = $sql_connect->query($sql2);
        return $result;
    }
    function postit($sql_connect){
        $sql3 = "SELECT id FROM subjects WHERE title ='". $_POST['subject']."';";
        $result = $sql_connect->query($sql3);
        return $result;
    }
    function postup($sql_connect, $result){
        while ($row2 = $result->fetch_assoc()) {
            $sql_4 = "UPDATE schedule SET id_subject = ".$row2['id']." WHERE date ="."'".date('Y')."-".date('m')."-".$_POST['data']." ". $_POST['time'].":00';";
            $result4 = $sql_connect->query($sql_4);
            return $result;
        }
    }
?>