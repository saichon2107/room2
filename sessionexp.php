<?php
$sessionlifetime = 1; //กำหนดเป็นนาที
 
if(isset($_SESSION["timeLasetdActive"])){
	$seclogin = (time()-$_SESSION["timeLasetdActive"])/60;
	//หากไม่ได้ Active ในเวลาที่กำหนด
	if($seclogin>$sessionlifetime){
		//goto logout page
		header("location:logout.php");
		exit;
	}else{
		$_SESSION["timeLasetdActive"] = time();
	}
}else{
	$_SESSION["timeLasetdActive"] = time();
}

?>