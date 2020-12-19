<?php
    $mysqli = new mysqli("localhost", "sabirova", "d7L390nNHD12ASqe");
    $mysqli->select_db("sabirova") or die ("Нет такой таблицы!");

    $result = $mysqli->query("SELECT * FROM pisma");

    $emailsArray = array();

    while ($row = mysqli_fetch_array($result)) {
        $arr['name'] = $row['name'];
        $arr['title'] = $row['title'];
        $arr['message'] = $row['message'];
        $arr['email'] = $row['email'];
        array_push($emailsArray, json_encode($arr));
    }

    echo json_encode($emailsArray);
?>