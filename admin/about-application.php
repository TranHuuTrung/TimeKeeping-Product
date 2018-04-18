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
                    <li class="breadcrumb-item active" aria-current="page">About application</li>
                </ol>
            </nav>
        </div>
        <div class="content-main col-xs-7 col-sm-10 col-md-10 col-lg-10">
             
             <?php echo $_SESSION["username"] ?>
            
        </div>
    
    </div>
    <!-- <script type="text/javascript">
        $(document).ready(function(){
        var max_height = 0;
        //Duyệt qua 3 cột để lấy kích thước của cột lớn nhất
        $("#nav-left,.content-main").each(function(){
            if($(this).height() > max_height)
            max_height = $(this).height();
        });
        //Gán độ cao 3 cột theo giá trị max_height
        $("#nav-left,.content-main").height(max_height);
        });
    </script> -->

<?php include("includes/footer.php") ?>