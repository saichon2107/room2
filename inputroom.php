<?php   session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ข้อมูลห้อง</title>
</head>
<body>
    <div class="container">
    <?php include_once('header.php');  ?>
    <form action="inputroomxxx.php" method="GET">
        <div class="row mb-3 mt-3">
          <label for="id_room" class="col-sm-2 col-form-label">รหัสห้อง</label>
          <div class="col-4">
            <input type="text" class="form-control" id="id_room" name="id_room">
          </div>
        </div>
        <div class="row mb-3 ">
          <label for="name_room" class="col-sm-2 col-form-label">ชื่อห้อง</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="name_room" name="name_room">
          </div>
        </div>
    
        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
      </form>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>
</body>
</html>