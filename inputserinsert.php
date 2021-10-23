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


$sql1 = "SELECT id_act
        FROM     services
        WHERE  id_act 
        LIKE     ?";

$stmt = $conn->prepare($sql1);
$stmt->bind_param("s",$id_act);
$stmt->execute();
$stmt -> store_result();

echo "เจอ" . $stmt -> num_rows;
if(!$stmt->fetch()){

$sql = "INSERT INTO   services(id_act,pre_ser,fname_ser,lname_ser,tel_ser,email_ser,j_ser,id_room)
        VALUES(?,?,?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ssssssss",$id_act,$pre_ser,$fname_ser,$lname_ser,$tel_ser,$email_ser,$j_ser,$id_room);

$stmt->execute();

$sql1 = "INSERT INTO account(id_act,username,password) VAlUES(?,?,?)";
$stmt = $conn->prepare($sql1);
$stmt->bind_param("sss",$id_act,$user,$pass);
$stmt->execute();

$stmt->close();

 header( 'Location: showser.php' ) ;
}else {
echo "รหัสผู้จอง" . $id_act . "มีแล้ว";
}
?>