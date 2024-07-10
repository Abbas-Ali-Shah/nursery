@extends('Layout.app')

@section('content')
  <div class="hold-transition sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a href="index.html" class="logo"> <!-- Logo -->
                <span class="logo-mini">
                    <!--<b>A</b>H-admin-->
                    <img src="assets/dist/img/mini-logo.png" alt="">
                </span>
                <span class="logo-lg">
                    <!--<b>Admin</b>H-admin-->
                    <!-- <img src="assets/dist/img/logo.png" alt=""> -->
                    <h3>IMPERIAL Tiles</h3>
                </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top ">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-tasks"></span>
                </a>
                <div class="navbar-custom-menu">
                   
                </div>
            </nav>
        </header>
        <!-- =============================================== -->
        <!-- Left side column. contains the sidebar -->
        @include('includes.sidebar');
        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                 <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                        <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>   
                <div class="header-icon">
                    <i class="fa fa-tachometer"></i>
                </div>
                <div class="header-title">
                    <h1> Dashboard</h1>
                    <small> Dashboard features</small>
                    <ol class="breadcrumb hidden-xs">
                    

                        <li><a href="{{ route('logout') }}"><i class="pe-7s-logout"></i>admin Logout</a></li>
                        <li><a href="{{ route('logout') }}"><i class="pe-7s-logout"></i> Logout</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </section>
        <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="panel panel-bd cardbox">
                            <div class="panel-body">
                                <div class="statistic-box">
                                    <h2><span class="count-number">15</span>
                                    </h2>
                                </div>
                                <div class="items pull-left">
                                    <i class="fa fa-users fa-2x"></i>
                                    <h4>Cash And Hands </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="panel panel-bd cardbox">
                            <div class="panel-body">
                                <div class="statistic-box">
                                    <h2><span class="count-number">19</span>
                                    </h2>
                                </div>
                                <div class="items pull-left">
                                    <i class="fa fa-users fa-2x"></i>
                                    <h4>Total Customer</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="panel panel-bd cardbox">
                            <div class="panel-body">
                                <div class="statistic-box">
                                    <h2><span class="count-number">05</span>
                                    </h2>
                                </div>
                                <div class="items pull-left">
                                    <i class="fa fa-user-circle fa-2x"></i>
                                    <h4>Total Supplier</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="panel panel-bd cardbox">
                            <div class="panel-body">
                                <div class="statistic-box">
                                    <h2><span class="count-number">9</span>
                                    </h2>
                                </div>
                                <div class="items pull-left">
                                    <i class="fa fa-users fa-2x"></i>
                                    <h4>Total Sale</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="panel panel-bd cardbox">
                            <div class="panel-body">
                                <div class="statistic-box">
                                    <h2><span class="count-number">6</span>
                                    </h2>
                                </div>
                                <div class="items pull-left">
                                    <i class="fa fa-user-circle fa-2x"></i>
                                    <h4> Total Purchase</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="panel panel-bd cardbox">
                            <div class="panel-body">
                                <div class="statistic-box">
                                    <h2><span class="count-number">3</span>
                                    </h2>
                                </div>
                                <div class="items pull-left">
                                <i class="fa fa-users fa-2x"></i>
                                <h4>Total Expences</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="panel panel-bd cardbox">
                            <div class="panel-body">
                                <div class="statistic-box">
                                    <h2><span class="count-number">4</span>
                                    </h2>
                                </div>
                                <div class="items pull-left">
                                <i class="fa fa-users fa-2x"></i>
                                <h4>Accountant</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="panel panel-bd cardbox">
                            <div class="panel-body">
                                <div class="statistic-box">
                                    <h2><span class="count-number">7</span>
                                    </h2>
                                </div>
                                <div class="items pull-left">
                                <i class="fa fa-users fa-2x"></i>
                                <h4>Receptionist</h4>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
         
            </section> <!-- /.content -->

        </div> <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
            <strong>Copyright &copy; 2016-2017 <a href="https://itartificer.com/">IT Artificer</a>.</strong> All rights reserved.
        </footer>
    </div> <!-- ./wrapper -->
    <!-- ./wrapper -->
  </div>
@endsection