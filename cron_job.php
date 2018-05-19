<?php
//auto create database for all available users every day
//NOT on weekend
require "./includes/connection.php";
$current_date = date("Y-m-d");
echo $current_date;
$sql = "SELECT * FROM user_session WHERE date = '$current_date'";
$result = mysqli_query($connect, $sql);
$result_rows = mysqli_num_rows($result);
echo " result rows ".$result_rows;


if($result_rows == 0) {
	//insert new record
	$sql = "SELECT * FROM user";
	$result = mysqli_query($connect, $sql);

	$insert_sql = "";
	while($row = mysqli_fetch_array($result)) {
		$id_user_code = $row['id'];
		$insert_sql = $insert_sql."INSERT INTO user_session(id_user_code, date, time_open_morning, time_close_morning, time_open_afternoon, time_close_afternoon) VALUES('$id_user_code', '$current_date', '00:00:00', '00:00:00', '00:00:00', '00:00:00');";
	}
	echo $insert_sql;
	mysqli_multi_query($connect, $insert_sql);
}

?>