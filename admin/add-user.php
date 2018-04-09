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
                    <li class="breadcrumb-item active" aria-current="page">Add new user</li>
                </ol>
            </nav>
        </div>

        <div class="content-main col-xs-7 col-sm-10 col-md-10 col-lg-10">
           
            <div class="row text-center title-table">
                <div class="alert">
                    <h2>Thêm mới người dùng</h2>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 col-lg-8">
                
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please fill in infomation</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group row">
                                <label class="col-sm-12 mb-5">UserCode :</label>                                
                                <div class="col-sm-12">
                                <input required type="text" class="form-control" name="id">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 mb-5">Name :</label>
                                <div class="col-sm-12">
                                <input 
                                    required type="text" class="form-control" name="name" 
                                    placeholder="user name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 mb-5">Gender :</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="gender">
                                        <option value="1">Nam</option>
                                        <option value="0">Nữ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 mb-5">Class :</label>
                                <div class="col-sm-12">
                                <input required type="text" class="form-control" name="class" placeholder="class">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 mb-5">Address :</label>
                                <div class="col-sm-12">
                                <input required type="text" class="form-control" name="address" placeholder="address">
                                </div>
                            </div>
                            
                            <button type="button" class="btn btn-primary" onclick="onBackManager()">Back</button>
                            
                            <button id="btn_doneAddt" name="btn_doneAddt" type="submit" class="btn btn-success">Save</button>
                            
                        </form>
                    </div>
                </div>

                <?php 
                
                  if(isset($_POST["btn_doneAddt"])){
                      $id = $_POST['id'];
                      $name = $_POST['name'];
                      $class = $_POST['class'];
                      $gender = $_POST['gender'];
                      $address = $_POST['address'];
                      
                      $sql_add = "INSERT INTO users(id, name, class, gender, address) VALUE('$id', '$name', '$class','$gender', '$address')";
                      $init_user = mysqli_query($connect, $sql_add);
                      if($init_user){
                        echo "<div class='alert alert-success'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                    Thêm user thành công
                                </div> ";
                      }else{
                        echo "<div class='alert alert-danger'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                    Đã tồn tại
                                </div> "; 
                      }
                  }
                
                ?>
                    
            </div> 
        </div>

        <script>
            function onBackManager(){
                window.location.href="./manager-user.php";
            }
        </script>

    </div>
<?php include("includes/footer.php") ?>