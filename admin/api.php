<?php
 require_once("../includes/connection.php");
 //neu ton tai response from rfid send to thi add in to the database
 if(isset($_GET['userCode'])){
     $date = date("Y-m-d G:i:s");
     mysqli_query($connect, "insert into user_session(userCode, timeCheck) values(".$_GET['userCode'].", '$date')");
 }
?>
