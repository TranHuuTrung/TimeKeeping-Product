<?php
     session_start();
     //xóa bỏ session
    //    unset($_SESSION);
       unset($_SESSION['username']);
       unset($_SESSION['password']);
       session_destroy();
       header('Location: http://localhost/doanwebvdk/index.php');
?>