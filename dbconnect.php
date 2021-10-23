<?php  
    // กำหนดค่าตัวแปร สำหรับการเชื่อมต่อ
    $servername = "localhost";  //เครื่องคอมพิวเตอร์ Server
    $username = "s011";         // username สำหรับเข้าถึงฐานข้อมูล
    $password = "Mae5iVS9Ln.[6i-Z";             // รหัสผ่านสำหรับการเข้าถึงฐานข้อมูล
    $database = "s011_room";        // ชื่อฐานข้อมูลที่ใช้

    // $username = "root";
    // $password = "";
    // $database = "wut_regis";
    // สร้างการเชื่อมต่อ
    $conn  = new mysqli($servername,$username,$password,$database);
    mysqli_set_charset($conn, "utf8");

    // ทำการตรวจสอบว่าสามารถเชื่อมต่อฐานข้อมูลได้หรือไม่
    if($conn->connect_error){
        // ถ้าเชื่อมต่อไม่ได้จะแสดงข้อความ "Connection failed"
        die("Connection failed : " . $conn->connect_error);
    }else {
        //ถ้าเชื่อมต่อได้จะแสดงข้อความ "Connected successfully"
        //echo "Connected successfully";
    }
?>