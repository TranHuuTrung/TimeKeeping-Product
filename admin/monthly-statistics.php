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
                    <h2>Bảng thống kê hàng tháng</h2>
                </div>
            </div>
            <div class="row text-center title-table">
                <a href="">
                <span class="label label-success">
                    <span class="fa  fa-angle-left"></span>
                </span>
                </a>
                Tháng 2 / 2018
                <a href=""> 
                <span class="label label-success">
                    <span class="fa fa-angle-right"></span>
                </span>   
                </a>
            </div>

            <div class="table-responsive col-md-10 col-md-offset-1 col-lg-10">
                <table class="displayDataTable table display table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th class="text-center"> STT </th>
                            <th class="text-center"> Tên </th>
                            <th class="text-center"> Số ngày làm </th>
                            <th class="text-center"> Số ngày nghỉ </th>
                            <th class="text-center"> Lỗi </th>
                            <th class="text-center"> Thao tác </th>
                        </tr>
                    </thead>
                    <tbody> 
                        <tr>
                            <td>1</td>
                            <td>Trần Hữu Trung</td>
                            <td>25</td>
                            <td>1</td>
                            <td>Lỗi</td>
                            <td>
                                <form style="display: inline-block" action="detail-user-statistic.php" method="POST">
                                    <input type="hidden" name="id" value=""/>
                                    <button id="edit-btn" class="label label-success">
                                        Chi tiết
                                    </button>
                                </form>
                            </td>
                        </tr> 
                        <tr>
                            <td>2</td>
                            <td>Lê Đình Tuyến</td>
                            <td>20</td>
                            <td>4</td>
                            <td>Lỗi</td>
                            <td>
                                <form style="display: inline-block" action="detail-user-statistic.php" method="POST">
                                    <input type="hidden" name="id" value=""/>
                                    <button id="edit-btn" class="label label-success">
                                        Chi tiết
                                    </button>
                                </form>
                            </td>
                        </tr> 
                    </tbody>
                </table>
            </div>
        </div>


    </div>
<?php include("includes/footer.php") ?>