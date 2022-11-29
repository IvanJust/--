<?php
    function getSub($sql_connect){
        $sql1="SELECT title FROM `subjects`";
        $result=mysqli_query($sql_connect,$sql1);
        return $result;
    }
    function postex($sql_connect){
        $sql2 = "INSERT INTO schedule(date) VALUES("."'".date('Y')."-".date('m')."-". $_POST['data']." ". $_POST['time'].":00');";
        return mysqli_query($sql_connect, $sql2);
    }
    function postit($sql_connect){
        $sql3 = "SELECT id FROM subjects WHERE title ='". $_POST['subject']."';";
        return mysqli_query($sql_connect, $sql3);
    }
?>