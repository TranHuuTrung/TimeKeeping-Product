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
                    <li class="breadcrumb-item active" aria-current="page">ManagerUser</li>
                </ol>
            </nav>
        </div>

        <div class="content-main col-xs-7 col-sm-10 col-md-10 col-lg-10">
            <div class="row text-center title-table">
                <div class="alert">
                    <h2>Bảng thống kê hàng tháng từng nhân viên</h2>
                </div>
            </div>
           
            <div class="row text-center title-table">
                <a href="">
                <span class="label label-success">
                    <span class="fa  fa-angle-left"></span>
                </span>
                </a>
                <span class="month-sp">Tháng 2 / 2018</span>
                <a href=""> 
                <span class="label label-success">
                    <span class="fa fa-angle-right"></span>
                </span>   
                </a>
            </div>

             <div class="row">
                <div class="name-user-statistics col-md-10 col-md-offset-1 col-lg-10">
                    <span class="sp-name-user">Họ và tên: </span> Trần Hữu Trung
                </div>
            </div>s
            

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
                            <td>1</td>
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
            </div>
        </div>


    </div>
<?php include("includes/footer.php") ?>