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
                    <li class="breadcrumb-item active" aria-current="page">About application</li>
                </ol>
            </nav>
        </div>
        <div class="content-main col-xs-7 col-sm-10 col-md-10 col-lg-10">
             
             <?php echo $_SESSION["username"] ?>
            
        </div>
    
    </div>
<?php include("includes/footer.php") ?>