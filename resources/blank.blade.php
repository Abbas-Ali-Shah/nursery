@extends('Layout.app');

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
                        <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </section>
        <!-- Main content -->
            <section class="content">
              

                <h1>this is my blank page</h1>
                   
         
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

