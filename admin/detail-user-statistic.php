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
                    <li class="breadcrumb-item active" aria-current="page">Detail user statistic</li>
                </ol>
            </nav>
        </div>

        <div class="content-main col-xs-7 col-sm-10 col-md-10 col-lg-10">
            <div class="row text-center title-table">
                <div class="alert">
                    <h2>Bảng thống kê hàng tháng từng nhân viên</h2>
                </div>
            </div>
            <!-- nhan du lieu tu monthly-statistics -->
            <?php
              if(isset($_POST["id"])&& isset($_POST["month"])&&isset($_POST["year"])){
                $id = $_POST["id"];
                $name = $_POST['name'];
                $address = $_POST['address'];
                $month = $_POST["month"];
                $year = $_POST["year"];
                $working_day = $_POST["working_day"];
                $day_off = $_POST["day_off"];
              }else{
                  $id = 0;
                  $name ="";
                  $month = "0";
                  $year = "0";
                  $day_off = "0";
              }
                
            ?>
            <div class="row text-center title-table number-month-year">
                <span class="month-sp">
                    Tháng 
                    <i id="month_display"><?php echo $month ?></i>
                    /
                    <i id="year_display"><?php echo $year ?></i>
                </span>
            </div>

            <div class="row">
                <div class="name-user-statistics col-md-10 col-md-offset-1 col-lg-10">
                    <span class="sp-name-user">Họ và tên: </span> <?php echo $name;?>
                    <br>
                    <span class="sp-name-user">Địa chỉ: </span> <?php echo $address; ?>
                </div>
            </div>
            
            <div class="table-responsive col-md-10 col-md-offset-1 col-lg-10">
                <table class="displayDataTable table display table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th class="text-center"> Ngày </th>
                            <th class="text-center"> Sáng </th>
                            <th class="text-center"> Chiều </th>
                            <th class="text-center"> Lỗi </th>
                            <th class="text-center"> Tổng cộng </th>
                        </tr>
                    </thead>
                    <tbody> 
                     
                    <?php   
                        $sql_result = "SELECT * FROM user_session WHERE userCode = $id AND MONTH(day) = $month AND YEAR(day) = $year ORDER BY DAY(day) ASC";
                        $result = mysqli_query($connect, $sql_result); 
                        $count_error_check = 0;    
                        $count_day = 0;                      
                        while($row = mysqli_fetch_array($result)){
                        
                    ?>

                        <tr>                           
                            <td><span>
                            <?php 
                                $error_check = false;
                                $weekday = date("l", strtotime($row["day"]));
                                $weekday = strtolower($weekday);
                                switch($weekday) {
                                    case 'monday':
                                        $weekday = 'Thứ hai';
                                        break;
                                    case 'tuesday':
                                        $weekday = 'Thứ ba';
                                        break;
                                    case 'wednesday':
                                        $weekday = 'Thứ tư';
                                        break;
                                    case 'thursday':
                                        $weekday = 'Thứ năm';
                                        break;
                                    case 'friday':
                                        $weekday = 'Thứ sáu';
                                        break;
                                    case 'saturday':
                                        $weekday = 'Thứ bảy';
                                        break;
                                    default:
                                        $weekday = 'Chủ nhật';
                                        break;
                                }
                                echo $weekday.' - Ngày '.date('d/m', strtotime($row["day"])) ;
                            ?>    
                            </span></td>
                           
                            <td>
                                <?php
                                if($row['timeInMorning'] != "00:00:00" && $row['timeOutMorning'] != "00:00:00") {
                                   $count_day += 0.5;
                                   echo '<span class="fa fa-check green"></span>';
                                } else if($row['timeInMorning'] != "00:00:00" && $row['timeOutMorning'] == "00:00:00") {
                                     $error_check = true;
                                     $count_day += 0.5; 
                                     $count_error_check ++;
                                     echo '<span class="fa fa-check red"></span>';
                                }
                               ?>
                            </td>

                            <td>
                            <?php
                                if($row['timeInAfternoon'] != "00:00:00" && $row['timeOutAfternoon'] != "00:00:00") {
                                    $count_day += 0.5;
                                    echo '<span class="fa fa-check green"></span>';
                                } else if($row['timeInAfternoon'] != "00:00:00" && $row['timeOutAfternoon'] == "00:00:00") {
                                     $error_check = true;
                                     $count_day += 0.5;
                                     $count_error_check++;
                                     echo '<span class="fa fa-check red"></span>';
                                }
                               ?>
                            </td>
                            <td>
                            <?php
                              if($error_check){
                                  echo "Không quẹt thẻ";
                              }else{
                                  echo "";
                              }
                            ?>
                            </td>
                            <td>1</td>
                        </tr> 

                        <?php } ?>                       
                    </tbody>
                </table>

                <div class="row">
                    <div class="name-user-statistics col-md-12 col-lg-12">
                        <label class="total-result-user">KẾT QUẢ THÁNG <?php echo $month ?>/<?php echo $year ?> </label>
                        <ul class="detail-total-result-user">
                            <li> Tổng công: <?php echo $count_day ?></li>
                            <li> Số ngày nghỉ: <?php echo $day_off?></li>
                            <li> Số lỗi: <?php echo  $count_error_check?> </li>
                            <li>   <button type="button" class="btn btn-primary" onclick="onBackMonthlyStatistics()">Back</button> </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <script>
            function onBackMonthlyStatistics(){
                window.location.href="./monthly-statistics.php";
            }
        </script>

    </div>
<?php include("includes/footer.php") ?>