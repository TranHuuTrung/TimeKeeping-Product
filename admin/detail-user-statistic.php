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
                $id = $_POST["id"];
                $month = $_POST["month"];
                $year = $_POST["year"];
                var_dump($month);
                var_dump($year);
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
                    <span class="sp-name-user">Họ và tên: </span> <?php echo $_POST['name'];?>
                    <br>
                    <span class="sp-name-user">Class: </span> 15T2
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
                        <tr>
                            <td><span>
                            <?php 
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
                            <td>
                               <span class="fa fa-check green"></span>
                            </td>
                            <td>
                               <span class="fa fa-check red"></span>
                            </td>
                            <td>Không quẹt thẻ</td>
                            <td>1</td>
                        </tr> 
                        <tr>
                            <td>2</td>
                            <td>
                               <span class="fa fa-check green"></span>
                            </td>
                            <td>
                               <span class="fa fa-check green"></span>
                            </td>
                            <td></td>
                            <td>1</td>
                        </tr> 
                        <tr>
                            <td>3</td>
                            <td>
                               <span class="fa fa-check green"></span>
                            </td>
                            <td>
                               <!-- <span class="fa fa-check"></span> -->
                            </td>
                            <td></td>
                            <td>0.5</td>
                        </tr> 
                        <tr>
                            <td>4</td>
                            <td>
                               <span class="fa fa-check red"></span>
                            </td>
                            <td>
                               <span class="fa fa-check green"></span>
                            </td>
                            <td>Không quẹt thẻ</td>
                            <td>1</td>
                        </tr> 
                    </tbody>
                </table>

                <div class="row">
                    <div class="name-user-statistics col-md-12 col-lg-12">
                        <label class="total-result-user">KẾT QUẢ THÁNG 09/2018 </label>
                        <ul class="detail-total-result-user">
                            <li> Tổng công: 25</li>
                            <li> Số ngày nghỉ: 1</li>
                            <li>  Số lỗi: 1 </li>
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