<?php
if($_POST['load'] && $_POST['current']) {

    $ot = $_POST['current'] + 1;
    $do = $_POST['load'] + $_POST['current'] + 1;

    $mysqli = new mysqli("localhost", "sabirova", "d7L390nNHD12ASqe");
    $mysqli->select_db("sabirova") or die ("Нет такой таблицы!");

    $result = $mysqli->query("SELECT * FROM novosti WHERE id BETWEEN '" . $ot . "' AND  '" . $do . "'");

    $newsArray = array();
    while ($row = mysqli_fetch_array($result)) {
        $array['title'] = $row['title'];
        $array['text'] = $row['text'];
        $array['img'] = $row['img'];
        array_push($newsArray, json_encode($array));
    }
}
    echo json_encode($newsArray);
?>