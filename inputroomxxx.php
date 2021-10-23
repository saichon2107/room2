<?php 
        session_start();
        include_once('dbconnect.php');
        $id_room = $_GET['id_room'];
        $name_room = $_GET['name_room'];


        $sql = "INSERT INTO  room(id_room,name_room)
                VALUES(?,?)";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ss",$id_room,$name_room);

        $stmt->execute();
        $stmt->close();
        header( 'Location: showroom.php' ) ;
?>