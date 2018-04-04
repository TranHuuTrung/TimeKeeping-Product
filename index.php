<?php 
ob_start();
session_start();
?>
<?php include "./header.php" ?>
    <?php 
        //connect đến database 
        require_once("./includes/connection.php");
        //kiểm tra đã nhấn nút đăng nhập chưa nếu ròi thì thực hiện tiếp
        if (isset($_POST["btn_login"])) {
            //thực hiện lấy các dữ liệu mà người dùng nhập vào từ form
            $username = $_POST['username'];
            $password = $_POST['password'];
            //làm sạch các thẻ html các kí tự đặc biệt do người dùng tạo ra để tấn công database theo phương thức sql injection
            $username = strip_tags($username); //loại bỏ các tag html
            $username = addslashes($username);  //các dấu , / ..

            $password = strip_tags($password);
            $password = addslashes($password);
            
            //thực hiện 1 câu query 
            
            $sql = "SELECT * FROM admins WHERE username = '$username' and password = '$password'";
            //coonect database
            $query = mysqli_query($connect, $sql);
            $num_row = mysqli_num_rows($query);

            //nếu num_row = 0 tức là truy vấn trong database ko có dữ liệu
            if($num_row == 0){
                echo " <div class='alert alert-danger'>
                         <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                          username or password not correct!
                    </div>";
            }else{
                //lấy thông tin từ bảng user trong database để lưu vào session
                //hàm mysqli_fetch_array trả về kết quả của 1 truy vấn dưới dạng mảng 
                while ($data = mysqli_fetch_array($query)) {
                    $_SESSION["user_id"]    = $data["id"];
                    $_SESSION["username"]   = $data["username"];
                    $_SESSION["password"]   = $data["password"];
                    $_SESSION["name"]      = $data["name"];
                }
                //sau khi thực hiện xong việc lưu vào session thì chuyển hướng trang sang 1 trang khác 
                header('Location: ./admin/home.php');  
              }
            }
            mysqli_close($connect);
    ?>

    <div class="panel panel-success">
        <div class="panel-heading">
            <h4 class="header blue lighter bigger">
                <i class="text-align fa fa-coffee green"></i>
                Please Enter Your Information
            </h4>
        </div> <!-- end heading panel -->
        <div class="panel-body">   
            <form method="POST" action="index.php">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <input type="text" required="required" class="form-control" name="username"  id="username" placeholder="Username">
                    </div>
                    &nbsp;
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                        <input type="password" required="required" class="form-control" name="password"  id="password" placeholder="password">
                    </div>
                </div>
                <label class="inline">
                    <input type="checkbox" class="ace">
                    <span class="lbl"> Remember Me</span>
                </label>
                <button type="submit" id="btn_login" onclick="onSubmitLogin()" name="btn_login" class="btn btn-sm btn-primary fl-right">
                    <i class="fa fa-key"></i>
                    <span class="bigger-110">Login</span>
                </button>
                <div class="space-4"></div>
                
            </form>
            <div class="social-or-login center">
                <span class="or-login">Or Login Using</span>
            </div>
            <div class="space-6"></div>

            <div class="social-login center">
                <a class="btn btn-primary">
                    <i class="text-align fa fa-facebook"></i>
                </a>
                <a class="btn btn-info">
                    <i class="text-align fa fa-twitter"></i>
                </a>
                <a class="btn btn-danger">
                    <i class="text-align fa fa-google-plus"></i>
                </a>
            </div>
        </div> <!-- end panel body -->
    </div> <!-- end panel -->
    
<?php include "./footer.php" ?>            
<?php ob_end_flush(); ?>