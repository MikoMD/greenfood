<?php
    $mysqli = false;
function connectDB () {
    global $mysqli;
    $mysqli = new mysqli("localhost", "root", "", "test1base");
    $mysqli->query("SET NAMES 'utf-8'");
}

function closeDB () {
    global $mysqli;
    $mysqli->close ();
}


function getNews ($limit) {
    global $mysqli;
    connectDB();
    $result = $mysqli->query("SELECT * FROM 'news' ORDER BY 'id' DESC LIMIT $limit");
    closeDB();
    return resultToArray ($result);
}

function resultToArray ($result) {
    $array = array ();
    while (($row = $resul->fetch_assoc()) != false)
        $array[] = $row;
    return $array;
}
?>