<?php include("includes/header.php") ?>
        <!-- include navleft muon dong lai thi phai them </div> -->
        <?php include("includes/navleft.php") ?>
        <div class="alert breadcrumb-tab">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <i class="fa fa-home"></i>
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit info user</li>
                </ol>
            </nav>
        </div>
        <div class="content-main col-xs-7 col-sm-10 col-md-10 col-lg-10">
            <div class="row text-center title-table">
                <div class="alert">
                    <h2>Chỉnh sửa thông tin người dùng</h2>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 col-lg-8">
                
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edit infomation</h3>
                    </div>
                    <div class="panel-body">
                            
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-12 mb-5">UserCode :</label>
                                <?php 
                                    $id = $_REQUEST["idUserCode"]; 
                                 ?>
                                <div class="col-sm-12">
                                <input disabled type="text" class="form-control" name="id" value="<?php echo $id;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 mb-5">Name :</label>
                                <div class="col-sm-12">
                                <input required type="text" class="form-control" name="name" placeholder="user name" value="<?php echo $_POST["name"] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 mb-5">Gender :</label>
                                <?php
                                    (isset($_POST["gender"])) ? $gender_default  = $_POST["gender"] : $gender_default=1; 
                                ?>
                                <div class="col-sm-12">
                                    <select class="form-control" name="gender">
                                        <option <?php if($gender_default == 1) echo 'selected'; ?> value="1">Nam</option>
                                        <option <?php if($gender_default == 0) echo 'selected'; ?> value="0">Nữ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 mb-5">Class :</label>
                                <div class="col-sm-12">
                                <input required type="text" class="form-control" name="class" placeholder="class" value="<?php echo $_POST["class"] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 mb-5">Address :</label>
                                <div class="col-sm-12">
                                <input required type="text" class="form-control" name="address" placeholder="class" value="<?php echo $_POST["address"] ?>">
                                </div>
                            </div>
                            
                            <button type="button" class="btn btn-primary" onclick="onBackManager()">Back</button>
                            
                            <button id="btn_doneEdit" type="submit" class="btn btn-success">Save</button>
                            
                        </form>

                         <!-- xử lí khi người dùng nhấn button save để hoàn thành việc chỉnh sửa  --> 
                        <?php
                            if(isset($_POST["btn_doneEdit"])){
                                // //lấy các thông tin sau khi đã chỉnh sửa
                                // $id        = $_POST["id"];
                                // $name      = $_POST["name"];
                                // $class     = $_POST["class"];
                                // $address   = $_POST["address"];
                                // $gender    = $_POST["gender"];

                                // //thực hiện câu lệnh update
                                // $sql_update = "UPDATE users SET name = '$name', class = '$class', 
                                // address = '$address', gender = '$gender' WHERE id ='$id'";
                                // mysqli_query($connect, $sql_update);

                                echo "<p style='color:green;'>Bạn đã chỉnh sửa thành công!</p>"; 
                                
                            }
                        ?>
        
                    </div>
                </div>
                
            </div> 
            
        </div>
            
    </div>
    <script>
        function onBackManager(){
            window.location.href="./manager-user.php";
        }
    </script>
<?php include("includes/footer.php") ?>