<?php include("includes/header.php") ?>
        <!-- end nav left by </div> -->
        <?php include("includes/navleft.php") ?>
        <div class="alert breadcrumb-tab">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <i class="fa fa-home"></i>
                        <a href="home.php">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Daily session</li>
                </ol>
            </nav>
        </div>
        <div class="content-main col-xs-7 col-sm-10 col-md-10 col-lg-10">
            <?php
                //thực hiện câu sql để lấy thông tin
                $sql_daily = "SELECT * FROM user_session AS us INNER JOIN users WHERE us.userCode = users.id ";
                //thực hiện truy vấn dữ liệu 
                $query_daily = mysqli_query($connect, $sql_daily);
                
            ?>
            
            <div class="row text-center title-table">
                
                <div class="alert">
                    <h2>Bảng thống kê giao dịch trong ngày</h2>
                </div>
                
            </div>
            
            <div class="table-responsive col-md-10 col-md-offset-1 col-lg-10">
                <table class="displayDataTable table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th rowspan="2" class="text-center one-row"> STT </th>
                            <th rowspan="2" class="text-center one-row"> Name </th>
                            <th rowspan="2" class="text-center one-row"> UserCode </th>
                            <th colspan="2" class="text-center">Morning</th>
                            <th colspan="2" class="text-center">Afternoon</th>
                            <th rowspan="2" class="text-center one-row"> Date </th>
                        </tr>
                        <tr>
                            <td>TimeIn</td>
                            <td>TimeOut</td>
                            <td>TimeIn</td>
                            <td>TimeOut</td>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php
                            $i = 0;
                            while($data_daily = mysqli_fetch_array($query_daily)){
                        ?>
                        <tr>
                            <td><?php echo ($i + 1) ?></td>
                            <td><?php echo $data_daily["name"]?></td>
                            <td><?php echo $data_daily["userCode"]?></td>
                            <td><?php echo $data_daily["timeInMorning"]?></td>
                            <td><?php echo $data_daily["timeOutMorning"]?></td>
                            <td><?php echo $data_daily["timeInAfternoon"]?></td>
                            <td><?php echo $data_daily["timeOutAfternoon"]?></td>
                            <td><?php echo $data_daily["day"]?></td> 
                        </tr>
                        <?php
                        $i++;
                        }
                        ?> 
                    </tbody>
                </table>
            </div>               
        </div>
        
     </div>
<?php include("includes/footer.php") ?>