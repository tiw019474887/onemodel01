<!doctype html>
<html>

<head>
	<meta http-equiv="Content-Language" content="th">
	<meta http-equiv="content-Type" content="text/html; charset=window-874">
	<meta http-equiv="content-Type" content="text/html; charset=tis-620">
    <meta charset="utf-8">

    <link rel="icon" href="/img/onemodel.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/onemodel.png" type="image/x-icon">

    <title>Onemodel</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/bootstrap/dashboard.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

        <style>
            body {
                padding-top:100px;
            }
        </style>

        @yield('css')

    </head>

    <body>

    <span us-spinner="{radius:30, width:8, length: 16}"></span>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                       <a class="navbar-brand" href="#">OneModel</a>
                 </div>
               <form class="navbar-form navbar-left" role="search">
                   <div class="form-group">
                     <input type="text" class="form-control" placeholder=".....">
                   </div>
                   <button type="submit" class="btn btn-default">ค้นหา</button>
               </form>

             <div id="navbar" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                     <li><a href="/a/research-project"></a></li>
                  </ul>
               <div id="mainApp" >
                  <ul class="nav navbar-nav navbar-right" ng-if="user!==null">
                     <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <span class="caret"></span>
                        </a>
                            <ul class="dropdown-menu" role="menu">
                                  <li><a href="project"> เพิ่มโครงการ</a></li>
                                  <li><a href="#">แก้ไขข้อมูลส่วนตัว</a></li>
                                  <li><a href="#">ออกจากระบบ</a></li>
                            </ul>
                     </li>
                  </ul>
                </div>

                </div><!--/.nav-collapse -->

             </div>
        </nav>
		<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li>
                   <a>เมนู<span class="sr-only">(current)</span></a>
                </li>
                <li>
                   <a href="project">เพิ่มโมเดล</a>
                </li>
                <li>
                   <a href="faculty">เพิ่มคณะ</a>
                </li>
                <li>
                   <a href="#"></a>
                </li>

            </ul>
        </div>
    </div>

        <div class="container">

            @yield('content')

        </div><!-- /.container -->


        <!-- jQuery -->
        <script src="/bootstrap/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/bootstrap/js/bootstrap.min.js"></script>


        <!-- Plugin JavaScript -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="/bootstrap/js/classie.js"></script>
        <script src="/bootstrap/js/cbpAnimatedHeader.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="/bootstrap/js/freelancer.js"></script>
        <script src="/thirdparty/angularjs/angular.min.js"></script>
        <script src="/thirdparty/angular-loading-spinner/angular-loading-spinner.js"></script>

        @yield('js')


       </div>

    </body>
</html>
