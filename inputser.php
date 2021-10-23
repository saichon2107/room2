<?php   session_start(); 
if($_SESSION['u'] != null){
    require('sessionexp.php');


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">

        <title>เพิ่มข้อมูลผู้พัก</title>
    </head>
    <body>
        <div class="container ">
           <?php 
        include_once('header.php');

            ?>
            <form action="inputserinsert.php" method="GET">
                <div class="row mb-3 mt-3 ">
                    <label for="id_act" class="col-sm-2 col-form-label">รหัสผู้จอง</label>
                    <div class="col-6">
                        <input type="text" class="form-control" id="id_act"
                            name="id_act" placeholder="รหัสจอง">
                    </div>
                </div>
                <div class="row mb-3 mt-3 ">
                    <label for="pre_ser" class="col-sm-2 col-form-label">คำนำหน้า</label>
                   
                    <div class="col-sm-6">
                        <select name="pre_ser" class="form-select" aria-label="Default select example">   
                            <option value="นาย" selected>นาย</option> 
                            <option value="นาง">นาง</option>  
                            <option value="นางสาว">นางสาว</option>       
                          </select>
                    </div>
                </div>

                <div class="row mb-3 ">
                    <label for="fname_ser" class="col-sm-2 col-form-label">ชื่อ</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="fname_ser"
                            name="fname_ser" placeholder="ชื่อ">
                    </div>
                </div>

                <div class="row mb-3 ">
                    <label for="lname_ser" class="col-sm-2 col-form-label">นามสกุล</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="lname_ser"
                            name="lname_ser" placeholder="นามสกุล">
                    </div>
                </div>

                <div class="row mb-3 ">
                    <label for="tel_ser" class="col-sm-2 col-form-label">เบอร์โทร</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="tel_ser"
                            name="tel_ser" placeholder="เบอร์โทร">
                    </div>
                </div>

                <div class="row mb-3 ">
                    <label for="email_ser" class="col-sm-2 col-form-label">อีเมล์</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="email_ser"
                            name="email_ser" placeholder="อีเมล์">
                    </div>
                </div>

                <div class="row mb-3 ">
                    <label for="j_ser" class="col-sm-2 col-form-label">จำนวนผู้พัก</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="j_ser"
                            name="j_ser" placeholder="จำนวนผู้พัก">
                    </div>
                </div>
                <div class="row mb-3 ">
                    <label for="id_room" class="col-sm-2 col-form-label">ห้อง</label>
                   
                    <!-- //ทำการเรียกข้อมูลมาแสดงข้อมูลแผนก -->
                    <?php
                        include_once('room.php');               
                    ?>
                    <div class="col-sm-6">
                        <select class="form-select" name="id_room" aria-label="Default select example">
                         
                        
                        <option selected>เลือกห้อง</option>
                        <!-- // ทำการวนรอบ รหัสแผนก ชื่อแผนก มาแสดงผล -->
                        <?php  while ($stmt->fetch()) { ?>
                            <option value="<?php echo $id_room; ?>"> <?php echo $name_room; ?></option>      
                        <?php }
                        // ปิดการเชื่อมต่อฐานข้อมูล
                          $stmt->close();
                        ?>
                          </select>
                    </div>
                </div>

                <div class="row mb-3 ">
                    <label for="user" class="col-sm-2 col-form-label">username</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="user"
                            name="user" placeholder="user">
                    </div>
                </div>
                <div class="row mb-3 ">
                    <label for="text" class="col-sm-2 col-form-label">password</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="pass"
                            name="pass" placeholder="pass">
                    </div>
                </div>

                <div class="row mb-3 fs-4">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                        <button type="reset" class="btn btn-danger">ยกเลิก</button>
                    </div>
                    
                </div>

                
            </form>
            <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>
        </div>
    </body>
</html>
<?php } else {
header( 'Location: showser.php');
} ?>