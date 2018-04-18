<?php include("includes/header.php") ?>
        <!-- include navleft muon dong lai thi phai them </div> -->
        <?php include("includes/navleft.php") ?>
        <div class="alert breadcrumb-tab">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <i class="fa fa-home"></i>
                        <a href="home.php">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">ManagerUser</li>
                </ol>
            </nav>
        </div>
        <!-- xóa user -->

        <?php 
        if (isset($_GET['id_delete'])) {
            //thực hiện 1 câu lệnh sql để xóa
            $id_xoa = $_GET['id_delete'];
            $sql = "DELETE FROM users WHERE id ='$id_xoa' ";
            //thực hiện query
            mysqli_query($connect, $sql);
           header('Location: ./manager-user.php');
        }
      

        ?>
        <!-- end xóa thành viên -->
        <div class="content-main col-xs-7 col-sm-10 col-md-10 col-lg-10">
             
             <div class="row text-center title-table">
                <div class="alert">
                    <h2>Quản lí thông tin người dùng</h2>
                </div>
            </div>

             
             <div class="table-responsive col-md-10 col-md-offset-1 col-lg-10">
                <?php
                    //thực hiện câu sql để lấy thông tin
                    $sql_users = "SELECT * FROM users";
                    //thực hiện truy vấn dữ liệu 
                    $query_users = mysqli_query($connect, $sql_users);
                    
                ?>
                
                <button type="button" onclick="onAddUser()" class="btn btn-primary mb-5">
                     <span class="fa fa-plus"></span>&nbsp; Thêm người dùng
                </button>
                <table class="displayDataTable table display table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th class="text-center"> STT </th>
                            <th class="text-center"> ID </th>
                            <th class="text-center"> Name </th>
                            <th class="text-center"> Class </th>
                            <th class="text-center"> Gender </th>
                            <th class="text-center"> Address </th>
                            <th class="text-center"> Action </th>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php
                            $i = 0;
                            while($data_users = mysqli_fetch_array($query_users)){
                                $gender = $data_users["gender"]?"Nam":"Nữ";
                        ?>
                        <tr>
                            <td><?php echo ($i + 1) ?></td>
                            <td><?php echo $data_users["id"]?></td>
                            <td><?php echo $data_users["name"]?></td>
                            <td><?php echo $data_users["class"]?></td>
                            <td><?php echo $gender?></td>
                            <td><?php echo $data_users["address"]?></td>
                            <td>
                            <!-- echo $data_users["id"] -->
                                <!-- <a href="edit-user-info.php?id=<?php ; ?>" class="label label-success">Chỉnh Sửa</a> -->
                                <!-- method="post" action="page1.php?submit=true" -->
                                <form style="display: inline-block" action="edit-user-info.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $data_users["id"] ?>"/>
                                    <input type="hidden" name="name" value="<?php echo $data_users["name"] ?>"/>
                                    <input type="hidden" name="class" value="<?php echo $data_users["class"] ?>"/>
                                    <input type="hidden" name="gender" value="<?php echo $data_users["gender"] ?>"/>
                                    <input type="hidden" name="address" value="<?php echo $data_users["address"] ?>"/>
                                    <button id="edit-btn" class="label label-success">
                                         Chỉnh Sửa
                                    </button>
                                </form>
                                &nbsp;
                                <a href="manager-user.php?id_delete=<?php echo $data_users["id"];; ?>" onClick="return confirm('Are you sure Delete?')" class="label label-danger">Xóa</a>
                            </td>
                        </tr>
                        <?php
                        $i++;
                        }
                        ?> 
                    </tbody>
                </table>
            </div> 
        </div>
        <script>
        function onAddUser(){
            window.location.href="./add-user.php";
        }
        </script>
    
    </div>
<?php include("includes/footer.php") ?>