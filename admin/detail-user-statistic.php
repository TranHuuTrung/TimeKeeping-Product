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
                $month = $_POST["month"];
                $year = $_POST["year"];
                $sum_day = $_POST["sum_day"];
                $day_off = $_POST["day_off"];
                $mistake = $_POST["mistake"];
              }else{
                  $id = 0;
                  $name ="";
                  $month = 0;
                  $year = 0;
                  $sum_day = 0;
                  $day_off = 0;
                  $mistake = 0;
              }
                
               
            ?>

            <script type="text/javascript">
                var month = <?php echo $month?>;
                var year = <?php echo $year ?>;
                function add(){ 
                    if(month > 0 && month < 13){
                        month++;
                    }
                    if(month === 13){
                        month = 1;
                        year++;
                    }
                    document.getElementById('month').innerHTML = month;
                    document.getElementById('year').innerHTML = year;

                }
                
                function sub(){
                    if(month > 0){
                        month--;
                    }
                    if(month === 0){
                        month=12;
                        year--;
                    }
                    document.getElementById('month').innerHTML = month;
                    document.getElementById('year').innerHTML = year;
                }
            </script>
      
            <?php
                $sql_user_statistics = "SELECT * FROM user_sesion as us INNER JOIN users WHERE us.id = users.userCode";
                $query_user_statistics = mysqli_query($connect, $sql_user_statistics);
                // var_dump($query_user_statistics);
            ?> 
            <div class="row text-center title-table number-month-year">
                <button onclick="sub()" class="label label-success">
                    <span class="fa  fa-angle-left"></span>
                </button>
                <!-- date('m/Y', strtotime("2018-09-15")) -->
                <span class="month-sp">Tháng <i id="month"><script>document.write(month)</script></i> / <i id="year"><script>document.write(year)</script></i></span>
                <button onclick="add()" class="label label-success">
                    <i class="fa fa-angle-right"></i>
                </button>   
            </div>

            <div class="row">
                <div class="name-user-statistics col-md-10 col-md-offset-1 col-lg-10">
                    <span class="sp-name-user">Họ và tên: </span> <?php echo $name;?>
                    <br>
                    <span class="sp-name-user">Address: </span> 15T2
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
                            $sql_result = "SELECT * FROM user_session WHERE userCode = $id AND MONTH(day) = $month AND YEAR(day) = $year";
                            $result = mysqli_query($connect, $sql_result);                           
                            while($row = mysqli_fetch_array($result)){
                            ?>

                        <tr>                           
                            <td><span>
                            <?php 
                                // $status_morning = 1; // 1: full, 0.5: half, 0: none
                                // $status_afternoon = 0.5;
                                // $css_check = "";
                                // function check_color($status){
                                //     if($status === 1){
                                //        return $css_check = "fa fa-check green";
                                //     }
                                //     if($status === 0.5){
                                //        return $css_check = "fa fa-check red";
                                //     }
                                    
                                // }
                                
                                $weekday = date("l");
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
                                echo $weekday.' - Ngày '.date('d/m') ;
                            ?>    
                            </span></td>
                            <!-- so ngay lam bang = (wwhile(row) { buoi++ })=> ngay buoi/2 -->
                            <!-- (SELECT users.name, users.address FROM user_session INNER JOIN users ON user_session.userCode = users.id WHERE user_session.timeInMorning != "00:00:00" AND user_session.userCode = "102150142")
UNION ALL
(SELECT users.name, users.address FROM user_session INNER JOIN users ON user_session.userCode = users.id WHERE user_session.timeInAfternoon != "00:00:00" AND user_session.userCode = "102150142") -->
                            <td>
                                <?php
                                if($row['timeInMorning'] != "00:00:00" && $row['timeOutMorning'] != "00:00:00") {
                                   echo '<span class="fa fa-check green"></span>';
                                } else if($row['timeInMorning'] != "00:00:00" && $row['timeOutMorning'] == "00:00:00") {
                                     echo '<span class="fa fa-check red"></span>';
                                }
                               ?>
                            </td>

                            <td>
                            <?php
                                if($row['timeInAfternoon'] != "00:00:00" && $row['timeOutAfternoon'] != "00:00:00") {
                                   echo '<span class="fa fa-check green"></span>';
                                } else if($row['timeInAfternoon'] != "00:00:00" && $row['timeOutAfternoon'] == "00:00:00") {
                                     echo '<span class="fa fa-check red"></span>';
                                }
                               ?>
                            </td>
                            <td>Không quẹt thẻ</td>
                            <td>1</td>
                        </tr> 

                        <?php } ?>                       
                    </tbody>
                </table>

                <div class="row">
                    <div class="name-user-statistics col-md-12 col-lg-12">
                        <label class="total-result-user">KẾT QUẢ THÁNG <?php echo $month ?>/<?php echo $year ?> </label>
                        <ul class="detail-total-result-user">
                            <li> Tổng công: <?php echo $sum_day?></li>
                            <li> Số ngày nghỉ: <?php echo $day_off?></li>
                            <li> Số lỗi: <?php echo $mistake?> </li>
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