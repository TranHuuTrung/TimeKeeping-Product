<?php
   $server_username = "root";
   $server_password ="";
   $server_host="localhost";
   $database="timekeeping_app";

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
    $id_user_code = $_GET['userCode'];    
    $current_time = date('H:i');
    echo "Thời gian hiện tại: ".$current_time;

    if(check_valid_user($userCode) == false) {
        echo "Not on valid user!!!";
        $date = date("Y-m-d");
        $current_time = date('H:i');
        mysqli_query($GLOBALS['connect'], "INSERT INTO unvalid_session(userCode, unvalid_time, day) 
            VALUES($userCode, '$current_time', '$date')");
    } else if($current_time >= date('H:i', strtotime('6:00')) && $current_time <= date('H:i', strtotime('8:30'))) {    
        if(is_inserted_time($id_user_code, "time_open_morning") == false) {
            insert_time($id_user_code, "time_open_morning");
        }
    } else if($current_time >= date('H:i', strtotime('11:30')) && $current_time <= date('H:i', strtotime('12:30'))) {
        if(is_inserted_time($id_user_code, "time_close_morning") == false) {
            insert_time($id_user_code, "time_close_morning");
        }
    } else if($current_time >= date('H:i', strtotime('13:00')) && $current_time <= date('H:i', strtotime('14:00'))) {
        if(is_inserted_time($id_user_code, "time_open_afternoon") == false) {
            insert_time($id_user_code, "time_open_afternoon");
        }
    } else if($current_time >= date('H:i', strtotime('17:00')) && $current_time <= date('H:i', strtotime('18:30'))) {
        if(is_inserted_time($id_user_code, "time_close_afternoon") == false) {
            insert_time($id_user_code, "time_close_afternoon");
        }
    } else {
        echo "Not on valid time!!!";
        $date = date("Y-m-d");
        $current_time = date('H:i');
        mysqli_query($GLOBALS['connect'], "INSERT INTO unvalid_session(userCode, unvalid_time, day) 
            VALUES($userCode, '$current_time', '$date')");
    }
}

function is_inserted_time($id_user_code, $time) {
    $date = date("Y-m-d");
    var_dump($date);
    $sql = "SELECT * FROM user_session WHERE id_user_code = $id_user_code AND date = '$date'";
    $query = mysqli_query($GLOBALS['connect'], $sql);
    $result = mysqli_fetch_array($query);
    var_dump($result);
    if($result[$time] == "00:00:00") {
        return false;
    }
    return true;
}

function insert_time($id_user_code, $time) {
    $date = date("Y-m-d");
    $current_time = date('H:i');
    $sql = "UPDATE user_session SET ".$time."= '$current_time' WHERE id_user_code = $id_user_code AND date = '$date'";
    mysqli_query($GLOBALS['connect'], $sql);
}

//kiem tra xem usercode da co trong csdl chua neu co thi cho update time, neu khong thi dua vao unvalid_session
function check_valid_user($userCode) {
    $sql = "SELECT * FROM user WHERE id = $userCode";
    $query = mysqli_query($GLOBALS['connect'], $sql);
    $num_rows = mysqli_num_rows($query);
    if($num_rows > 0) {
        return true;
    } else {
        return false;
    }
}
?>
