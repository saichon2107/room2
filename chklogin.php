<?php 
    session_start();
    $u = $_GET['username'];
    $p = $_GET['password'];

    include_once('dbconnect.php');

    $sql = "SELECT a.id_act, a.username, a.password, s.pre_ser, s.fname_ser, s.lname_ser,
            s.tel_ser, s.email_ser, s.j_ser, r.name_room
            FROM account a, services s, room r
            WHERE a.id_act = s.id_act
            AND   s.id_room = r.id_room
            AND   username like ? AND password like ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss",$u, $p);
    $stmt->execute();
    // $stmt -> store_result();
    // $stmt->bind_result($user,$pass);
    

    if($stmt->fetch()){
        $_SESSION['u'] = $u;
        $_SESSION['p'] = $p;
        require('sessionexp.php');
        header( 'Location: index.php');

    }else { header( 'Location: index.php');
    }
    ?>






?>