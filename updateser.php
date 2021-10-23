<?php   
    session_start();
    include_once('dbconnect.php');
    $id_act = $_GET['id_act'];
$pre_ser = $_GET['pre_ser '];
$fname_ser = $_GET['fname_ser'];
$lname_ser = $_GET['lname_ser'];
$tel_ser = $_GET['tel_ser'];
$email_ser = $_GET['email_ser'];
$j_ser = $_GET['j_ser'];
$id_room = $_GET['id_room'];
$user = $_GET['user'];
$pass = $_GET['pass'];

    $sql = "SELECT  id_act FROM    services  WHERE  id_act like ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s",$id_act );

    $stmt->execute();
    $stmt -> store_result(); 
    $stmt -> bind_result($id_act ); 

    if($stmt->fetch()){
            $sql1 = "UPDATE services  SET  pre_ser = ?,
                     fname_ser = ?,
                     lname_ser = ?,
                     tel_ser = ?,
                     email_ser = ?,
                     j_serf = ?,
                     id_room = ?
                    WHERE id_ser like ?";
            $stmt = $conn->prepare($sql1);
            $stmt->bind_param("ssssssss",$pre_ser,$fname_ser,$lname_ser,$tel_ser,$email_ser,$j_ser,$id_room,$id_act);
            $stmt->execute();
            $stmt->close();
            header( 'Location: showser.php');
    }else {
            echo "ไม่พบข้อมูลรหัส" . $id_act;
    }
?>

