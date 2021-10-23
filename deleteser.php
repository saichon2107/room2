<?php
        session_start();
        if($_SESSION['u'] != null){
        include_once('dbconnect.php');
        $id_act = $_GET['id_act'];
       

        $sql = "SELECT id_act FROM    account  WHERE   id_act like ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s",$id_act);

        $stmt->execute();
        $stmt -> store_result(); 
        $stmt -> bind_result($id_act); 

        if($stmt->fetch()){
                $sql1 = "DELETE FROM account WHERE id_act like ?";
                $stmt = $conn->prepare($sql1);
                $stmt->bind_param("s",$id_act);
                $stmt->execute();

                $sql2 = "DELETE FROM account WHERE id_act like ?";
                $stmt = $conn->prepare($sql2);
                $stmt->bind_param("s",$id_act);
                $stmt->execute();

                $stmt->close();
                header( 'Location: showser.php');
        }else { ?>
                <div class="alert alert-warning mt-5 pt-3" role="alert">
                ไม่พบข้อมูลที่ต้องการลบ <?php echo $id_act;  ?>
            </div>
      <?php  } }else { header( 'Location:showser.php'); }?>
?>
