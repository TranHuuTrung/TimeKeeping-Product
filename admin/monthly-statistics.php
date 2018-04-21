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
                    <li class="breadcrumb-item active" aria-current="page">monthly-statistics</li>
                </ol>
            </nav>
        </div>

        <div class="content-main col-xs-7 col-sm-10 col-md-10 col-lg-10">
            <div class="row text-center title-table">
                <div class="alert">
                    <h2>Bảng thống kê hàng tháng</h2>
                </div>
            </div>
            <?php
                $month_current = date('m') ;
                $year_current = date('Y') ;
                // $date_current = date('Y-m-d');
                if(isset($_POST['add_month'])){
                    if(isset($_POST['month_add']) && isset($_POST['year_add'])){
                        $month_current = $_POST['month_add'] ;
                        $year_current = $_POST['year_add'] ;
                        $month_current ++;
                        if($month_current === 13){
                            $month_current = 1;
                            $year_current++;
                        }
                    }
                }
                // khi button name="sub_month" nhan de lui thang lai
                if(isset($_POST['sub_month'])){
                    if(isset($_POST['month_sub']) && isset($_POST['year_sub'])){
                        $month_current = $_POST['month_sub'] ;
                        $year_current = $_POST['year_sub'] ;
                        $month_current --;
                        if($month_current === 0){
                            $month_current = 12;
                            $year_current--;
                        }
                    }
                }
                
            ?>
            <?php
             $date_start = '2018-04-16' ;
             $date_end = '2018-04-25';
             var_dump($date_start);
             //thực hiện câu sql để lấy thông tin
            // $sql_statistics = "SELECT * FROM user_session AS us INNER JOIN users WHERE (us.day BETWEEN CAST('2018-04-16' AS DATE) AND CAST('2018-04-20' AS DATE)) AND  us.userCode = users.id ";
             //thực hiện truy vấn dữ liệu 
            $sql_statistics = "SELECT * FROM user_session AS us WHERE us.day = CAST('2018-04-20' AS DATE) ";
             
             $query_statistics = mysqli_query($connect, $sql_statistics);
             
            ?>

            <div class="row text-center title-table number-month-year">
                <!-- <button id="sub_month" onclick="sub()" class="label label-success">
                    <span class="fa  fa-angle-left"></span>
                </button> -->
                <form style="display: inline-block" method="POST">
                    <input type="hidden" name="month_sub" value="<?php echo $month_current?>" />
                    <input type="hidden" name="year_sub" value="<?php echo $year_current ?>" />
                    <button name="sub_month" class="label label-success">
                        <span class="fa  fa-angle-left"></span>
                    </button>
                </form>
                <span class="month-sp">
                Tháng 
                <!-- <i id="month"><script>document.write(month)</script></i>  -->
                <i id="month_display"><?php echo $month_current ?></i>
                /
                 <!-- <i id="year"><script>document.write(year)</script></i> -->
                 <i id="year_display"><?php echo $year_current ?></i>
                </span>
                <form style="display: inline-block" method="POST">
                    <input type="hidden" name="month_add" value="<?php echo $month_current ?>"/>
                    <input type="hidden" name="year_add" value="<?php echo $year_current ?>" />
                    <button name="add_month" class="label label-success">
                        <span class="fa  fa-angle-right"></span>
                    </button>
                </form>  
            </div>

            <div class="table-responsive col-md-10 col-md-offset-1 col-lg-10">
                <table class="displayDataTable table display table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th class="text-center"> STT </th>
                            <th class="text-center"> Tên </th>
                            <th class="text-center"> Địa chỉ </th>
                            <th class="text-center"> Số ngày làm </th>
                            <th class="text-center"> Số ngày nghỉ </th>
                            <th class="text-center"> Lỗi </th>
                            <th class="text-center"> Thao tác </th>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php
                            $i = 0;
                            while($data_statistics = mysqli_fetch_array($query_statistics)){
                        ?>
                        <tr>
                            <td><?php echo ($i + 1)?></td>
                            <td><?php echo $data_statistics["id"]?></td>
                            <td><?php echo $data_statistics["id"]?></td>
                            <td>25</td>
                            <td>1</td>
                            <td>Lỗi</td>
                            <!-- <td>
                                <form style="display: inline-block" action="detail-user-statistic.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $data_statistics["id"] ?>"/>
                                    <input type="hidden" name="month" value="<?php  echo $month_current?>" />
                                    <input type="hidden" name="year" value="<?php  echo $year_current ?>" />
                                    <input type="hidden" name="name" value="<?php echo $data_statistics["name"]?>" />
                                    <button id="detail-btn" class="label label-success">
                                        Chi tiết
                                    </button>
                                </form>
                            </td> -->
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