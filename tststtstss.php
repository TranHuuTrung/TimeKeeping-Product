<?php
   $server_username = "id2881520_14081997hs";
   $server_password ="centralpart";
   $server_host="localhost";
   $database="id2881520_rfidsystem";

   $connect = mysqli_connect($server_host, $server_username, $server_password, $database);
   mysqli_query($connect,"SET NAMES 'UTF8'");
   if(!$connect){
    echo "not connect to databse".mysqli_connect_error();
   }

    date_default_timezone_set('Asia/Ho_Chi_Minh');
//neu ton tai response from rfid send to thi add in to the database
//time open morning 8h       ->6h-8h30
//time close morning 12h     ->11h30-12h30
//time open afternoon 13h30  ->13h-14h
//time close afternoon 17h30 ->17h-18h30
if(isset($_GET['userCode'])){
    $userCode = $_GET['userCode'];    
    $current_time = date('H:i');
    echo "Thời gian hiện tại: ".$current_time;
    if($current_time >= date('H:i', strtotime('6:00')) && $current_time <= date('H:i', strtotime('8:30'))) {
        create_new_record($userCode);
        if(is_inserted_time($userCode, "timeInMorning") == false) {
            insert_time($userCode, "timeInMorning");
        }
    } else if($current_time >= date('H:i', strtotime('11:30')) && $current_time <= date('H:i', strtotime('12:30'))) {
        create_new_record($userCode);
        if(is_inserted_time($userCode, "timeOutMorning") == false) {
            insert_time($userCode, "timeOutMorning");
        }
    } else if($current_time >= date('H:i', strtotime('13:00')) && $current_time <= date('H:i', strtotime('14:00'))) {
        create_new_record($userCode);
        if(is_inserted_time($userCode, "timeInAfternoon") == false) {
            insert_time($userCode, "timeInAfternoon");
        }
    } else if($current_time >= date('H:i', strtotime('17:00')) && $current_time <= date('H:i', strtotime('18:30'))) {
        create_new_record($userCode);
        if(is_inserted_time($userCode, "timeOutAfternoon") == false) {
            insert_time($userCode, "timeOutAfternoon");
        }
    } else {
        echo "Not on valid time!!!";
    }
}
function is_inserted_time($userCode, $time) {
    $date = date("Y-m-d");
    $sql = "SELECT * FROM user_session WHERE userCode = $userCode AND day = '$date'";
    $query = mysqli_query($GLOBALS['connect'], $sql);
    $result = mysqli_fetch_array($query);
    if($result[$time] == "00:00:00") {
        return false;
    }
    return true;
}
function insert_time($userCode, $time) {
    $date = date("Y-m-d");
    $current_time = date('H:i');
    $sql = "UPDATE user_session SET ".$time."= '$current_time' WHERE userCode = $userCode AND day = '$date'";
    mysqli_query($GLOBALS['connect'], $sql);
}
function create_new_record($userCode) {
    $date = date("Y-m-d");
    $sql = "SELECT * FROM user_session WHERE userCode = $userCode AND day = '$date'";
    $query = mysqli_query($GLOBALS['connect'], $sql);
    $num_rows = mysqli_num_rows($query);
    if($num_rows == 0) {
        mysqli_query($GLOBALS['connect'], "INSERT INTO user_session(userCode, timeInMorning, timeOutMorning, timeInAfternoon, timeOutAfternoon, day) 
            VALUES($userCode, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '$date')");
    }
}
//kiem tra xem usercode da co trong csdl chua neu co thi cho update time, neu khong thi dua usercode do va bang unknow_user
?>