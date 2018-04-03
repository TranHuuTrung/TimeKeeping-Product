<?php
 session_start();
 require_once("../includes/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/contentmain.css">
    <title>Đồ Án Vi Điều Khiển</title>
</head>
<body>
    <div class="container-fluid">
        <!-- header include navbar -->
       <div class="row">
            <div id="navbar" class="navbar navbar-default ace-save-state">
                <div class="navbar-container ace-save-state" id="navbar-container">
                    <!-- <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                        <span class="sr-only">Toggle sidebar</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> -->
                <!-- {/* header logo */} -->
                    <div class="navbar-header pull-left">
                        <a href="home.php" class="navbar-brand">
                            <small>
                                <i class="fa fa-leaf"></i>
                                Timekeeping App
                            </small>
                        </a>
                    </div>
                    <!-- {/* nav right  */} -->  
                    <div class="navbar-buttons navbar-header pull-right" role="navigation">
                        <ul class="nav ace-nav">
                            <li class="grey dropdown-modal">
                                <a data-toggle="dropdown" class="dropdown-toggle">
                                    <i class="ace-icon fa fa-tasks"></i>
                                    <span class="badge badge-grey">1</span>
                                </a>
                            </li>

                            <li class ="purple dropdown-modal">
                                <a data-toggle="dropdown" class ="dropdown-toggle" >
                                    <i class ="ace-icon fa fa-bell icon-animated-bell"></i>
                                    <span class ="badge badge-important">4</span>
                                </a>
                            </li>

                            <li class ="green dropdown-modal">
                                <a data-toggle="dropdown" class ="dropdown-toggle" >
                                    <i class ="ace-icon fa fa-envelope icon-animated-vertical"></i>
                                    <span class ="badge badge-success">6</span>
                                </a>
                            </li>

                            <li class="light-blue dropdown-modal">
                                <a data-toggle="dropdown" class="dropdown-toggle">
                                    <img class="nav-user-photo" src="http://ace.jeka.by/assets/images/avatars/user.jpg" alt="photo"/>
                                    <span class="user-info">
                                        <small>Welcome,</small>
                                        <?php
                                          echo $_SESSION["username"];
                                        ?>
                                    </span>

                                    <i class="ace-icon fa fa-caret-down"></i>
                                </a>

                                <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                    <li>
                                        <a>
                                            <i class="ace-icon fa fa-cog"></i>
                                            Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <i class="ace-icon fa fa-user"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="./logout.php">
                                            <i class="ace-icon fa fa-power-off"></i>
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
       </div>