<?php  
session_start(); 
include_once('dbconnect.php');
$id_ser = $_GET['id_ser'];
$pre_ser = $_GET['pre_ser'];
$fname_ser = $_GET['fname_ser'];
$lname_ser = $_GET['lname_ser'];
$tel_ser = $_GET['tel_ser'];
$email_ser = $_GET['email_ser'];
$j_ser = $_GET['j_ser'];
$id_room = $_GET['id_room'];
$user = $_GET['user'];
$pass = $_GET['pass'];


$sql1 = "SELECT  id_ser
        FROM     list
        WHERE  id_ser
        LIKE     ?";

$stmt = $conn->prepare($sql1);
$stmt->bind_param("s",$id_ser);
$stmt->execute();
$stmt -> store_result();

echo "เจอ" . $stmt -> num_rows;
if(!$stmt->fetch()){

$sql = "INSERT INTO  list(id_ser,pre_ser,fname_ser,lname_ser,tel_ser,email_ser,j_ser,id_room)
        VALUES(?,?,?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ssssssss",$id_ser,$pre_ser,$fname_ser,$lname_ser,$tel_ser,$email_ser,$j_ser,$id_room);

$stmt->execute();

$sql1 = "INSERT INTO account(id_ser,username,password) VAlUES(?,?,?)";
$stmt = $conn->prepare($sql1);
$stmt->bind_param("sss",$id_ser,$user,$pass);
$stmt->execute();

$stmt->close();

 header( 'Location: showlist.php' ) ;
}else {
echo "รหัสมีแล้ว" . $id_ser . "มีแล้ว";
}
?>