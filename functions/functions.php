<?php
    $mysqli = false;

function connectDB () {
    global $mysqli;
    $mysqli = new mysqli("std-mysql.ist.mospolytech.ru", "std_1008", "MDhost27", "std_1008");
    $mysqli->query("SET NAMES 'utf-8'");
}

function closeDB () {
    global $mysqli;
    $mysqli->close ();
}


function getNews ($limit, $id) {
    global $mysqli;
    connectDB();
    if($id)
        $where = "WHERE `id` = ".$id;
    else
        $where = null;
    $result = $mysqli->query("SELECT * FROM `news` $where ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    if(!$id)
        return resultToArray ($result);
    else
        return $result->fetch_assoc();
}

function getProd ($limit, $id) {
    global $mysqli;
    connectDB();
    if($id)
        $where = "WHERE `id` = ".$id;
    else
        $where = null;
    $result = $mysqli->query("SELECT * FROM `multiv` $where ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    if(!$id)
        return resultToArray ($result);
    else
        return $result->fetch_assoc();
}

function getChr ($limit, $id) {
    global $mysqli;
    connectDB();
    if($id)
        $where = "WHERE `id` = ".$id;
    else
        $where = null;
    $result = $mysqli->query("SELECT * FROM `proiz` $where ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    if(!$id)
        return resultToArray ($result);
    else
        return $result->fetch_assoc();
}

function getChr1 ($limit, $id) {
    global $mysqli;
    connectDB();
    if($id)
        $where = "WHERE `id` = ".$id;
    else
        $where = null;
    $result = $mysqli->query("SELECT * FROM `pokr_chashi` $where ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    if(!$id)
        return resultToArray ($result);
    else
        return $result->fetch_assoc();
}

function getChr2 ($limit, $id) {
    global $mysqli;
    connectDB();
    if($id)
        $where = "WHERE `id` = ".$id;
    else
        $where = null;
    $result = $mysqli->query("SELECT * FROM `mater_multiv` $where ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    if(!$id)
        return resultToArray ($result);
    else
        return $result->fetch_assoc();
}

function getChr3 ($limit, $id) {
    global $mysqli;
    connectDB();
    if($id)
        $where = "WHERE `id` = ".$id;
    else
        $where = null;
    $result = $mysqli->query("SELECT * FROM `prigot` $where ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    if(!$id)
        return resultToArray ($result);
    else
        return $result->fetch_assoc();
}

function getChr4 ($limit, $id) {
    global $mysqli;
    connectDB();
    if($id)
        $where = "WHERE `id` = ".$id;
    else
        $where = null;
    $result = $mysqli->query("SELECT * FROM `cvet` $where ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    if(!$id)
        return resultToArray ($result);
    else
        return $result->fetch_assoc();
}

function getChr5 ($limit, $id) {
    global $mysqli;
    connectDB();
    if($id)
        $where = "WHERE `id` = ".$id;
    else
        $where = null;
    $result = $mysqli->query("SELECT * FROM `ob_chashi` $where ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    if(!$id)
        return resultToArray ($result);
    else
        return $result->fetch_assoc();
}

function getChr6 ($limit, $id) {
    global $mysqli;
    connectDB();
    if($id)
        $where = "WHERE `id` = ".$id;
    else
        $where = null;
    $result = $mysqli->query("SELECT * FROM `moshn` $where ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    if(!$id)
        return resultToArray ($result);
    else
        return $result->fetch_assoc();
}

function getChr7 ($limit, $id) {
    global $mysqli;
    connectDB();
    if($id)
        $where = "WHERE `id` = ".$id;
    else
        $where = null;
    $result = $mysqli->query("SELECT * FROM `teh_prigot` $where ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    if(!$id)
        return resultToArray ($result);
    else
        return $result->fetch_assoc();
}

function getChr8 ($limit, $id) {
    global $mysqli;
    connectDB();
    if($id)
        $where = "WHERE `id` = ".$id;
    else
        $where = null;
    $result = $mysqli->query("SELECT * FROM `tel_upr` $where ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    if(!$id)
        return resultToArray ($result);
    else
        return $result->fetch_assoc();
}

function getChr9 ($limit, $id) {
    global $mysqli;
    connectDB();
    if($id)
        $where = "WHERE `id` = ".$id;
    else
        $where = null;
    $result = $mysqli->query("SELECT * FROM `tip_upr` $where ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    if(!$id)
        return resultToArray ($result);
    else
        return $result->fetch_assoc();
}

function getChr10 ($limit, $id) {
    global $mysqli;
    connectDB();
    if($id)
        $where = "WHERE `id` = ".$id;
    else
        $where = null;
    $result = $mysqli->query("SELECT * FROM `disp` $where ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    if(!$id)
        return resultToArray ($result);
    else
        return $result->fetch_assoc();
}

function getChr11 ($limit, $id) {
    global $mysqli;
    connectDB();
    if($id)
        $where = "WHERE `id` = ".$id;
    else
        $where = null;
    $result = $mysqli->query("SELECT * FROM `cena` $where ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    if(!$id)
        return resultToArray ($result);
    else
        return $result->fetch_assoc();
}

function getChr12 ($limit, $id) {
    global $mysqli;
    connectDB();
    if($id)
        $where = "WHERE `id` = ".$id;
    else
        $where = null;
    $result = $mysqli->query("SELECT * FROM `sklad` $where ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    if(!$id)
        return resultToArray ($result);
    else
        return $result->fetch_assoc();
}

function getChr13 ($limit, $id) {
    global $mysqli;
    connectDB();
    if($id)
        $where = "WHERE `id` = ".$id;
    else
        $where = null;
    $result = $mysqli->query("SELECT * FROM `krishka` $where ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    if(!$id)
        return resultToArray ($result);
    else
        return $result->fetch_assoc();
}

function getChr14 ($limit, $id) {
    global $mysqli;
    connectDB();
    if($id)
        $where = "WHERE `id` = ".$id;
    else
        $where = null;
    $result = $mysqli->query("SELECT * FROM `garant` $where ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    if(!$id)
        return resultToArray ($result);
    else
        return $result->fetch_assoc();
}

// function getChr15 ($limit, $id) {
//     global $mysqli;
//     connectDB();
//     if($id)
//         $where = "WHERE `id` = ".$id;
//     else
//         $where = null;
//     $result = $mysqli->query("SELECT * FROM `nagrev_element` $where ORDER BY `id` DESC LIMIT $limit");
//     closeDB();
//     if(!$id)
//         return resultToArray ($result);
//     else
//         return $result->fetch_assoc();
// }

// function getChr16 ($limit, $id) {
//     global $mysqli;
//     connectDB();
//     if($id)
//         $where = "WHERE `id` = ".$id;
//     else
//         $where = null;
//     $result = $mysqli->query("SELECT * FROM `srok` $where ORDER BY `id` DESC LIMIT $limit");
//     closeDB();
//     if(!$id)
//         return resultToArray ($result);
//     else
//         return $result->fetch_assoc();
// }

function resultToArray ($result) {
    $array = array ();
    while (($row = $result->fetch_assoc()) != false) {
        $array[] = $row;
    }
    return $array;
}

?>
