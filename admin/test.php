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
          <li class="breadcrumb-item active" aria-current="page">Test</li>
        </ol>
      </nav>
    </div>
    <div class="content-main col-xs-7 col-sm-10 col-md-10 col-lg-10">
      <?php
        //thực hiện câu sql để lấy thông tin
        $sql_unvalid = "SELECT * FROM unvalid_session";
        //thực hiện truy vấn dữ liệu 
        $query_unvalid = mysqli_query($connect, $sql_unvalid);
          
      ?>
      
      <div class="row text-center title-table">    
        <div class="alert">
            <h2>Bảng thống kê các giao dịch lỗi</h2>
        </div>
      </div>
        
      <div class="table-responsive col-md-10 col-md-offset-1 col-lg-10">
        <table class="displayDataTable table table-bordered table-hover text-center">
          <thead>
            <tr>
              <th class="text-center one-row"> STT </th>
              <th class="text-center one-row"> UserCode </th>
              <th class="text-center one-row"> Date </th>
              <th class="text-center one-row"> Time </th>
            </tr>
          </thead>
          <tbody> 
          <?php
                 $i = 0;
                 while($data_unvalid = mysqli_fetch_array($query_unvalid)){
            ?>
            <tr>
              <td><?php echo ($i + 1) ?></td>
              <td><?php echo $data_unvalid["userCode"]?></td>
              <td><?php echo $data_unvalid["unvalid_time"]?></td>
              <td><?php echo $data_unvalid["day"]?></td>
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