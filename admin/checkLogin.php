<?php
    //ham nay su dung de kiem tra xem admin da login hay chua
    //neu chua login thi tra ve login page
    $username =  $_SESSION["username"];
    $password = $_SESSION["password"];
    $sql = "SELECT * FROM admins WHERE username = '$username' and password = '$password'";
    //coonect database
    $query = mysqli_query($connect, $sql);
    $num_row = mysqli_num_rows($query);
     //nếu num_row = 0 tức là truy vấn trong database ko có dữ liệu
    if($num_row == 0){
        header('Location: ../index.php'); 
    }


?>