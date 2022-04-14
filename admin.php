<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, pixel  design, pixel  dashboard bootstrap 4 dashboard template">
    <meta name="description" content="Pixel Admin is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Pixel Admin Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/pixel-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://wrappixel.com/demos/free-admin-templates/all-lite-landing-pages/assets/images/logos/pixel-favicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="ajax/ADM/insertAdm.js"></script>
    <script src="ajax/ADM/getAdmin.js"></script>
  

</head>

<body>
  
<!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars
"></i></a>
                <div class="top-left-part"><a class="logo" href="index.php"><b><img src="../plugins/images/pixeladmin-logo.png" alt="home" /></b><span class="hidden-xs"><img src="../plugins/images/pixeladmin-text.png" alt="home" /></span></a>
                </div>
                <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <img src="../plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b> </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li style="padding: 10px 0 0;">
                        <a href="index.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="profile.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Profile</span></a>
                    </li>
                    <li>
                        <a href="admin.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i><span class="hide-menu">administrators</span></a>
                    </li>
                    <!-- <li>
                        <a href="fontawesome.php" class="waves-effect"><i class="fa fa-font fa-fw"
                                aria-hidden="true"></i><span class="hide-menu">Icons</span></a>
                    </li> -->
                    <!-- <li>
                        <a href="map-google.php" class="waves-effect"><i class="fa fa-globe fa-fw"
                                aria-hidden="true"></i><span class="hide-menu">Google Map</span></a>
                    </li> -->
                    <li>
                        <a href="users.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i><span class="hide-menu">Users</span></a>
                    </li>
                    <li>
                        <a href="blank.php" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Blank Page</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Basic Table</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="" data-toggle="modal" data-target="#myModal">New Admin</a></li>
                        </ol>
                        <div class="container">

                            <!-- CRIAÇÃO DO MODAL -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">New Admin</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-8 col-xs-12">
                                                    <div class="white-box">
                                                        <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                                        </div>
                                                        <form id="fupForm" name="form1" method="POST">
                                                            <div class="form-group">
                                                                <label class="col-md-12">Full Name</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" id="NAME" name="NAME" placeholder="Johnathan Doe" class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Username</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" id="USER_NAME" name="USER_NAME" placeholder="Johnathan Doe" class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="example-email" class="col-md-12">Email</label>
                                                                <div class="col-md-12">
                                                                    <input id="ADMEMAIL" name="ADMEMAIL" type="text" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Password</label>
                                                                <div class="col-md-12">
                                                                    <input id="PASS_ADM" name="PASS_ADM" type="password" value="password" class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <input type="submit" class="btn btn-success" value="Save" id="butsave">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" id="close" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END MODAL-->

                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">

                        <div class="white-box">
                            <p class="text-muted">Add class <code>.table</code></p>

                            <div class="row bg-title">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                </div>

                         
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Data e Hora de Criação</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table">

                                    </tbody>
                                </table>
                            </div>
                                   <!-- CRIAÇÃO DO MODAL UPDATE-->
                                   <div class="modal fade" id="update_country" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Update Admin</h4>
                                            </div>
                                           
                                           
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-8 col-xs-12">
                                                        <div class="white-box">
                                                            <div class="alert alert-success alert-dismissible" id="successupdate" style="display:none;">
                                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                                            </div>
                                                           
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Full Name</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" id="name" name="name" placeholder="Johnathan " class="form-control form-control-line">
                                                                </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Username</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" id="username" name="username" placeholder="Johnathan " class="form-control form-control-line">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="example-email" class="col-md-12">Email</label>
                                                                    <div class="col-md-12">
                                                                        <input id="email" name="email" type="text" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Password</label>
                                                                    <div class="col-md-12">
                                                                        <input id="pass" name="pass" type="text" value="password" class="form-control form-control-line">
                                                                    </div>
                                                                    <input type="hidden" name="id_modal" id="id_modal" class="form-control-sm">
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-sm-12">
                                                                        <input type="submit" class="btn btn-success" value="Update" id="update_data">
                                                                    </div>
                                                                </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" id="close" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--END MODAL-->

                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <!-- <footer class="footer text-center"> 2020 &copy; Pixel Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a> </footer> -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>