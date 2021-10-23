<?php
session_start(); 
include_once('dbconnect.php');

$sql = "SELECT  r.id_room, r.name_room
        FROM     room r";

$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id_room, $name_room);

?>