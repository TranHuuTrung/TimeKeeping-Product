 <!-- wrap main page -->
 <div class="row wrap-main">
    <div id="nav-left" class="col-xs-5 col-sm-2 col-md-2 col-lg-2">
        <div id="shortcuts">
            <button class="btn btn-success">
                <i class="fa fa-signal"></i>
            </button>
            <button class="btn btn-info">
                <i class="fa fa-pencil"></i>
            </button>
            <button onclick="managerUser()" class="btn btn-warning">
                <i class="fa fa-users"></i>
            </button>
            <button class="btn btn-danger">
                <i class="fa fa-cogs"></i>
            </button>
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list" style="top: 10px;">
            <li class="">
                <a href="home.php">
                    <i class="menu-icon fa fa-home"></i>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>
            <li class="">
                <a href="manager-user.php">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Manager User </span>
                </a>
            </li>
            <li class="">
                <a href="daily-session.php">
                    <i class="menu-icon fa fa-list-alt"></i>
                    <span class="menu-text">Session Daily </span>
                </a>
            </li>

            <li class="">
                <a href="aboutteam.php">
                    <i class="menu-icon fa  fa-users"></i>
                    <span class="menu-text">
                        About team
                    </span>
                </a>
            </li>

                <li class="">
                <a href="about-application.php">
                    <i class="menu-icon fa fa-question-circle-o"></i>
                    <span class="menu-text">
                        About Application
                    </span>
                </a>
            </li>

            <li class="">
                <a href="monthly-statistics.php">
                    <i class="menu-icon fa fa-picture-o"></i>
                    <span class="menu-text"> Monthly Statistics </span>
                </a>
            </li>
        </ul><!-- /.nav-list -->
    </div>

    <script>
        function managerUser(){
            window.location.href="./manager-user.php";
        }
    </script>