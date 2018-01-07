<!doctype html>
<html data-ng-app="" lang="en">


<style>
    .current_page {
        background-color: darkgray;
    }
</style>


<head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.html" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Control Panel</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="./assets/css/turbo.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="./assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <script src="./assets/js/angular.min.js"></script>
    <link href="./././maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="./assets/vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">


</head>

<body>
<div class="wrapper">
<div class="sidebar">
    <div class="logo">
        <a href="./index.php" class="simple-text">
            Admin Panel
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="www.triclotech.com" class="simple-text">
            T
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
                        <li class = "current_page">
                <a href="index.php">
                    <i class="material-icons">airplay</i>
                    <p>
                        Home
                    </p>
                </a>
            </li>
            <li class = "">
                <a href="./notifications.php">
                    <i class="material-icons">snooze</i>
                    <p>News and Notifications</p>
                </a>
            </li>
            <li class = "">
                <a  href="./gallery.php"  >
                    <i class="material-icons">perm_media</i>
                    <p>Gallary

                    </p>
                </a>

            </li>


            <li class = "">
                <a  href="./lourdnadham.php" >
                    <i class="material-icons">library_books</i>
                    <p>Lourd Nadham Editions

                    </p>
                </a>

            </li>
    <li class = "">
        <a  href="./vicars.php" >
            <i class="material-icons">supervisor_account</i>
            <p>Vicars

            </p>
        </a>

    </li>
    <li class = "">
        <a  href="./advertisements.php" >
            <i class="material-icons">assessment</i>
            <p>Manage Advertisements

            </p>
        </a>

    </li>
    <li class = "">
        <a  href="./users.php" >
            <i class="material-icons">person</i>
            <p>Manage Users

            </p>
        </a>

    </li>
        </ul>

    </div>
</div>
<div class="main-panel">
    <nav class="navbar navbar-default navbar-absolute">
        <div class="container-fluid">
            <div class="navbar-minimize">
                <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                    <i class="material-icons visible-on-sidebar-regular f-26">keyboard_arrow_left</i>
                    <i class="material-icons visible-on-sidebar-mini f-26">keyboard_arrow_right</i>
                </button>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="javascript:;">
                    INDEX</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">notifications</i>
                            <span class="notification">0</span>
                            <p class="hidden-lg hidden-md">
                                Notifications
                                <b class="caret"></b>
                            </p>
                        </a>
                        <ul class="dropdown-menu">
                                                        <li>
                                <a href="javascript:;">You have no new messages</a>
                            </li>
                                
                        </ul>
                    </li>
                    
                    <li>
                        <a title="Logout" href='./index.php?logout=true' class="dropdown-toggle" >
                            <i class="material-icons">power_settings_new</i>
                            <p class="hidden-lg hidden-md">Logout</p>
                        </a>
                    </li>

                    <li class="separator hidden-lg hidden-md"></li>
                </ul>
            </div>
        </div>
    </nav>
    



@yield('content')

            </div>
    <footer class="footer">
    <div class="container">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="../index.php">
                        Home
                    </a>
                </li>
                <li>
                    <a href="http://www.triclotech.com">
                        Company
                    </a>
                </li>
                <li>
                    <a href="http://www.triclotech.com">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="http://www.triclotech.com">
                        Blog
                    </a>
                </li>
            </ul>
        </nav>
        <p class="copyright pull-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
            <a href="http://www.triclotech.com">Triclotech</a> Dashboard
        </p>
    </div>
</footer>
</div>
</div>
</body>

<!--   Core JS Files   -->
<script src="./assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="./assets/vendors/jquery-ui.min.js" type="text/javascript"></script>
<script src="./assets/vendors/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/vendors/material.min.js" type="text/javascript"></script>
<script src="./assets/vendors/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="./assets/vendors/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="./assets/vendors/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="./assets/vendors/charts/flot/jquery.flot.js"></script>
<script src="./assets/vendors/charts/flot/jquery.flot.resize.js"></script>
<script src="./assets/vendors/charts/flot/jquery.flot.pie.js"></script>
<script src="./assets/vendors/charts/flot/jquery.flot.stack.js"></script>
<script src="./assets/vendors/charts/flot/jquery.flot.categories.js"></script>
<script src="./assets/vendors/charts/chartjs/Chart.min.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="./assets/vendors/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="./assets/vendors/bootstrap-notify.js"></script>
<!-- DateTimePicker Plugin -->
<script src="./assets/vendors/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="./assets/vendors/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="./assets/vendors/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Select Plugin -->
<script src="./assets/vendors/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="./assets/vendors/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="./assets/vendors/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="./assets/vendors/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="./assets/vendors/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="./assets/vendors/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="./assets/js/turbo.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="./assets/js/demo.js"></script>

<script src="./assets/js/charts/flot-charts.js"></script>
<script src="./assets/js/charts/chartjs-charts.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initVectorMap();
    });
</script>

</html>
